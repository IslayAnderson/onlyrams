<?php

$name = $_GET["name"];
$email = $_GET["email"];
$msg = $_GET["message"];
$msg = wordwrap($msg,70);
$pre = "Dear ".$name."\n Thank you for getting in touch \n Your message:\n";
$pre = wordwrap($pre,70);

try{
	// send email
	mail("sheepmaster@onlyrams.co.uk", $name." - ".$email." - SHEEP TIME",$msg);
	mail($email, $name." - ".$email." - Thank you",$pre.$msg);
	header('form-response: Email Sent, Baaaaa!');
} catch (Exception $e) {
	header('form-response: Our TechSheep have made a boo boo and are on the case');
}
?>