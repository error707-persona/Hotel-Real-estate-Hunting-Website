<!DOCTYPE html>
<html lang="en">
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
<form id="registration" action="edit.php" method="POST" >
<h4 class="l"><center>Upload property</center></h4><br><br>
<!--<input type="text" name="first" id="button" value="" placeholder="Enter email-ID"><br>
<span></span>
<br>

<input type="text" name="last" id="button" value="" placeholder="Enter email-ID"><br>
<span></span>
<br>-->

<input  name="propertyname"  type="text" id="button" value="" placeholder="Enter Property name" required><br>
<span></span>
<br>
<input name="ownerfirstname" type="text" id="button" value="" placeholder="Enter owner's first name" required><br>  
<span></span>
<br>
<input name="ownerlastname" type="text" id="button" value="" placeholder="Enter owner's last name" required><br>  
<span></span>
<br>
<input name="lotsize" type="text" id="button" value="" placeholder="Enter lot size" required><br>  
<span></span>
<br>
<input name="bed" type="text" id="button" value="" placeholder="Enter number of bedrooms" required><br>  
<span></span>
<br>
<input name="bath" type="text" id="button" value="" placeholder="Enter number of bathroom" required><br>  
<span></span>
<br>
<input name="garage" type="text"  id="button" value="" placeholder="Enter number of garage" required><br>  
<span></span>
<br>
<textarea name="description" type="text" id="button" value="" placeholder="Enter description" required></textarea><br>  
<span></span>
<br>
                       <center>             <h4>Property Features</h4>
                                   
                                        <table>
                                            <tr>
                                                <td><input type="checkbox" label="Home theater" name="feature[]">Home theater</td>
                                                <td><input type="checkbox" label="Carpeting" name="feature[]"> Carpeting</td>
                                                <td><input type="checkbox" label="Attic fans" name="feature[]"> Attic fans</td>

                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" label="Media room" name="feature[]"> Media room</td>
                                                <td><input type="checkbox" label="Concrete" name="feature[]"> Concrete</td>
                                                <td><input type="checkbox" label="Ceiling fans" name="feature[]"> Ceiling fans</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" label="Family room" name="feature[]"> Family room</td>
                                                <td><input type="checkbox" label="Bamboo" name="feature[]"> Bamboo</td>
                                                <td><input type="checkbox" label="Thermostats" name="feature[]"> Thermostats</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" label="Gym/workout room" name="feature[]"> Gym/workout room</td>
                                                <td><input type="checkbox" label="Stone" name="feature[]"> Stone</td>
                                                <td><input type="checkbox" label="Single flush toilets" name="feature[]"> Single flush toilets</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" label="Library" name="feature[]"> Library</td>
                                                <td><input type="checkbox" label="Tile" name="feature[]"> Tile</td>
                                                <td><input type="checkbox" label="Window shutters" name="feature[]"> Window shutters</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" label="Butler pantry" name="feature[]"> Butler pantry</td>
                                                <td><input type="checkbox" label="Laminate" name="feature[]"> Laminate</td>
                                                <td><input type="checkbox" label="Solar heat" name="feature[]"> Solar heat</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" label="Sunroom" name="feature[]"> Sunroom</td>
                                                <td><input type="checkbox" label="Cork" name="feature[]"> Cork</td>
                                                <td><input type="checkbox" label="Solar plumbing" name="feature[]"> Solar plumbing</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" label="Downstairs bedroom" name="feature[]"> Downstairs bedroom</td>
                                                <td><input type="checkbox" label="Vinyl / linoleum" name="feature[]"> Vinyl / linoleum</td>
                                                <td><input type="checkbox" label="Solar Screens" name="feature[]"> Solar Screens</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" label="Basement" name="feature[]"> Basement</td>
                                                <td><input type="checkbox" label="Manufactured wood" name="feature[]"> Manufactured wood</td>
                                                <td><input type="checkbox" label="Storm windows" name="feature[]"> Storm windows</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" label="Guest quarters" name="feature[]"> Guest quarters</td>
                                                <td><input type="checkbox" label="Marble" name="feature[]"> Marble</td>
                                                <td><input type="checkbox" label="Tankless water heater" name="feature[]"> Tankless water heater</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" label="Wine storage" name="feature[]"> Wine storage</td>
                                                <td><input type="checkbox" label="Wood" name="feature[]"> Wood</td>
                                                <td><input type="checkbox" label="Skylights or sky tubes" name="feature[]"> Skylights or sky tubes</td>
                                            </tr>
                                        </table>
                                 <br>
                              


<input name="price" type="text" id="button" value="" placeholder="Enter esteemated price" required><br>  
<span></span>
<br>
<textarea name="address" type="text" id="button" value="" placeholder="Enter address of the property" required></textarea><br>  
<span></span>
<br>

<input type="submit" value="Submit" id="butto">

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