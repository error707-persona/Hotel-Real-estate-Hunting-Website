<!DOCTYPE html>
<html lang="en">
<?php require_once 'config.php';?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

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
   <?php
 
$dataPoints1 = array(
	array("label"=> "2006", "y"=> 60.1),
	array("label"=> "2007", "y"=> 59.1),
	array("label"=> "2008", "y"=> 57.9),
	array("label"=> "2009", "y"=> 57.0),
	array("label"=> "2010", "y"=> 56.4),
	array("label"=> "2011", "y"=> 54.8),
	array("label"=> "2012", "y"=> 53.4),
	array("label"=> "2013", "y"=> 50.6),
	array("label"=> "2014", "y"=> 47.4),
	array("label"=> "2015", "y"=> 44.7),
	array("label"=> "2016", "y"=> 43.9)
);
 
$dataPoints2 = array(
	array("label"=> "2006", "y"=> 4.1),
	array("label"=> "2007", "y"=> 4.2),
	array("label"=> "2008", "y"=> 4.1),
	array("label"=> "2009", "y"=> 4.3),
	array("label"=> "2010", "y"=> 4.3),
	array("label"=> "2011", "y"=> 4.5),
	array("label"=> "2012", "y"=> 4.5),
	array("label"=> "2013", "y"=> 4.8),
	array("label"=> "2014", "y"=> 5.4),
	array("label"=> "2015", "y"=> 5.3),
	array("label"=> "2016", "y"=> 5.2)
);
 
$dataPoints3 = array(
	array("label"=> "2006", "y"=> 20.8),
	array("label"=> "2007", "y"=> 21.7),
	array("label"=> "2008", "y"=> 23.0),
	array("label"=> "2009", "y"=> 23.8),
	array("label"=> "2010", "y"=> 24.4),
	array("label"=> "2011", "y"=> 24.9),
	array("label"=> "2012", "y"=> 25.6),
	array("label"=> "2013", "y"=> 26.1),
	array("label"=> "2014", "y"=> 26.9),
	array("label"=> "2015", "y"=> 27.0),
	array("label"=> "2016", "y"=> 25.8)
);
 
$dataPoints4 = array(
	array("label"=> "2006", "y"=> 15.0),
	array("label"=> "2007", "y"=> 15.0),
	array("label"=> "2008", "y"=> 15.1),
	array("label"=> "2009", "y"=> 14.9),
	array("label"=> "2010", "y"=> 14.9),
	array("label"=> "2011", "y"=> 15.8),
	array("label"=> "2012", "y"=> 16.5),
	array("label"=> "2013", "y"=> 18.6),
	array("label"=> "2014", "y"=> 20.4),
	array("label"=> "2015", "y"=> 23.0),
	array("label"=> "2016", "y"=> 25.0)
);
 
?>


<form id="registration" action="insert.php" method="POST" >
<h4 class="l"><center>Register</center></h4><br><br>
<!--<input type="text" name="first" id="button" value="" placeholder="Enter email-ID"><br>
<span></span>
<br>

<input type="text" name="last" id="button" value="" placeholder="Enter email-ID"><br>
<span></span>
<br>-->
 <input type="text" name="firstname" id="button" title="Please enter your firstname" required placeholder="Enter first name">&nbsp;&nbsp;&nbsp;<br><br><input type="text" title="Please enter your firstname" id="button" name="lastname" required placeholder="Enter last name"><br><br>
<input type="text" name="username" id="button" title="Please choose a username" required placeholder="Enter a username" >&nbsp;&nbsp;&nbsp;<br><br>
<input type="email" title="please enter valid email id" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="button" value="" placeholder="Enter email-ID" required><br>
<span></span>
<br>
<input type="password" name="pass" pattern=".{8,}" title="8 or More characters" id="button" value="" placeholder="Password" required><br>  
<span></span>
<br>
<input type="password" name="pass" pattern=".{8,}" title="8 or More characters" id="button" value="" placeholder="Confirm-Password" required><br>  
<span></span>
<br>
<select id="ph" name="code"><option>+81</option><option>+08</option><option>+02</option><option>+974</option><option>+92</option></select>
<input type="text" name="phone" pattern="[1-9]{1}[0-9]{9}" title="Enter a valid phone number" id="b" value="" placeholder="Phone no." required><br>
<span></span>
<br>
<select id="t" name="type"><option>Customer</option><option>Vendor</option></select>
<br<br>
<span></span>
<br>
<br>
<input type="radio" name="gender" id="rd" required value="Male">&nbsp;&nbsp;<span id="but"><label for="Male">Male</label></span>&nbsp;&nbsp;&nbsp;   <input type="radio" name="gender" id="rd" value="Female"><label for="Female">&nbsp;&nbsp;&nbsp;<span id="but">Female</label></span>&nbsp;&nbsp;<input type="radio" name="gender" id="rd" value="other">&nbsp;&nbsp;&nbsp;<span id="but">Other</span><br>
<span></span>
<br>
<a href="Login.php">Account already exists? click here</a><br>
<input type="submit" value="Submit" id="butto">

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
	<!--<script type="text/javascript">   
$(document).ready(function () {   
$('input#butto').on('click', function () {   
var myForm = $("form#registration");   
if (myForm) {   
$(this).prop('disabled', true);   
$(myForm).submit();   
}   
});   
});   -->
</script>
</body>

</html>