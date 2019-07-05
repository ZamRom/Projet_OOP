<?php

class Archer extends Unit
{
  public function attack(Unit $opponent)
  {
    echo "<p>{$this->name} apuñala a {$opponent->getName()}</p>";
    $opponent->takeDamage($this->damage);
  }

}
