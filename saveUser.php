<?php
session_start();

include 'functions/fctPhp.php';
include 'classes/user.php';

$name = checkText($_POST['name']);
$firstname = checkText($_POST['firstname']);

if (checkEmail($_POST['email']) == false) {
	$_SESSION['error'] = "Votre adresse e-mail est incorrecte : " . $_POST['email'];
} else {
	$email = checkEmail($_POST['email']);

	$newUser = new User($name, $firstname, $email);

	postNewUser($newUser->getName(), $newUser->getFirstName(), $newUser->getEmail());
}


