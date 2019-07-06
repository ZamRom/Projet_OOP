<?php

namespace ZamRom;

require 'vendor/autoload.php';

use ZamRom\Weapons\LongSword;

$zombie= new Unit ('Zombie');
$zamkun = new Unit ('ZamKun');
$zombie->attack($zamkun);
$zombie->setWeapon(new LongSword());
$zombie->attack($zamkun);
