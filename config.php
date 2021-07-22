<?php
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

require_once "vendor/autoload.php";
$client     = new MongoDB\Client;
$companydb  = $client->selectDatabase('companydb');


//$_SESSION['email'] = 'Jaydekar4592@gmail.com';
//$_SESSION['islogin'] = 1;
