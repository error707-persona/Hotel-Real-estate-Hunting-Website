<?php
  require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->vendordetailscollection;
session_start();
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
         /*
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security*/
        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        // choose the appropriate page to redirect users 
        die( header( 'location:Login.php' ) );

    }
$email=$_SESSION['email'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mobile=$_POST['phone'];
if(isset($_POST['submit'])){
if(isset($firstname))
	{
	$up=$collection->updateOne(
	['email'=>$email],['$set'=>['firstname'=>$firstname]]
	);
}
if(isset($lastname)){
	$y=$collection->updateOne(
	['email'=>$email],['$set'=>['lastname'=>$lastname]]
	);
}
if(isset($mobile)){
	$y=$collection->updateOne(
	['email'=>$email],['$set'=>['lastname'=>$mobile]]
	);
}
header("Location:cusprofile.php");
}
?>