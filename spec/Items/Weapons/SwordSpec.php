<?php namespace spec\Items\Weapons;

use Items\Weapons\Decorators\WeaponDecorator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SwordSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Items\Weapons\Sword');
    }

    function it_should_be_a_weapon()
    {
        $this->shouldBeAnInstanceOf('Items\Weapons\Weapon');
    }

    function it_has_a_damage_number_of_10()
    {
        $this->getDamage()->shouldEqual(10);
    }

    function it_does_slashing_damage()
    {
        $this->getDamageType()->shouldEqual(['slashing']);
    }

}
