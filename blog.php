<!DOCTYPE html>
<html lang="en">
<?php 
require_once 'config.php';
error_reporting(0);
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
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
   <?php include("searchbarr.php"); ?>
    <!-- Filter Search Section End -->
    <!-- Blog Section Begin -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-ins">
                        <div class="row">
						<?php 
					require "vendor/autoload.php";
						
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->blogcollection;
						$res = $collection->find([],["limit"=>3,'sort'=>['_id'=>-1]]);
						$i=1;
						$co=15;
						//$co=count($res);
						$resu=$co/3;
						foreach($res as $doc){
							
							$postid=$doc["_id"];
							$post=$doc["title"];
							$username=$doc["username"];
							$content=$doc["content"];
							$date=$doc["date"];
							$image=$doc["filename"];
							$i++;
						?>
						
						<!-- done plz ab kuch mat kar na -->
						
                            <div class="col-lg-12">
                                <div class="blog-item">
                                    <div class="blog-pic">
                                        <img src="<?php echo 'img/'.$image;?>" alt=""> 
                                    </div>
                                    <div class="blog-text">
                                        <div class="blog-title">
                                            <h5><?php echo $post;?></h5><?php /*if(isset($_POST['edit'])){ */$_SESSION['id[$i]']=$postid; //header("Location:editblog.php");}?><!--<form name="blog" action="editblog<?=$i?>.php" method="POST"><input type="text" name="uni" hidden value="<?=$doc['_id']?>">   <button name="edit" role="button" class="float"><h3> <i class="fa fa-plus my-float"></i></button></form>-->
                                            <p class="blog-time"><i class="flaticon-clock"></i><span>Posted on <?php echo $date;?></span>
                                            </p>
                                            <p class="blog-posted"><i class="flaticon-profile"></i><span><?php echo $username;?></span>
                                            </p>
                                        </div>
										
                                        <p><?php 
										/*if(str_word_count($content)<20){
										echo $content . "\n";}
										else{
											
$text = $content;
$text_array = explode(" ", $text);
$chunks = array_chunk($text_array, 17);
$wordcount=50;
foreach ($chunks as $chunk) {
    $line = implode( '', array_slice( preg_split('/([\s,\.;\?\!]+)/', $str, $wordCount*2+1, PREG_SPLIT_DELIM_CAPTURE),0,$wordCount*2-1));
    echo $line;
    echo "<br>";
	
}*/
																	
  ?><!--<a href="readmore1.html" >Read More</a></p>-->
  
  <!--<form name="blog" action="Customerblog1.php" method="POST"><input type="text" name="uni" hidden value="<?=$doc['_id']?>">   <div class="row">-->
 <!DOCTYPE html>
<html>
<head>
<center>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* The grid: Three equal columns that floats next to each other */
.column {
  float: center;
  width: 30%;
  padding: 5px;
  text-align: center;
  font-size: 15px;
  cursor: pointer;
  color: white;
}

.containerTab {
  padding: 20px;
  color: white;
  font-color:white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body>

<div style="text-align:center">
  


<!-- Three columns -->
<div class="row">
  <div class="column" onclick="openTab('b<?=$i?>');" style="background:pink;">
    readmore
  </div>
 <!-- <div class="column" onclick="openTab('c<?=$i?>');" style="background:pink;">
    Edit Blog
  </div>
  <div class="column" onclick="openTab('b3');" style="background:blue;">
    
  </div>-->
</div>
</div>
<!-- Full-width columns: (hidden by default) -->
<div id="b<?=$i?>" class="containerTab" style="display:none;background:pink">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h4> <?php echo $title;?></h4>
  <p><!--<form method="POST" action="<?php //echo htmlentities($_SERVER['PHP_SELF']); ?>"><div>Username: <input type="text" id="button<?=$i?>" pattern="[^' ']+" name="username<?=$i?>">&nbsp;&nbsp; Comment: <input type="text" id="button<?=$i?>" name="comment<?=$i?>"><br><br><input class="" id="button<?=$i?>" type="submit" name="go" value="Submit" class="site-btn blog-btn"></div></form>-->
  <?php
										if(str_word_count($content)<20){
										echo $content . "\n";}
										else{
											
$text = $content;
$text_array = explode(" ", $text);
$chunks = array_chunk($text_array, 17);
foreach ($chunks as $chunk) {
    $line = implode(" ", $chunk);
    echo $line;
    echo "<br>";
}
										}
  ?> 
  </p>
<?php 
/*$collection3=$companydb->reviewcollection;
if(isset($_POST['go']))
{
	$username=$_POST['username[$i]'];
	$comment=$_POST['comment[$i]'];
	//$postid=$_SESSION['id'];
	$ar=array(['postid'=>$postid,'username'=>$username,'comment'=>$comment,]);
	$result=$collection3->insertOne($ar);
}*/
?>
</div>

<!--<div id="c<?=$i?>" class="containerTab" style="display:none;background:pink">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h4>Edit Blog</h4>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>

<!--<div id="b3" class="containerTab" style="display:none;background:blue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h4>Box 3</h4>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>-->

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>

</body>
</html> 

 
<!--<button type="submit" class="site-btn blog-btn">Customer Review</button></form>-->
                                         </div>
                                </div>
 </div>
 
						<?php }?>
						
						

						
 <!--one post end-->

                          <!--  <div class="col-lg-12">
                                <div class="blog-item">
                                    <div class="blog-pic">
                                        <img src="img/blog/2.jpg" alt="">
                                    </div>
                                    <div class="blog-text">
                                        <div class="blog-title">
                                            <h5>How to find the perfect area for your next house.</h5> <a href="editblog.php" class="float"><h3><i class="fa fa-plus my-float"></i></a>
                                            <p class="blog-time"><i class="flaticon-clock"></i><span>5 min read</span>
                                            </p>
                                            <p class="blog-posted"><i class="flaticon-profile"></i><span>by homes  </span> 
                                            </p>
										
                                        </div>
                                        <p>Finding the perfect house is a lot like finding the perfect partner or spouse.
										There’s always risk involved, and perfect often turns out to be, well, not quite so perfect. 
										But if you know what to look for, take your time, and put in the effort and have the right expectations,
										success is a lot more likely.<a href="readmore.html" >Read More</a></p>
										

										<a href="Customerblog.html" class="site-btn blog-btn">Customer Review</a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog-item">
                                    <div class="blog-pic">
                                        <img src="img/blog/3.jpg" alt="">
                                    </div>
                                    <div class="blog-text">
                                        <div class="blog-title">
                                            <h5>How to find the perfect area for your next house.</h5>   <a href="editblog.php" class="float"><h3> <i class="fa fa-plus my-float"></i>
                                         </a>
                                            <p class="blog-time"><i class="flaticon-clock"></i><span>5 min read</span>
                                            </p>
                                            <p class="blog-posted"><i class="flaticon-profile"></i><span>by homes</span>
                                            </p>
                                        </div>
                                        <p>Buying a home is one of the biggest decisions you have to make in life, 
										and it really is worth putting in the effort to make sure you get it right.
										Too many people make mistakes in buying homes, which can affect your well-being,
										be a major hassle - and be very expensive.<a href="readmore2.html" >Read More</a></p>
									
										<a href="Customerblog2.html" class="site-btn blog-btn">Customer Review</a>
                                    </div>
                                </div>
                            </div>-->
                            <div>
							<div>
                             <?php for($i=0;$i<$resu;$i++){?>							
                                    <a href="blog.php"  ><?php echo $i;?></a>
							 <?php }?>
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
                                    <input type="text" placeholder="Search any blogs here" autocomplete="true">
                                    <button type="submit">Search</button>
									<br>
									<center><a href="addblog.php" class="site-btn list-btn" >+POST</a></center><br>
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
                                            <h5>Mahira Desai</h5>
                                            <p>Phone : <span>022-232-117-2663</span></p>
                                            <p>Email : <span>mahirad@gmail.com</span></p>
                                        </div>
                                    </div>
                                    <div class="single-agent">
                                        <div class="agent-pic">
                                            <img src="img/blog/2_agent.png" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <h5>Ranbir Kapoor</h5>
                                            <p>Phone : <span>022-912-187-2983</span></p>
                                            <p>Email : <span>bunny@gmail.com</span></p>
                                        </div>
                                    </div>
                                    <div class="single-agent">
                                        <div class="agent-pic">
                                            <img src="img/blog/3_agent.png" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <h5>Siddhi Soni</h5>
                                            <p>Phone : <span>022-812-677-9863</span></p>
                                            <p>Email : <span>siddhi801@gmail.com</span></p>
                                        </div>
                                    </div>
                                    <div class="single-agent">
                                        <div class="agent-pic">
                                            <img src="img/blog/4_agent.png" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <h5>Satvik sharma</h5>
                                            <p>Phone : <span>022-898-437-2656</span></p>
                                            <p>Email : <span>satvik@gmail.com</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!-- <div class="row">
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
/*$collection2=$companydb->propertycollection;
$randomElement = $collection->find(['status'=>"Open"],['limit'=>1]);
foreach($randomElement as $d)
{
	$propertyname=$d["propertyname"];
	$first=$d["ownerfirstname"];
	$last=$d["ownerlastname"];
	$username=$d["username"];
	$email=$d["email"];
	$lotsize=$d["lotsize"];
	$location=$d["location"];
	$bed=$d["bed"];
    $bath=$d["bath"];
	$garage=$d["garage"];
	$likecount=$d["likecount"];*/
?>
                                            <h5><?php echo $propertyname;?></h5>
                                            <a href="#"><i class="flaticon-placeholder"></i> <span><?php echo $location;?></span></a>
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
                                                <span><?php echo $lotsize;?></span>
                                            </div>
                                            <div class="beds">
                                                <p>Beds</p>
                                                <img src="img/rooms/bed.png" alt="">
                                                <span><?php echo $bed;?></span>
                                            </div>
                                            <div class="baths">
                                                <p>Baths</p>
                                                <img src="img/rooms/bath.png" alt="">
                                                <span><?php echo $bath;?></span>
                                            </div>
                                            <div class="garage">
                                                <p>Garage</p>
                                                <img src="img/rooms/garage.png" alt="">
                                                <span><?php echo $garage; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-price">
                                        <p>For Sale</p>
                                        <span>$<?php echo $price;?></span>
                                    </div>
                                    <a href="#" class="site-btn btn-line">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
<?php //}?>
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
                                <a href="readmore1.html" class="read-more">
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
                                <a href="readmore.html" class="read-more">
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
                            <li><i class="flaticon-placeholder"></i><span>132 Liberty Streetelit, Dadar(east)</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>myrealstate@gmail.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span>022-214-805-4428</span></li>
                        </ul>
                        <p>Monday – Friday: 9 am – 5 pm</p>
                        <p>Saturday: 9 am – 1pm</p>
                    </div>
                </div>
            </div>

            <div class="row p-20">
                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        <!-- Link back to Colorlib can"t be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can"t be removed. Template is licensed under CC BY 3.0. -->

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