<?php

use \Poo\Autoloader;
use \Poo\Model\ConnectDB;
use \Poo\Model\Person;
use \Poo\Model\Animal;


require '../src/class/Autoloader.php';
Autoloader::require();

$Arthur = new Person('Arthur', 27, 'M', 'Paulette');

print_r($Arthur); 

print_r(new Animal('Roxy')); 

$DB = new ConnectDB();

print_r($DB->getConn());