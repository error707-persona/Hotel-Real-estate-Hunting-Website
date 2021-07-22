<!DOCTYPE html>
<html lang="en">
<?php require_once 'config.php';?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page | Template</title>

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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
   <?php include('header2.php');?>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg about-us" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Contact</h2>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Map Section Begin -->
    <div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107002.020096289!2d-96.80666618302782!3d33.06138629992991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c21da13c59513%3A0x62aa036489cd602b!2sPlano%2C+TX%2C+USA!5e0!3m2!1sen!2sbd!4v1558246953339!5m2!1sen!2sbd" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section End -->
    <!-- Contact Section Begin -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h4>Get in Touch</h4>
                        <form action="testmaiil.php" name="post" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" placeholder="email" required>	
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="Subject" placeholder="Subject" >
                                    <textarea placeholder="Message"  name="message" ></textarea>
                                   <button type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h4>Contact Details</h4>
                        <ul class="contact-addr">
                            <li><i class="flaticon-placeholder"></i><span>132 Liberty Streetelit, Dadar(east)</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>hello@home.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span>214-805-4428</span></li>
                        </ul>
                        <p>Monday – Friday: 9 am – 5 pm</p>
                        <p>Saturday: 9 am – 1pm</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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