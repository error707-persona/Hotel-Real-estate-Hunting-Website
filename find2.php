<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->vendorcollection;
$vendor=$companydb->vendordetailscollection;
session_start();
//forbidden acces through url
     // at the top of 'check.php'
$find ='';	 
   /* if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
         /*
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        // choose the appropriate page to redirect users 
        die( header( 'location:index.php' ) );

    }*/
$email=$_POST['email2'];
$_SESSION['email'] = $email;
// Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

 /* function better_crypt($input)
  {
    $hash = password_hash($input, PASSWORD_BCRYPT);
    return $hash;
  } 
 $pass=better_crypt($passs);*/
   $passs=md5($_POST['pass2']);
  // echo $pass;
 

if(isset($_POST['butto']))
{
//echo $email .'  '.$passs;
//exit;
if($email='' || $passs='' )
 {
	 echo 'error matching';
 }
} elseif($email!='' && $passs!='' )
 {
	$find=$collection->find(['email'=>$email, 'password'=>$passs]);
 }
$_SESSION['islogin'] = 0;
$_SESSION['type']="vendor";
 if(isset($find)){
	 $_SESSION['islogin'] = 1;
	
 // echo $_SESSION['email'];
  //exit;
 // $_SESSION['email']=$email;	
    foreach($find as $f){
$_SESSION['userid'] =$f["_id"] ;	
}
header("Location:insertdetails.php");
 } else {
	  echo 'error matching';
 }?>