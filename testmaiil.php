<?php
require "vendor/autoload.php";
 $client = new MongoDB\Client;
 $db = $client->testemail;
      // Select Collection
    $collection = $db->email;
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['Subject'];
    $message = $_POST['message'];
	$headers = "From: shanayasinghanya071@gmail.com";
if(mail($email, $subject, $message, $headers))
{
if($_POST)
	{
	$insert=array(
	'name' => $_POST['name'],
	 'email'=> $_POST['email'],
	 'subject'=> $_POST['Subject'],
	 'message' => $_POST['message']
	 );
	 
	 if($collection->insertOne	($insert))
	 {	
header('location: contact.php');
}
	}
}
?>