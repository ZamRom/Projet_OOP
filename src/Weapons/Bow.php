<?php

namespace ZamRom\Weapons;
use ZamRom\Unit;

class Bow implements Weapon
{
  public function setDamage($damage){
    return $damage*5;
  }
  public function getDescription(Unit $attacker, Unit $opponent)
  {
    return ("{$attacker->getName()} dispara una flecha a {$opponent->getName()}");
  }
}
