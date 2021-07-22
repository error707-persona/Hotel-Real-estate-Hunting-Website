<?php
require "vendor/autoload.php";
 $client = new MongoDB\Client;
 $db = $client->companydb;
      // Select Collection
    $collection = $db->review;
	for($i=0;$i<3;$i++){
	if($_POST['go1'])
	{
	$insert=array(
	'postid'=>$_POST['id'],
	 'username'=> $_POST['username'],
	 'comment'=> $_POST['comment']
	 );
	 }
	}
	 if($collection->insertOne	($insert))
	 {
	 header("Location:blog.php");
	 }
	
	
	 ?>