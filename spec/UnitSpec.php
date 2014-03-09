<?php

namespace spec;

use Items\Interfaces\Wieldable;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Races\Race;
use Jobs\Job;
use Stats\Stats;

class UnitSpec extends ObjectBehavior
{

    function let(Stats $stats, Race $race, Job $job)
    {
        $stats->getStrength()->willReturn(8);
        $stats->getStamina()->willReturn(12);
        $stats->getDexterity()->willReturn(16);
        $stats->getIntelligence()->willReturn(11);
        $stats->getWisdom()->willReturn(14);

        $race->getName()->willReturn('Elf');
        $race->getStrength()->willReturn(-2);
        $race->getStamina()->willReturn(0);
        $race->getDexterity()->willReturn(2);
        $race->getIntelligence()->willReturn(0);
        $race->getWisdom()->willReturn(0);

        $job->getName()->willReturn('Thief');
        $job->getMaxHealth()->willReturn(100);

        $this->beConstructedWith($stats, $race, $job);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Unit');
    }

    function it_is_killable()
    {
        $this->shouldImplement('Killable');
    }

    function it_should_have_a_level()
    {
        $this->getLevel()->shouldEqual(1);
    }

    function it_can_level_up()
    {
        $this->levelUp();
        $this->getLevel()->shouldEqual(2);
    }

    function it_should_have_a_race()
    {
        $this->getRace()->getName()->shouldEqual('Elf');
    }

    function it_should_have_a_job()
    {
        $this->getJob()->getName()->shouldEqual('Thief');
    }

    function it_has_a_max_health()
    {
        $this->getMaxHealth()->shouldEqual(112);
    }

    function it_has_stats()
    {
        $this->getStats()->getStrength()->shouldEqual(8);
        $this->getStats()->getStamina()->shouldEqual(12);
        $this->getStats()->getDexterity()->shouldEqual(16);
        $this->getStats()->getIntelligence()->shouldEqual(11);
        $this->getStats()->getWisdom()->shouldEqual(14);
    }

    function it_has_stats_modified_by_race()
    {
        $this->getStrength()->shouldEqual(6);
        $this->getStamina()->shouldEqual(12);
        $this->getDexterity()->shouldEqual(18);
        $this->getIntelligence()->shouldEqual(11);
        $this->getWisdom()->shouldEqual(14);
    }

    function it_has_starting_health_equal_to_max_health()
    {
        $this->getHealth()->shouldEqual(112);
    }

    function it_can_take_damage()
    {
        $this->takeDamage(20);
        $this->getHealth()->shouldEqual(92);
    }

    function it_should_increase_max_health_on_level_up()
    {
        $this->getLevel()->shouldEqual(1);
        $this->getMaxHealth()->shouldEqual(112);

        $this->levelUp();
        $this->getMaxHealth()->shouldEqual(124);
    }

    function it_can_equip_a_wieldable_in_main_hand(Wieldable $weapon)
    {
        $weapon->getDamage()->willReturn(10);

        $this->setMainHand($weapon);
        $this->attack()->shouldEqual(10);
    }
}