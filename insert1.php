<?php
require 'vendor/autoload.php';
$mongo=new MongoDB\Client;
$companydb=$mongo->companydb;
$collection=$companydb->rentcollection;
//echo"connected";

if(isset($_POST['butto']))
{  
if($email='' || $pass='' || $phone='' || $gender='')
 {
	 header('Registration.php');
 }
elseif($email!='' && $pass!='' && $phone!='' && $gender!='')
 {
$email=$_POST['email'];
 $pass=$_POST['pass'];
 $phone=$_POST['phone'];
 $gender=$_POST['gender'];
 $insert=array(
 'email'=>$email,
 'password'=>$pass,
 'phone'=>$phone,
 'gender'=>$gender,
 
 );
 $find=$collection->findOne(
 ['email'=>$_POST['email']]
);
 if($find){
echo"Account already exists please login";
}
else{
	$insertdoc=$collection->insertOne($insert);
	echo "data inserted";
}

 
 if($insertdoc)
 {
	 header("Location:index.php");
	 
 }
 else
 {
	 echo"some issue";
	 
 }
}
else{
	
}
}
 else{
	// echo "no data stored";
	 }
	 
?>