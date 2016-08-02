<?php

require '../src/class/Autoloader.php';
Autoloader::require();

$Arthur = new Model\Person('Arthur', 12, 'M');


var_dump($Arthur);