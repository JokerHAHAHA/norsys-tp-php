<?php


/**
 * to require dynamicaly
*/
class Autoloader
{
    static function require(){

        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class){

        $class = str_replace('\\', '/', $class);
        var_dump($class);


        require '../src/class/' . $class . '.php';
    }
}