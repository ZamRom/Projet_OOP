<?php

function show($message)
{
  echo("<p>$message</p>");
}
abstract class Unit
{
  protected $name;
  protected $hp = 100;
  public $live = true;
  protected $armor;

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
  }

  public function move($direction)
  {
    show("{$this->name} avanza hacia {$direction}");
  }

  public function attack(Unit $opponent)
  {
    echo "<p>{$this->name} ataca a {$opponent}</p>";
  }

  protected function takeDamage($damage)
  {
    $this->hp = $this->hp - $damage;
    $this->isLive();

  }
  public function setArmor(Armor $armor)
  {
    $this->armor=$armor;
  }
}

class Soldier extends Unit
{
  protected $damage = 60;
  public function attack(Unit $opponent)
  {
    if(!$this->live) return show("No puedes atacar porque estas muerto");
    echo "<p>{$this->name} apuñala a {$opponent->getName()}</p>";
    $opponent->takeDamage($this->damage);
  }
  public function takeDamage($damage)
  {
    if($this->armor) {
      $damage = $this->armor->absorbDamage($damage);
    }
    if(!$this->live) return show("eh perate");
    $this->hp = $this->hp - $damage;
    $this->isLive();
  }
}

class Archer extends Unit
{
  public function attack(Unit $opponent)
  {
    if(!$this->live) return show("No puedes atacar porque estas muerto");
    echo "<p>{$this->name} apuñala a {$opponent->getName()}</p>";
    $opponent->takeDamage($this->damage);
  }
  public function takeDamage($damage)
  {
    if(!$this->live) return show("eh perate");
    $this->hp = $this->hp - $damage / 2;
    $this->isLive();
  }
}

class Mage extends Unit
{
  protected $damage = 40;
  public function attack(Unit $opponent)
  {
    if(!$this->live) return show("No puedes atacar porque estas muerto");
    show("{$this->name} lanza un hechizo a {$opponent->getName()}");
    $opponent-> takeDamage($this->damage);
  }
  public function takeDamage($damage)
  {
    if(!$this->live) return show("eh perate");
    $this->hp = $this->hp - $damage;
    if($this->hp <=0) $this->live =false;
   $this->isLive();
  }
}
interface Armor
{
  public function absorbDamage($damage);
}

class BronzeArmor implements Armor
{
  public function absorbDamage($damage)
  {
    return $damage/2;
  }
}

$zombie = new Soldier ('Zombie');
$zamkun = new Mage('ZamKun');
$zombie->setArmor(new BronzeArmor());
$zamkun->attack($zombie);

