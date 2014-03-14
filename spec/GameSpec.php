<?php

namespace spec;

use Managers\Interfaces\CombatManager;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GameSpec extends ObjectBehavior
{
    function let(CombatManager $combatManager)
    {
        $this->beConstructedWith($combatManager);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Game');
    }
}
