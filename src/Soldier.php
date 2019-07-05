<?php

class Soldier extends Unit
{
  protected $damage = 60;
  public function attack(Unit $opponent)
  {
    echo "<p>{$this->name} apuñala a {$opponent->getName()}</p>";
    $opponent->takeDamage($this->damage);
  }

}

