<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->customercollection;
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* set the cache expire to 30 minutes */
session_cache_expire(180);
$cache_expire = session_cache_expire();

/* start the session */
session_start();
if(isset($_POST['go']))
{ 
$email=$_POST['email'];
 $pass=$_POST['pass'];
 $_SESSION['type']="customer";
// if($email='' || $pass='' )
 // { 
	 // header('Login.php');
 // }

// elseif($email!='' && $pass!='' )
 // {
	  if(!empty($_POST['remember']))
	 {
		 setcookie("email",$email1,time() + (1* 60 * 60));
		 setcookie("password",$password1,time() + (1 * 60 * 60));
		 $_SESSION["email"]=$email;
	 }
	 else{
		 if(isset($_COOKIE["email"]))
		 {
			 setcookie('email',$email,time() + (1 * 60 * 60));
		 }
	 }
	 $update=$collection->updateOne(
	 ['email'=>$email,
	 'flag'=>0],
	 ['$set'=>['flag'=>1]]
	 );
	 $findflag=$collection->findOne(
	 ['email'=>$email,
	 'flag'=>1]
	 );
$result=$collection->find(
 ['email'=>$email, 'password'=>$pass]
);
 if(isset($result)){
	 $_SESSION['email']=$_POST['email'];
	 if(isset($_SESSION['email']))
{ //  echo $_SESSION['email'];
$_SESSION['islogin']=1;
	
//echo "The cache limiter is now set to $cache_limiter<br />";
//echo "The cached session pages expire after $cache_expire minutes";
}
	 header("Location:cusprofile.php");
	
	/* if(isset($findflag)){
header("Location:cusprofile.php.");
	 }
	 else{
	 header("Location:profile.php");
	 }*/
}
 
else{
	echo 'wrong way';
	//header("Location:Login.php");
}
}
 else{
	 echo 'error matching';
}
 ?>