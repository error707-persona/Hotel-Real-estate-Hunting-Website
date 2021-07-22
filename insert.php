<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
session_start();
$collection=$companydb->customercollection;
$collection2=$companydb->vendorcollection;
$first=$_POST['firstname'];
$last=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
/*function better_crypt($input, $rounds = 7)
  {
    $salt = "";
    $salt_chars = array_merge(range('A','Z'), range('a','z'), range(0,9));
    for($i=0; $i < 22; $i++) {
      $salt .= $salt_chars[array_rand($salt_chars)];
    }
    return crypt($input, sprintf('$2y$%02d$', $rounds) . $salt);
  } */
 $pass=$_POST['pass'];
 $passs=md5($pass);
 // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  //$pass=better_crypt($passs,7);
 // echo $pass;

 $code=$_POST['code'];
 $phone=$_POST['phone'];
 $phoneno=$code.$phone;
 $type=$_POST['type'];
 $gender=$_POST['gender'];
 $reg_id=rand();
 if($_POST=='butto'){
if($last='' || $first='' || $email='' || $pass='' || $phone='' || $gender='')
 {
	 header('Registration.php');
 }
 }
elseif($last!='' || $first!='' || $email!='' && $pass!='' && $phone!='' && $gender!='')
 {

 $insert=array(
 'reg_id'=>$reg_id,
 'firstname'=>$first,
 'lastname'=>$last,
 'username'=>$username,
 'email'=>$email,
 'password'=>$pass,
 'phone'=>$phoneno,
 'gender'=>$gender,
'type'=>$type,
'flag'=>0
 );
 $find=$collection->findOne(
 ['email'=>$_POST['email']]
);
$find2=$collection->findOne(['email'=>$_POST['email']]);
 if($find || $find2){
header("Location:Register..php");
}
elseif($type=='Customer'){
	$insertdoc=$collection->insertOne($insert);
	// session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['reg_id']=$reg_id;
	header("Location:cusprofile.php");
}
else
{
	$insertdoc=$collection2->insertOne($insert);
	// session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['reg_id']=$reg_id;
	header("Location:profile.php");
}
 }
 ?>