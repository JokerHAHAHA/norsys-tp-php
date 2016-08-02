<?php 

include 'functions/fctPhp.php';

$targetId = $_POST['id'];
$newStatus = $_POST['status'];

changeStatusTicket($targetId, $newStatus);
