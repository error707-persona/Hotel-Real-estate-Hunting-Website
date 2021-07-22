<!DOCTYPE html>
<html lang="en">
<?php 
// require_once "config.php";
session_start();
error_reporting(0);
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/newstyle.css" type="text/css">
</head>

<body>
 
    <!-- Header Section Begin -->
    <?php include('header2.php');?>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg about-us" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Map Section Begin -->
  <div class="simple-form">
  <div>
<form id="registration" method="POST" action="find.php">

<h4 class="l">Customer Login</h4><br><br>
<input type="email" name="email" id="button" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="" placeholder="Enter Email" required><br>
<br>

<input type="password" name="pass" id="button" value="" placeholder="Password" required><br><br>
<a href="updateuser.php">Forgot Password ?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Register.php">New account</a><br><br>
<center><input type="checkbox" name="remember"> Remember me</label></center><br>
<input type="submit" name="go" value="Submit" id="butto"><br><br>
<?php
require 'vendor/autoload.php';

$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->customercollection;
if(isset($_POST['go']))
{ 
 // set the cache limiter to 'private' 
$email=$_POST['email'];
 $pass=$_POST['pass'];
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

// set the cache expire to 30 minutes 
session_cache_expire(180);
$cache_expire = session_cache_expire();

 // start the session 


$_SESSION['email']=$_POST['email'];
// if($email='' || $pass='' )
 // { 
	 // header('Login.php');
 // }
}
//elseif($_POST['email']!='' && $_POST['pass']!='' )
 //{
	 echo $_POST['email'].' '.$_POST['pass'];
$find=$collection->findOne(
 ['email'=>$_POST['email'], 'password'=>$_POST['pass']]
);
 if($find){
	 if(isset($_SESSION['email']))
{header("Location:profile.php");
echo "The cache limiter is now set to $cache_limiter<br />";
echo "The cached session pages expire after $cache_expire minutes";
}
	 
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
	 ['flag'=>0],
	 ['$set'=>['flag'=>1]]
	 );
	 $findflag=$collection->findOne(
	 ['email'=>$email],
	 ['flag'=>1]
	 );
	 if($update){
header("Location:cusprofile.php.");
	 }
	 else{
	 header("Location:profile.php");
	 }
}
else{
	echo '<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>

<!--<h2>Alert Messages</h2>
<p>Click on the "x" symbol to close the alert message.</p>-->
<div class="alert">
  <span class="closebtn">&times;</span>  
  <strong>Alert!</strong> Incorrect email id or password.
</div>
</script>

</body>
</html>';
}

 //}
 ?>


</form>
   </div>
     <div class="simple-form2">
  <div>
<form id="registration" method="POST" action="find2.php">

<h4 class="l">Vendor Login</h4><br><br>
<input type="email" name="email2" id="button" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="" placeholder="Enter Email" required><br>
<br>

<input type="password" name="pass2" id="button" value="" placeholder="Password" required><br><br>
<a href="updateuser.php">Forgot Password ?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Register.php">New account</a><br><br>
<center><input type="checkbox" name="remember"> Remember me</label></center><br>
<input type="submit" value="Submit" name="butto" id="butto">

</form>
<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->vendorcollection;
$vendor=$companydb->vendordetailscollection;
// session_start();
//forbidden acces through url
     // at the top of 'check.php'
	 if($_POST['butto']){
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
   $passs=$_POST['pass2'];
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
	  echo '<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>

<!--<h2>Alert Messages</h2>
<p>Click on the "x" symbol to close the alert message.</p>-->
<div class="alert">
  <span class="closebtn">&times;</span>  
  <strong>Alert!</strong> Incorrect email id or password.
</div>
</script>

</body>
</html>';
 }
	 }
?>
   </div>
   </div>
   </div>
    <!-- Contact Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section p-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center sp-60">
                    <img src="img/only-logo.png" alt="">
                </div>
            </div>
            <div class="row p-37">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <h5>About Homes</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend tristique venenatis.
                            Maecenas a rutrum tellus nam vel semper nibh.</p>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-blog">
                        <h5>Latest Blog Posts</h5>

                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/footer-blog-1.jpg" alt="">
                            </div>
                            <div class="rt-side">
                                <h6>How to find the perfect area for<br> your next house.</h6>
                                <div class="blog-time">
                                    <i class="flaticon-clock"></i>
                                    <span>5 min</span>
                                </div>
                                <a href="#" class="read-more">
                                    <i class="flaticon-right-arrow-1"></i>
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/footer-blog-2.jpg" alt="">
                            </div>
                            <div class="rt-side">
                                <h6>How to find the perfect area for<br> your next house.</h6>
                                <div class="blog-time">
                                    <i class="flaticon-clock"></i>
                                    <span>5 min</span>
                                </div>
                                <a href="#" class="read-more">
                                    <i class="flaticon-right-arrow-1"></i>
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Get In Touch</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span>132 Liberty Streetelit, Plano, Texas</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>hello@home.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span>214-805-4428</span></li>
                        </ul>
                        <p>Monday – Friday: 9 am – 5 pm</p>
                        <p>Saturday: 9 am – 1pm</p>
                    </div>
                </div>
            </div>

            <div class="row p-20">
                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/main.js"></script>
</body>

</html>