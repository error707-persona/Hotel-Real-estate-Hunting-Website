<?php
/*require 'vendor/autoload.php';
       $client=new MongoDB\Client;
        $companydb = $client->companydb;
    $collection = $companydb->getCollectionsNames();*/
if(isset($_GET["tag"])){
	
	$tag=preg_replace('#[^a-z0-9_]#i','',$_GET["tag"]);
	//tag is now ready and sanitised fro database queries here
	$fulltag="#".$tag;
	/*foreach($collection as $c){
		if($fulltag==$c){
			
		}
	}*/
}
echo $fulltag;
//if()
?>