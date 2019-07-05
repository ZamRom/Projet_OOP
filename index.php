<?php

namespace ZamRom;

require 'vendor/autoload.php';

use ZamRom\Weapons\LongSword;
use ZamRom\Armors\BronzeArmor;
$zombie = new Soldier ('Zombie');
$zamkun = new Mage('ZamKun');
$zombie->setArmor(new BronzeArmor());
$zamkun->attack($zombie);
echo ("{$zamkun->getName()} obtiene una nueva espada");
$zamkun->setWeapon(new LongSword());
$zamkun->attack($zombie);
$zombie->attack($zamkun);


