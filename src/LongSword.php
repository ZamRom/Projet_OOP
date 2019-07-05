<?php

class LongSword implements Weapon
{
  public function setDamage($damage){
    return $damage*5;
  }
}
