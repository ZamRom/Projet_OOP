<?php


namespace ZamRom;

class LongSword implements Weapon
{
  public function setDamage($damage){
    return $damage*5;
  }
}
