<?php

require 'src/Helpers.php';
spl_autoload_register(function ($className){
  if (file_exists("src/$className.php")){
  require "src/$className.php";
  }
});
$zombie = new Soldier ('Zombie');
$zamkun = new Mage('ZamKun');
$zombie->setArmor(new BronzeArmor());
$zamkun->attack($zombie);
echo ("{$zamkun->getName()} obtiene una nueva espada");
$zamkun->setWeapon(new LongSword());
$zamkun->attack($zombie);
$zombie->attack($zamkun);


