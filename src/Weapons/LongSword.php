<?php


namespace ZamRom\Weapons;

use ZamRom\Unit;

class LongSword implements Weapon
{
  public function setDamage($damage){
    return $damage*2;
  }
  public function getDescription(Unit $attacker, Unit $opponent)
  {
    return ("{$attacker->getName()} apuñala a {$opponent->getName()}");
  }
}
