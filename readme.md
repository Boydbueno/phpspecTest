# PHP Game: Whut?!
> A theoretical game written in PHP. Just part of the API is written and this is tested by unit tests written in [phpspec](http://www.phpspec.net/en/stable/). 
> This project was started to get a better understanding of unit testing, test driven development and design patterns

Below are the contents of `spec/tests.txt`, displaying all the currently build tests and functionality:
```
      Behaviors\AI\Aggressive

  10  ✔ is initializable
  15  ✔ should be an AI behavior
  20  ✔ should act aggressively

      Behaviors\AI\Scared

  10  ✔ is initializable
  15  ✔ should be an AI behavior
  20  ✔ should act scared

      Behaviors\Move\Fly

  10  ✔ is initializable
  15  ✔ should fly when moving

      Behaviors\Move\Walk

  10  ✔ is initializable
  15  ✔ should walk when moving

      Game

  14  ✔ is initializable

      Items\Decorators\Flaming

  21  ✔ is initializable
  26  ✔ should increase the damage of the weapon

      Items\Decorators\Holy

  19  ✔ is initializable
  24  ✔ should increase the damage of the weapon

      Items\Weapons\Axe

   8  ✔ is initializable
  13  ✔ is a weapon
  18  ✔ has a damage number of 14
  23  ✔ does slashing and blunt damage

      Items\Weapons\Mace

   8  ✔ is initializable
  13  ✔ is a weapon
  18  ✔ has a damage number of 12
  23  ✔ does blunt damage
  28  - can stun
        todo: write pending example

      Items\Weapons\Sword

   9  ✔ is initializable
  14  ✔ should be a weapon
  19  ✔ has a damage number of 10
  24  ✔ does slashing damage

      Managers\CombatManager

  14  ✔ is initializable
  19  ✔ is a combat manager
  24  ✔ manages combat

      Managers\TurnManager

  12  ✔ is initializable
  17  ✔ stores a collection of actables
  28  ✔ can notify its observers to update

      Player

  17  ✔ is initializable
  22  ✔ is a unit
  27  ✔ should notify game when is has performed an action

      Races\Elf

  11  ✔ is initializable
  16  ✔ is a race
  21  ✔ is named as elf
  26  ✔ has stamina penalty
  31  ✔ has dexterity bonus

      Races\Orc

  10  ✔ is initializable
  15  ✔ is a race
  20  ✔ is named as orc
  25  ✔ has intelligence penalty
  30  ✔ has strength bonus

      Stats\Dexterity

  15  ✔ is a stat
  21  ✔ should have a name
  26  ✔ should have an acronym
  31  ✔ should have a value

      Stats\Intelligence

  15  ✔ is a stat
  21  ✔ should have a name
  26  ✔ should have an acronym
  31  ✔ should have a value

      Stats\Stamina

  15  ✔ is a stat
  21  ✔ should have a name
  26  ✔ should have an acronym
  31  ✔ should have a value

      Stats\Stats

  18  ✔ is initializable
  23  ✔ should contain strength
  28  ✔ should contain stamina
  33  ✔ should contain dexterity
  38  ✔ should contain intelligence
  43  ✔ should contain wisdom
  48  ✔ should use array passed in constructor as values
  53  ✔ will add missing stats automatically

      Stats\Strength

  16  ✔ is a stat
  22  ✔ should have a name
  27  ✔ should have an acronym
  32  ✔ should have a value

      Stats\Wisdom

  15  ✔ is a stat
  21  ✔ should have a name
  26  ✔ should have an acronym
  31  ✔ should have a value

      Units\Unit

  40  ✔ is initializable
  45  ✔ is killable
  53  ✔ should have a level
  58  ✔ can level up
  64  ✔ can move
  69  ✔ should have a race
  74  ✔ should have a job
  79  ✔ has a max health
  84  ✔ has stats
  93  ✔ has stats modified by race
 102  ✔ has starting health equal to max health
 107  ✔ its health cant exceed max health
 113  ✔ its health cant drop below zero
 119  ✔ should increase max health on level up
 128  ✔ can take damage
 134  ✔ has a damage number equal to its strength
 139  ✔ cant attack when dead
 145  ✔ can equip a wieldable in main hand
 150  ✔ will delegate attacking to the game


22 specs
94 examples (93 passed, 1 pending)
303ms
```
