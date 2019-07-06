<?php

namespace ZamRom;

use ZamRom\Weapons\Weapon;
use ZamRom\Armors\Armor;
class Unit
{
  protected $name;
  protected $hp = 100;
  public $live = true;
  protected $armor;
  protected $weapon;
  protected $damage = 10;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
  public function isLive()
  {
    if ($this->live) return show("$this->name tiene $this->hp puntos de vida");
    show("$this->name ha muerto");
    exit();
  }

  public function move($direction)
  {
    show("{$this->name} avanza hacia {$direction}");
  }

  public function attack(Unit $opponent)
  {
    if ($this->weapon) {
      show("{$this->weapon->getDescription($this, $opponent)}");
    } else {
      echo "<p>{$this->name} ataca a {$opponent->getName()}</p>";
    }

    $opponent->takeDamage($this->damage);

  }

  public function takeDamage($damage)
  {
    if($this->armor) {
      $damage = $this->armor->absorbDamage($damage);
    }
    if(!$this->live) return show("eh perate");
    $this->hp = $this->hp - $damage;
    if( $this->hp <=0) $this->live =false;
    $this->isLive();
  }
  public function setArmor(Armor $armor)
  {
    $this->armor=$armor;
  }

  public function setWeapon(Weapon $weapon){
    $this->weapon=$weapon;
    $this->damage=$this->weapon->setDamage($this->damage);
  }
}
