<!DOCTYPE html>
<html lang="en">
<?php session_start();
$_SESSION['id']=$_SESSION['email'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | Account</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>-->
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <ul class="main-menu">
                         <li><a href="index.php">Home</a></li>
                        <li><a href="search.php">Search Results</a></li>
                        <li><a href="about.php">Categories</a></li>
                     <!--   <li><a href="single-property.php">Single Property</a></li>-->
                        <li><a href="Register.php">Register</a></li>
                         <li><a href="Login.php">Login</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
						
						
						
						

                        <li class="top-social">
                            <a href="insertdetails.php"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                    </ul>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg single-property-r" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Property Page</h2>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Filter Search Section Begin -->
    <div class="filter-search">
        <div class="container ">
            <form class="filter-form" method="POST">
                <div class="location">
                    <p>Location</p>
                    <select class="filter-location">
                        <option value="Borivali">Borivali</option>
                        <option value="Kandivali">Kandivali</option>
						<option value="Malad">Malad</option>
                        <option value="Mira road">Mira road</option>
						<option value="Dahisar">Dahisar</option>
						<option value="Dahisar">Ville Parle</option>
						<option value="Andheri">Andheri</option>
						<option value="Churchgate">Churchgate</option>
						<option value="Dadar">Dadar</option>
						<option value="Bandra">Bandra</option>
						<option value="Goregaon">Goregaon</option>
						<option value="Khar road">Khar road</option>
						<option value="Mahim">Mahim</option>
						<option value="Matunga">Matunga</option>
						<option value="Jogeshwari">Jogeshwari</option>
						
                    </select>
                </div>
                <div class="search-type">
                    <p>Property Type</p>
                    <select class="filter-property">
                        <option value="Owner">Owner</option>
                        <option value="Builder">Builder</option>
						<option value="Rent">Rent</option>
                        <option value="PG">PG</option>
                    </select>
                </div>
                <div class="price-range">
                    <p>Price</p>
                    <div class="range-slider">
                        <div id="slider-range">
                            <span tabindex="0"
                                class="ui-slider-handle ui-corner-all ui-state-default slider-left">50k</span>
                            <span tabindex="0"
                                class="ui-slider-handle ui-corner-all ui-state-default slider-right">300k</span>
                        </div>
                    </div>
                </div>
                <div class="bedrooms">
                    <p>Bedrooms</p>
                    <div class="room-filter-pagi">
                        <div class="bf-item">
                            <input type="radio" name="room" id="room-1">
                            <label for="room-1">1</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="room" id="room-2">
                            <label for="room-2">2</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="room" id="room-3">
                            <label for="room-3">3</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="room" id="room-4">
                            <label for="room-4">4+</label>
                        </div>
                    </div>
                </div>
                <div class="bathrooms">
                    <p>Bathrooms</p>
                    <div class="room-filter-pagi">
                        <div class="bf-item">
                            <input type="radio" name="bathroom" id="bathroom-1">
                            <label for="bathroom-1">1</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="bathroom" id="bathroom-2">
                            <label for="bathroom-2">2</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="bathroom" id="bathroom-3">
                            <label for="bathroom-3">3</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="bathroom" id="bathroom-4">
                            <label for="bathroom-4">4+</label>
                        </div>
                    </div>
                </div>
                <div class="search-btn">
                    <button type="submit"><i class="flaticon-search"></i>Search</button>
                </div>
            </form>
        </div>
    </div>