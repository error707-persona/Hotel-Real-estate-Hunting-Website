<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
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
    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>-->
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
    <div class="filter-search">
        <div class="container ">
            <form class="filter-form">
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
                                        <img src="images/upload.png" alt="">
                                    </div>
									
                                    <div class="blog-text"><br><br><br><br><br>
								
									 <?php 
if(isset($_POST['profilepic'])){
	$collect=$companydb->blogprofile;
    if($_FILES['file']) {
		$fileName = time().$_FILES['file']['name'];
                        if(move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$fileName)) {
                            $data['fileName'] = $fileName;
							$data['username']=$_SESSION['username'];
							$data['email']=$_SESSION['email'];
							$result = $collect->insertOne($data);
}
                        } else {
                            echo "Failed to upload file.";
                        }
                    
 //                   $result = $collect->insertOne($data);
}
    ?>
                                      <!--  <div class="blog-title">
                                            <h5>How to find the perfect area for your next house.</h5>
                                            <p class="blog-time"><i class="flaticon-clock"></i><span>5 min read</span>
                                            </p>
                                            <p class="blog-posted"><i class="flaticon-profile"></i><span>by homes</span>
                                        </div>-->
										<!---</form>--->
										  <form action="insertt.php" method="post" enctype="multipart/form-data">
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

<input id="file" name="file" type="file" placeholder="Select a property image" class="form-control input-md">

<button type="Submit" class="site-btn list-btn" name="button">Submit</button>
</div>
</form>

                                       
                                           
											
											
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
$companydb=$client->companydb;
$collection=$companydb->blogcollection;
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

