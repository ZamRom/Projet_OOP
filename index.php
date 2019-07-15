<?php

namespace ZamRom;

require 'vendor/autoload.php';

use ZamRom\Weapons\LongSword;
use ZamRom\Weapons\Bow;

$deadzam= new Unit ('DeadZam');
$zamrom = new Unit ('ZamRom');
$deadzam->attack($zamrom);
$deadzam->setWeapon(new LongSword());
$deadzam->attack($zamrom);
$deadzam->setWeapon(new Bow());
$zamrom->attack($deadzam);
$zamrom->attack($deadzam);
$zamrom->attack($deadzam);