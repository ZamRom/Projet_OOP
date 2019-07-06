<?php

namespace ZamRom;

require 'vendor/autoload.php';

use ZamRom\Weapons\LongSword;
use ZamRom\Weapons\Bow;

$zombie= new Unit ('Zombie');
$zamkun = new Unit ('ZamKun');
$zombie->attack($zamkun);
$zombie->setWeapon(new LongSword());
$zombie->attack($zamkun);
$zamkun->setWeapon(new Bow());
$zamkun->attack($zombie);
