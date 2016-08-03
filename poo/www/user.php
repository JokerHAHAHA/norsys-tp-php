<?php
use \Poo\Autoloader;
use \Poo\Manager\UserManager;

include_once('../twig/lib/Twig/Autoloader.php');
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array('cache' => false));

require '../src/Autoloader.php';
Autoloader::require(); 



echo $twig->render('user.html.twig', array('users' => UserManager::findAll()));
