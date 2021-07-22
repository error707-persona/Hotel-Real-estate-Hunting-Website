<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
/*if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
         /*
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        // choose the appropriate page to redirect users 
        die( header( 'location:Login.php' ) );

    }*/
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create profile</title>

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
<form id="registration" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
<h4 class="l"><center>Create profile</center></h4><br><br>
<!--<input type="text" name="first" id="button" value="" placeholder="Enter email-ID"><br>
<span></span>
<br>

<input type="text" name="last" id="button" value="" placeholder="Enter email-ID"><br>
<span></span>
<br>-->
 <input type="text" name="firstname" id="button" title="Please enter your firstname" placeholder="Re-Enter your firstname">&nbsp;&nbsp;&nbsp;<br><br><input type="text" title="Please enter your Lastname" id="button" name="lastname" placeholder="Re-Enter last name"><br><br>
<input type="text" name="phone"  title="Enter valid phone number" id="button" value="" placeholder="Re-Enter your phone no."><br>  
<span></span>
<br><input type="file" class="site-btn list-btn" name="update" onclick="image()"><br><br><br>  
<span></span>
<br>
<br>

Please only fill the respective data to be updated<br>

<input type="submit" name="submit" value="Submit" id="butto">

</div>
<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection = $companydb->cuspiccollection;
$collection3 = $companydb->customercollection;
function image(){
				if(isset($_POST['create'])) {

					if($_FILES['file']) {
						if(move_uploaded_file($_FILES['file']['tmp_name'],"p/".$_FILES['file']['name'])) {
							$data['fileName'] = $_FILES['file']['name'];
						} else {
							echo "Failed to upload file.";
						}
					}
				
					if(isset($_POST['update'])) {
					$result=$collection->updateOne(['email'=>$_SESSION['email'],['$set'=>['fileName'=>$data['fileName']]]]);
					}
 }
 }

if(isset($_POST['submit'])){
	header("Location:cusprofile.php");
$email=$_SESSION['email'];
$_SESSION['emai']=$_SESSION['email'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mobile=$_POST['phone'];
 //if(isset($_POST['submit'])){
	 $fin=$collection2->findOne(['email'=>$email]);
	 foreach($fin as $f){
		 if($f['firstname']==$firstname && $f['lastname']==$lastname && $f['mobile']==$mobile){
			 $t="true";
		 }
		 else {
			 $t="false"
		 }
	if($t=="true"){
		header("Location:cusprofile.php");
	}
	else{
if($f['firstname']!=$firstname)
	{
	$up=$collection->updateOne(
	['email'=>$email],['$set'=>['firstname'=>$firstname]]
	);
} 
if($f['lastname']!=$lastname){
	$y=$collection->updateOne(
	['email'=>$email],['$set'=>['lastname'=>$lastname]]
	);
}
if($f['mobile']!=$mobile)){
	$y=$collection->updateOne(
	['email'=>$email],['$set'=>['lastname'=>$mobile]]
	);
}
}

}
 }
?>
			
 
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