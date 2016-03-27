<?php

$name = $_POST['name'];
$phone = $_POST['nummer'];
$email = $_POST['email'];
$subject = $_POST['betreff'];
$messaged = $_POST['nachricht'];
 
 
$an = 'me@leonardl.de';
$message = "$messaged \n \n---------------------------------- \n \nKontaktdaten des Absenders: \n \nVor- und Nachname: $name \nTelefonnummer: $phone";
 
 
if ((!empty($name)) && (!empty($phone)) && (!empty($email)) && (!empty($subject)) && (!empty($message))) {

	mail($an, $subject, $message, 'From:' . $email);
	header("Location: /index.php?page=contact&sent=true");
	
} else {
	header("Location: /index.php?page=contact&sent=false");
}
?>