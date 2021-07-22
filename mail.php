<?php     
require "vendor/autoload.php";
 $client = new MongoDB\Client;
 $db = $client->testemail1;
      // Select Collection
    $collection = $db->email1;
	
 $email = $_POST['email'];
$subject = 'Weekly update joiners';
$message = 'Thankyou for joining our website....we will give you weekly updates from now onwards ';
$headers = 'From: shanayasinghanya071@gmail.com';
mail($email,$subject,$message,$headers);
{
if($_POST)
	{
	$insert=array(
	 'email'=> $_POST['email'],
	 'subject'=> $subject 
	 );
	 
	 if($collection->insertOne	($insert))
	 {	
      header('location: index.php');
	 }
	}
}
?>