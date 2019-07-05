<?php


namespace ZamRom\Weapons;

class LongSword implements Weapon
{
  public function setDamage($damage){
    return $damage*5;
  }
}
