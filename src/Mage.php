<?php

namespace ZamRom;

class Mage extends Unit
{
  protected $damage = 40;
  public function attack(Unit $opponent)
  {
    show("{$this->name} lanza un hechizo a {$opponent->getName()}");
    $opponent-> takeDamage($this->damage);
  }
}
