<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->vendorcollection;
$vendor=$companydb->vendordetailscollection;

$email=$_POST['email2'];
 $pass=$_POST['pass2'];

if(isset($_POST['butto']))
{  
if($email='' || $pass='' )
 {
	 header('Login.php');
 }
}
elseif($email!='' && $pass!='' )
 {
 $find=$collection->findOne(
 ['email'=>$_POST['email2'], 'password'=>$_POST['pass2']]);
 }
 if($find){
	session_start();
$_SESSION['email']=$_POST['email'];
$_SESSION['username']=$_POST['username'];
$cursor=$vendor->find(['email'=>$email]);
 foreach($cursor as $document)
 {
?>


<!DOCTYPE html>
<html lang="en">
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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
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
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="./search.html">Search Results</a></li>
                        <li><a href="./about.html">Categories</a></li>
                        <li><a href="./single-property.html">Your Property</a></li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>

                        <li class="top-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
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
                        <option value="">London</option>
                        <option value="">US</option>
                        <option value="">UAE</option>
                    </select>
                </div>
                <div class="search-type">
                    <p>Property Type</p>
                    <select class="filter-property">
                        <option value="">House</option>
                        <option value="">Resort</option>
                        <option value="">Hotel</option>
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
    <!-- Filter Search Section End -->
    <!-- Single Property Section Begin -->
	
    <div class="single-property">
        <div class="container">
            <div class="row spad-p">
                <div class="col-lg-12">
                    <div class="property-title">

	<h3></h3>
                        <a href="#"><i class="fa flaticon-placeholder"></i> <?php $addressd=$document["address"]; echo $addressd;?></a>
                    </div>
                    <div class="property-price">
                        <p>For</p>
                        <span>$<?php $priced=$document["price"]; echo $priced;?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-img owl-carousel">
                        <div class="single-img">
                            <img src="img/single-property/1.jpg" alt="">
                        </div>
                        <div class="single-img">
                            <img src="img/single-property/2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Property End -->
    <!-- Single Property Deatails Section Begin -->
    <section class="property-details">
	<form action="insertdetails.php" method="POST">
        <div class="container">
            <div class="row sp-40 spt-40">
                <div class="col-lg-8">
                    <div class="p-ins">
                        <div class="row details-top">
                            <div class="col-lg-12">
                                <div class="t-details">
                                    <div class="register-id">
                                        <p>Registered ID: <span><?php $idd=$document["_id"]; echo $idd;?></span></p>
                                    </div>
                                    <div class="popular-room-features single-property">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span><?php $lotsized=$document["lotsize"]; echo $lotsized;?></span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span><?php $bedd=$document["bed"]; echo $bedd; ?></span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span><?php $bathsd=$document["bath"]; echo $bathsd;?></span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span><?php $garaged=$document["garage"]; echo $garaged;?></span>
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="property-description">
                                    <h4>Description with address details:</h4>
                                    <p><?php $descriptiond=$document["description"]; echo $descriptiond; ?></textarea> </p>
                                <br>
								
                                    <h4>Property Name:</h4>
                                    <p><span><?php $propertynamed=$document["propertyname"]; echo $propertynamed;?></textarea></span> </p>
                              </div>
                                <div class="property-features">
                                    <h4>Property Features</h4>
                                    <div class="property-table">
                                        <table>
                                            <tr>
											<?php $propertyfeatured=$document["propertyfeature"]; echo $propertyfeatured;
											?>
                                               
											</tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="location-map">
                                    <h4>Location</h4>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107002.020096289!2d-96.80666618302782!3d33.06138629992991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c21da13c59513%3A0x62aa036489cd602b!2sPlano%2C+TX%2C+USA!5e0!3m2!1sen!2sbd!4v1558246953339!5m2!1sen!2sbd" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row pb-30">
                        <div class="col-lg-12">
                            <div class="contact-service">
                                <img src="img/single-property/download.png" alt="">
                                <p>Listed by</p>
								
                                <h5><?php $firstn=$document['ownerfirstname']; $lastn=$document['ownerlastname']; {echo $firstn.' '.$lastn;}?></h5>
                                <table>
                                    <tr>
                                        <td><center>Office : <?php  $office=$document['office'];if($office!=''){ echo $office;}?></span></td>
                                    </tr>
                                    <tr>
                                        <td><center>Mobile : <?php  $mobile=$document['mobile']; if($mobile!='') {echo $mobile;}?></span></td>
                                    </tr>
                                    <tr>
                                        <td><center>Fax : <?php $fax=$document['fax']; if($fax!=''){echo $fax;}?></span></td>
                                    </tr>
                                    <tr>
                                        <td><center>WhatsApp : <?php $whatsapp=$document['whatsapp']; if($whatsapp!='') {echo $whatsapp;}?></span></td>
                                    </tr>
                                    <tr>
                                        <td><center>Email : <?php $email=$document['email']; echo $email;?></span></td>
										
                                    </tr>
                                </table>
								 <a href="sessionend.php" class="site-btn list-btn">Logout</a>
								 <a href="editdetails.php" class="site-btn list-btn">Edit profile</a>
								 <a href="uploadpropertyform.php" class="site-btn list-btn">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="room-items">
                                <div class="room-img set-bg" data-setbg="img/rooms/4.jpg">
                                    <a href="#" class="room-content">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                                <div class="room-text">
                                    <div class="room-details">
                                        <div class="room-title">
                                            <h5><?php $propertyname=$document['propertyname']; echo $propertyname;?></h5>
                                            <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                            <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show
                                                    on Map</span></a>
                                        </div>
                                    </div>
                                    <div class="room-features">
                                        <div class="room-info">
                                            <div class="size">
                                                <p>Lot Size</p>
                                                <img src="img/rooms/size.png" alt="">
                                                <i class="flaticon-bath"></i>
                                                <span><?php $lotsize=$document['lotsize']; echo $lotsize;?></span>
                                            </div>
                                            <div class="beds">
                                                <p>Beds</p>
                                                <img src="img/rooms/bed.png" alt="">
                                                <span><?php $bed=$document['bed']; echo $bed;?></span>
                                            </div>
                                            <div class="baths">
                                                <p>Baths</p>
                                                <img src="img/rooms/bath.png" alt="">
                                                <span><?php $baths=$document['bath']; echo $baths;?></span>
                                            </div>
                                            <div class="garage">
                                                <p>Garage</p>
                                                <img src="img/rooms/garage.png" alt="">
                                                <span><?php $garage=$document['garage']; echo $garage;?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-price">
                                        <p>For Sale</p>
                                        <span>$<?php $price=$document['price']; echo $price;?></span>
                                    </div>
                                    <a href="#" class="site-btn btn-line">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
		</form>

    </section>



</div>

    <!-- Single Property Deatails Section End -->
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
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

 <?php }?>
 <?php }?>