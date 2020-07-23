<?php

$name = $_GET["name"];
$email = $_GET["email"];
$msg = $_GET["message"];
$msg = wordwrap($msg,70);
$pre = "Dear".$name."\n Thank you for getting in touch \n Your message:\n";
$pre = wordwrap($pre,70);

try{
	// send email
	mail("sheepmaster@onlyrams.co.uk", .$name." - ".$email." - SHEEP TIME",$pre.$msg);
	mail($email, .$name." - ".$email." - Thank you",$msg);
	$error = 'Our TechSheep have made a boo boo and are on the case';
    throw new Exception($error);
} catch (Exception $e) {
    echo '\n',  $e->getMessage(), "\n";
}
?>