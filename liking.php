<?php
require 'vendor/autoload.php';

       $client =new MongoDB\client;
     /*  $client->connect();*/
       //echo "mongo connected";
    $db = $client->companydb;
    $collection = $db->likepropertycollection;
	$collection2=$db->propertycollection;
    $cursor = $collection->find(['email'=>$_SESSION['email'],'prop_id'=>$idd]);
	$count=>0;
	if($cursor){
     	$in=$collection->insertOne(['likeduser'=>$_SESSION['email'],'prop_id'=>$idd]);
		$up=$collection2->updateOne(['prop_id'=>$id],['$set'=>['status'=>"liked"]]);
      } 
?>