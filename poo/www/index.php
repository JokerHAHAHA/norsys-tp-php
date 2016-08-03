<?php
include_once('../twig/lib/Twig/Autoloader.php');
Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem('../views'); // Dossier contenant les templates
    $twig = new Twig_Environment($loader, array('cache' => false));


    echo $twig->render('index.tpl', array(
        'moteur_name' => 'Twig'
    ));

