<!DOCTYPE html>
<html lang="en">
<?php
require_once 'config.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Page | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
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
    <section class="hero-section set-bg blog" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Blog</h2>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Filter Search Section Begin -->
    <?php include("searchbarr.php");?>
    <!-- Filter Search Section End -->
	
    <!-- Blog Section Begin -->
    
	<section class="blog-section">
	
	<div class="container">	
		<div class="row">
                <div class="col-lg-8">
                    <div class="blog-ins">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-item">
                                    <div class="blog-pic">
                                        <img src="img/blog/1.jpg" alt="">
                                    </div>
									
                                    <div class="blog-text">
                                        <div class="blog-title">
                                            <h5>How to find the perfect area for your next house.</h5>
                                            <p class="blog-time"><i class="flaticon-clock"></i><span>5 min read</span>
                                            </p>
                                            <p class="blog-posted"><i class="flaticon-profile"></i><span>by homes</span>
                                        </div>
										<!---</form>--->
										  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
										<div>		
<label for="text"><b>Username</b></label>&nbsp;&nbsp;
<input type="text" placeholder="Enter Username" name="username" required><br>
</div>
<br>
						<div>		
<label for="text"><b>Post Title</b></label>&nbsp;&nbsp;
<input type="text" placeholder="Enter Postname" name="title" required><br>
</div>
<br>
<div>
<label for="text"><b>Content</b></label><br>
<textarea rows="20" cols="75" name="content" placeholder="Please describe your post here" required>
</textarea><br>
<button type="Submit" class="site-btn list-btn" name="button">Submit</button>
</div>
</form>
<?php
      // Select Collection
	  if(isset($_POST['button'])){
	  $date = date('Y-m-d H:i:s');
    $collection = $db->blogcollection;
	$insert=array(
	'username'=>$_POST['username'],
	 'title'=> $_POST['title'],
	 'content'=> $_POST['content'],
	 'date'=>$date
	 );
	 
	 $re=$collection->insertOne($insert);
	 header("Location:blog.php"); 
	  }
	 ?>

                                       
                                           
											
											
										  </div>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-right">
                                <div class="category-search">
                                    <input type="text" placeholder="Whar are you seraching?">
                                    <button type="submit">Search</button>
                                    <h5>Categories</h5>
                                    <div class="categories-table">
                                        <table>
                                            <tr>
                                                <td>Luxury Real Estates</td>
                                            </tr>
                                            <tr>
                                                <td>Home Improvement</td>
                                            </tr>
                                            <tr>
                                                <td>Unique Homes</td>
                                            </tr>
                                            <tr>
                                                <td>Market Trends</td>
                                            </tr>
                                            <tr>
                                                <td>Tips & Advice</td>
                                            </tr>
                                            <tr>
                                                <td>Home Design</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="instagram-info">
                                    <h5>Instagram</h5>
                                    <div class="row">
                                        <div class="instagram-pic">
                                            <div class="col-lg-12">
                                                <img class="pic-1" src="img/blog/1_insta.jpg" alt="">
                                                <img class="pic-2" src="img/blog/2_insta.jpg" alt="">
                                                <img class="pic-3" src="img/blog/3_insta.jpg" alt="">
                                                <img class="pic-4" src="img/blog/4_insta.jpg" alt="">
                                                <img class="pic-5" src="img/blog/5_insta.jpg" alt="">
                                                <img class="pic-6" src="img/blog/6_insta.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-agents">
                                    <h5>Our Agents</h5>
                                    <div class="single-agent">
                                        <div class="agent-pic">
                                            <img src="img/blog/1_agent.png" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <h5>Oliver G Harris</h5>
                                            <p>Phone : <span>1-812-117-2663</span></p>
                                            <p>Email : <span>oliver@homes.com</span></p>
                                        </div>
                                    </div>
                                    <div class="single-agent">
                                        <div class="agent-pic">
                                            <img src="img/blog/2_agent.png" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <h5>Deon Gracious</h5>
                                            <p>Phone : <span>022-2658956856</span></p>
                                            <p>Email : <span>deonli@homes.com</span></p>
                                        </div>
                                    </div>
                                    <div class="single-agent">
                                        <div class="agent-pic">
                                            <img src="img/blog/3_agent.png" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <h5>Hina Khan</h5>
                                            <p>Phone : <span>022-2569875485</span></p>
                                            <p>Email : <span>hinakhan@homes.com</span></p>
                                        </div>
                                    </div>
                                    <div class="single-agent">
                                        <div class="agent-pic">
                                            <img src="img/blog/4_agent.png" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <h5>Janhvi Thakur</h5>
                                            <p>Phone : <span>+91-9847563746</span></p>
                                            <p>Email : <span>jahnvithakur@homes.com</span></p>
                                        </div>
                                    </div>
                                </div>
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
										<?php
										require 'vendor/autoload.php';
$client=new MongoDB\Client;

$collection2=$companydb->propertycollection;
$randomElement = $collection->find([],['limit'=>1,'skip'=>2,'sort'=>['status'=>"open"]]);

?>
										
                                            <h5>Country Style House with beautiful garden and terrace</h5>
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
                                                <span>2561 sqft</span>
                                            </div>
                                            <div class="beds">
                                                <p>Beds</p>
                                                <img src="img/rooms/bed.png" alt="">
                                                <span>9</span>
                                            </div>
                                            <div class="baths">
                                                <p>Baths</p>
                                                <img src="img/rooms/bath.png" alt="">
                                                <span>2</span>
                                            </div>
                                            <div class="garage">
                                                <p>Garage</p>
                                                <img src="img/rooms/garage.png" alt="">
                                                <span>1</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-price">
                                        <p>For Sale</p>
                                        <span>$345,000</span>
                                    </div>
                                    <a href="#" class="site-btn btn-line">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
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

