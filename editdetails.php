<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit profile</title>
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
<form id="registration" action="editme.php" method="POST" >
<h4 class="l"><center>Edit profile</center></h4><br><br>
<!--<input type="text" name="first" id="button" value="" placeholder="Enter email-ID"><br>
<span></span>
<br>
<input type="text" name="last" id="button" value="" placeholder="Enter email-ID"><br>
<span></span>
<br>-->
 <input type="text" name="firstname" id="button" title="Please enter your firstname" placeholder="Re-Enter your firstname">&nbsp;&nbsp;&nbsp;<br><br><input type="text" title="Please enter your firstname" id="button" name="lastname" placeholder="Enter last name"><br><br>

<input type="text" name="lastname"  title="" id="button" value="" placeholder="Re-Enter your lastname"><br>  
<span></span>
<br>
<input type="text" name="office" id="button" value="" placeholder="Re-Enter office number"><br>
<span></span>
<br>
<input type="text" name="mobile" pattern="[1-9]{1}[0-9]{9}" title="please enter valid mobile number" id="button" value="" placeholder="Re-Enter mobile number"><br>  
<span></span>
<br>
<input type="text" name="fax" pattern="[1-9]{1}[0-9]{9}" title="8 or More characters" id="button" value="" placeholder="Re-Enter mobile number" ><br>  
<span></span>
<br>
<input type="text" name="whatsapp" pattern="[1-9]{1}[0-9]{9}" title="Enter a valid phone number" id="b" value="" placeholder="Re-Enter whatsapp no."><br>
<span></span>
<br>
<br><input type="file" class="site-btn list-btn" name="update" onclick="image()"><br>  
<span></span>
<br>
Please only fill the respective data to be updated<br>
<input type="submit" value="Submit" id="butto">
<?php
 require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection = $companydb->curpiccollection;
 function image(){
				if(isset($_POST['create'])) {

					if($_FILES['file']) {
						if(move_uploaded_file($_FILES['file']['tmp_name'],"p/".$_FILES['file']['name'])) {
							$data['fileName'] = $_FILES['file']['name'];
						} else {
							echo "Failed to upload file.";
						}
					}
				}
					if(isset($_POST['update'])) {
					$result=$collection->updateOne(['email'=>$_SESSION['email'],['$set'=>['fileName'=>$data['fileName']]]]);
					}
 }
   ?>
</div>
    <!-- Contact Section End -->
    <!-- Footer Section Begin -->
    <?php include('footer.php');?>
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