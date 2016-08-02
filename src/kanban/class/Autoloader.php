<?php

class Autoloader
{
    static function require(){

        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class){
        require 'src/kanban/class' . $class . '.php';
    }
}