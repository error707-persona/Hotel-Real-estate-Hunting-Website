<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->propertycollection;

$propertyname=$_POST['propertyname'];
$ownerfirstname=$_POST['ownerfirstname'];
$ownerlastname=$_POST['ownerlastname'];
 $lotsize=$_POST['lotsize'];
 $bed=$_POST['bed'];
 $bath=$_POST['bath'];
 $garage=$_POST['garage'];
 $description=$_POST['description'];
 $propertyfeature=implode(',',$_POST['feature']);
 $price=$_POST['price'];
 $address=$_POST['address'];
 if($_POST=='butto'){
if($propertyname='' || $ownerfirstname='' || $ownerlastname='' || $lotsize='' || $bath='' || $garage='' || $description='' || $propertyfeature='' || $address='')
 {
	 header('edit.php');
 }
 }
elseif($propertyname!='' || $ownerfirstname!='' || $ownerlastname!='' || $lotsize!='' || $bath!='' || $garage!='' || $description!='' || $propertyfeature!='' || $address!='')
 {

 $insert=array(
 'propertyname'=>$propertyname,
 'ownerfirstname'=>$ownerfirstname,
 'ownerlastname'=>$ownerlastname,
 'lotsize'=>$lotsize,
 'bed'=>$bed,
 'bath'=>$bath,
 'garage'=>$garage,
'description'=>$description,
'propertyfeature'=>$propertyfeature,
'price'=>$price,
'address'=>$address
 );

	$insertdoc=$collection->insertOne($insert);
	header("Location:index.html");


 }
 
 ?>