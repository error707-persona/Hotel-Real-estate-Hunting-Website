<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->customercollection;
$book=$companydb->book;
$result=$collection->find(['email'=>$_GET['e']]);
$
?>