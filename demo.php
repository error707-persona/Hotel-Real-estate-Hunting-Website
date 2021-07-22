<?php
    require 'vendor/autoload.php';

       $client =new MongoDB\Client;
     /*  $client->connect();*/
       //echo "mongo connected";



    $db = $client->companydb;
    $collection = $db->createCollection('reviews');
	echo 'collection created';
	
	?>