<?php 

function checkText($txt) {
	$txt = filter_var($txt, FILTER_SANITIZE_STRING);
	return $txt;
}

function checkEmail($email) {
	// Remove all illegal characters from email
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);

	// Validate e-mail
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		return $email;
	} else {
		return false;
	}
}

?>