<?php
require "vendor/autoload.php";
 $client = new MongoDB\Client;
 $db = $client->companydb;
      // Select Collection
	  $date = date('Y-m-d H:i:s');
    $collection = $db->blogcollection;
	if(isset($_POST['button']))
	{
		
		
		if($_FILES['file']) {
		$fileName = time().$_FILES['file']['name'];
                        if(move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$fileName)) {
                            //$data['fileName'] = $fileName;
							//$data['username']=$_SESSION['username'];
							//$data['email']=$_SESSION['email'];
							//$result = $collect->insertOne($data);
							$insert=array(
	'username'=>$_POST['username'],
	 'title'=> $_POST['title'],
	 'content'=> $_POST['content'],
	 'date'=>$date,
	 'filename' => $fileName
	 );
	 $re=$collection->insertOne($insert);
	 header("Location:blog.php"); 
} else {
	echo 'Eorror';
}
                        
                        	
	 
	 
	      
	}
	}
	 ?>