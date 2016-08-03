<?php

use \Poo\Autoloader;
use \Poo\Model\ConnectDB;
// use \Poo\Model\User;
use \Poo\Manager\UserManager;

require '../src/class/Autoloader.php';
Autoloader::require();

$user = UserManager::findOneById(1);

print_r($user);






