<?php


namespace ZamRom\Weapons;

class Bow extends Weapon
{
  public function setDamage($damage){
    return $damage *2;
  }

  public function attack(Unit $opponent)
  {
    echo "<p>{$this->name} dispara a {$opponent->getName()}</p>";
    $opponent->takeDamage($this->damage);
  }

}
