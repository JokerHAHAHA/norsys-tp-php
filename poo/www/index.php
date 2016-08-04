<?php
use \Poo\Autoloader;
use \Poo\Manager\TicketManager;
use \Poo\Manager\UserManager;

include_once('../twig/lib/Twig/Autoloader.php');
Twig_Autoloader::register();


// Test sur la soumission du formulaire 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Traitement du formulaire ici
    var_dump($_SERVER);


    // Vérification du type de requete
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        if ((UserManager::validateDatas())['email'] == false) {
            // Retour à ton fichier js
            echo json_encode(['status' => 409]);
            // On stop le traitement ici        
            exit();  
        }        
    }

    header('Location: user.php');
}





$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array('cache' => false));

require '../src/Autoloader.php';
Autoloader::require(); 



echo $twig->render('board.html.twig', array(
    'Tickets' => TicketManager::findAll(),
    'Users' => UserManager::findAll()));

