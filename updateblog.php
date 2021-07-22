<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->vendorcollection;
$postid=$_POST['id'];
$username=$_POST['username'];
$title=$_POST['title'];
$content=$_POST['content'];
$up=$collection->updateOne(['_id'=>$postid,],
['$set'=>['username'=>$username,
'title'=>$title,
'content'=>$content
]]);
?>