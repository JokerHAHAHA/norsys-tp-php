<?php

include 'functions/fctPhp.php';
include 'classes/ticket.php';

$maker = checkText($_POST['maker']);
$worker = checkText($_POST['worker']);
$description = checkText($_POST['description']);


$newTicket = new Ticket($maker, $worker, $description);

postNewTicket($newTicket->getMaker(), $newTicket->getWorker(), $newTicket->getDescription(), $newTicket->getStatus());


