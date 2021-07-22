<?php
require 'vendor/autoload.php';
session_start();
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->customercollection;
$collection2=$companydb->bookproperty;
$collection3=$companydb->propertycollection;
$_SESSION['CUS']=$_SESSION['CUSID'];
$idd=$_GET['propid'];
$query=$collection3->findOne('_id'=>$idd);
if($query){
	foreach($query as $q){
	$arr2=array(
	'cusid'=>$_SESSION['CUS'],
	'propid'=>$idd;
	'propertyname'=>$q['propertyname'],
	'ownerfirstname'=>$q['ownerfirstname'],
	'ownerlastname'=>$q['ownerlastname'],
	'username'=>$q['username'],
	'email'=>$$q['email'],
	'lotsize'=>$q['lotsize'],
	'location'=>$q['location'],
	'bed'=>$q['bed'],
	'bath'=>$q['baths'],
	'garage'=>$q['garage'],
	'description'=>$q['description'],
	'propertyfeature'=>$q['propertyfeature'],
	'status'=>"Booked",
	'likecount'=>$count+1,
	'price'=>$price
	);
	$change=$collection2->insertOne($arr2);}
$up=$collecion3->updateOne(['_id'=>$idd],['set'=>['status'=>"Booked"]]);
header('Location:cusprofile.php');
}
?>