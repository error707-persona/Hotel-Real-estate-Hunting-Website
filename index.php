<!DOCTYPE html>
<html lang="en">
<?php require_once 'config.php';?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homes Page </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

        <!-- chatboat code -->
        <script type="text/javascript"
    id="botcopy-embedder-d7lcfheammjct"
    class="botcopy-embedder-d7lcfheammjct" 
    data-botId="5db1875b7487773823c82259">

    var s = document.createElement('script'); 
    s.type = 'text/javascript'; s.async = true; 
    s.src = 'https://d7lcfheammjct.cloudfront.net/js/injection.js'; 
    document.getElementById('botcopy-embedder-d7lcfheammjct').appendChild(s);
    </script>
    <!-- chatboat end-->


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <?php include('header2.php'); ?>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Find your next</h2>
            <h1>dream home.</h1>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Filter Search Section Begin -->
    <?php include("searchbarr.php");?>
    <!-- Filter Search Section End -->

    <!-- php coding start to display the data -->
    <?php
    require 'vendor/autoload.php';

       $client =new MongoDB\Client;
     /*  $client->connect();*/
       //echo "mongo connected";
    $db = $client->companydb;
    $collection = $db->propertycollection;
error_reporting(E_ALL & ~E_NOTICE);
$ran=rand(0,10);
    $cursor = $collection->find(['status'=>"Open"],['limit'=>12,'skip'=>$ran]);
	?>

 
    <!-- Hotel Room Section Begin -->
    <section class="hotel-rooms spad">
        <div class="container">
            <div id="grid" class="row"> 
		<?php	
		$price=45000;
		foreach($cursor as $document){

           $Property_name = $document["propertyname"] ;
		   $propertytype=$document["propertytype"];
            $Location = $document["location"] ;
            $Lot_Size = $document["lotsize"] ;
            $Beds = $document["bed"];
            $baths = $document["bath"];
            $garage = $document["garage"];
            $price = $document["price"];  
			$image = $document["filename"];
    
       ?>
                <div class="col-lg-4 col-md-6"  >
                    <center>
                    <div class="room-items">
                        <?php echo '<div class="room-img set-bg" data-setbg="images/'.$image.'">'; ?> 
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div name="Property_Name" class="room-title">
                                    <h5>
                                        <?php echo $Property_name;  ?>
                                    </h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span><?php echo $Location;?></span></a>
									
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a><a href="#"><i class="flaticon-cursor"></i> <span><?php echo $propertytype;?></span></a>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Lot Size</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span><?php echo $Lot_Size;?></span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span><?php echo $Beds;?></span>
                                    </div>
                                    <div class="baths">
                                        <p>Baths</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span><?php echo $baths;?></span>
                                    </div>
                                    <div class="garage">
                                        <p>Garage</p>
                                        <img src="img/rooms/garage.png" alt="">
                                        <span><?php echo $garage;?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="room-price">
                                <p>For Sale</p>
                                <span><?php echo "₹".$price;?></span>
                            </div>
                            <a href="insertdetails.php?e=<?php echo $document['email'];?>" class="site-btn btn-line" data-id="<?=$id?>">View Property</a>
							</form>
                        </div>
                    </div>
                </div>
				 <?php } ?>
            </div>
        </div>
    </section>
    <!-- Hotel Room Section End -->
    <!-- Popular Room Section Begin -->
    <section class="popular-room set-bg p-in" data-setbg="img/bg-2.jpg">
        <div class="container">
            <div class="row">
			<div class="col-lg-6 offset-lg-6">
                    <div class="slider-active owl-carousel">
			<?php  $r = $collection->find(['price'=>['$lt'=>30000]],['limit'=>1]);
			foreach($r as $document1){

           $propertyname = $document1["propertyname"] ;
            $location = $document1["location"] ;
            $lotsize = $document1["lotsize"] ;
            $beds = $document1["bed"];
			$description=$document["description"];
            $bath = $document1["bath"];
            $garage = $document1["garage"];
            $price = $document1["price"];  
			$image =$document1["filename"];
			
			?>
                
                        <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
                                        <h5><?php echo $propertyname;?></h5>
                                        <a href="https://www.google.com/maps/place/Mira+Road,+Mira+Bhayandar,+Maharashtra/@19.2821626,72.8415168,13z/data=!3m1!4b1!4m5!3m4!1s0x3be7b0458cf7298b:0x468ed839e9df2b21!8m2!3d19.2856374!4d72.8691092"><i class="flaticon-placeholder"></i> <span><?php echo $location;?></span></a>
                                        <a href="https://www.google.com/maps/place/Mira+Road,+Mira+Bhayandar,+Maharashtra/@19.2821626,72.8415168,13z/data=!3m1!4b1!4m5!3m4!1s0x3be7b0458cf7298b:0x468ed839e9df2b21!8m2!3d19.2856374!4d72.8691092"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p><?php echo $description;?></p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span><?php echo $lotsize;?></span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span><?php echo $beds;?></span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span><?php echo $bath;?></span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span><?php echo $garage;?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>For Sale</p>
                                    <span><?php echo $price;?></span>
                                    <span class="deal">Best Deal</span>
                                </div>
                                <a href="insertdetails.php?e=<?php echo $document['email'];?>" class="site-btn btn-line">View Property</a>
                            </div>
                        </div>
			<?php } ?>
			<?php  $r = $collection->find(['price'=>['$lt'=>30000]],['limit'=>1,'skip'=>1]);
			foreach($r as $document1){

           $propertyname = $document1["propertyname"] ;
            $location = $document1["location"] ;
            $lotsize = $document1["lotsize"] ;
            $beds = $document1["bed"];
			$description=$document["description"];
            $bath = $document1["bath"];
            $garage = $document1["garage"];
            $price = $document1["price"];  
			$image =$document1["filename"];
			
			?>
                        <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
                                        <h5><?php echo $propertyname;?></h5>
                                        <a href="https://www.google.com/maps?sxsrf=ACYBGNQsCp7VY6gLxjkZsKcFne4AmFjuyw:1580148665567&q=dahisar&uact=5&um=1&ie=UTF-8&sa=X&ved=2ahUKEwis4IvFsKTnAhUA7HMBHUGyBdQQ_AUoAXoECBQQAw"><i class="flaticon-placeholder"></i> <span><?php echo $location;?></span></a>
                                        <a href="https://www.google.com/maps?sxsrf=ACYBGNQsCp7VY6gLxjkZsKcFne4AmFjuyw:1580148665567&q=dahisar&uact=5&um=1&ie=UTF-8&sa=X&ved=2ahUKEwis4IvFsKTnAhUA7HMBHUGyBdQQ_AUoAXoECBQQAw"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p><?php echo $description;?></p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span><?php echo $lotsize;?></span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span><?php echo $beds;?></span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span><?php echo $bath;?></span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span><?php echo $garage;?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>For Sale</p>
                                    <span><?php echo $price;?></span>
                                    <span class="deal">Best Deal</span>
                                </div>
                                <a href="insertdetails.php?e=<?php echo $document['email'];?>" class="site-btn btn-line">View Property</a>
                            </div>
                        </div>
			<?php }?>
			<?php  $r = $collection->find(['price'=>['$lt'=>30000]],['limit'=>1,'skip'=>2]);
			foreach($r as $document1){

           $propertyname = $document1["propertyname"] ;
            $location = $document1["location"] ;
            $lotsize = $document1["lotsize"] ;
            $beds = $document1["bed"];
			$description=$document["description"];
            $bath = $document1["bath"];
            $garage = $document1["garage"];
            $price = $document1["price"];  
			$image =$document1["filename"];
			
			?>
                       <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
									 <?php echo '<div class="room-img set-bg" data-setbg="images/'.$image.'"></div><br>'; ?> 
                                        <h5><?php echo $propertyname;?></h5>
                                        <a href="https://www.google.com/maps?sxsrf=ACYBGNQsCp7VY6gLxjkZsKcFne4AmFjuyw:1580148665567&q=dahisar&uact=5&um=1&ie=UTF-8&sa=X&ved=2ahUKEwis4IvFsKTnAhUA7HMBHUGyBdQQ_AUoAXoECBQQAw"><i class="flaticon-placeholder"></i> <span><?php echo $location;?></span></a>
                                        <a href="https://www.google.com/maps?sxsrf=ACYBGNQsCp7VY6gLxjkZsKcFne4AmFjuyw:1580148665567&q=dahisar&uact=5&um=1&ie=UTF-8&sa=X&ved=2ahUKEwis4IvFsKTnAhUA7HMBHUGyBdQQ_AUoAXoECBQQAw"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p><?php echo $description;?></p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span><?php echo $lotsize;?></span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span><?php echo $beds;?></span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span><?php echo $bath;?></span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span><?php echo $garage;?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>For Sale</p>
                                    <span><?php echo $price;?></span>
                                    <span class="deal">Best Deal</span>
                                </div>
                            <a href="profile.php?e=<?php echo $document['email'];?>" class="site-btn btn-line" data-id="<?=$id?>">View Property</a>
					</div>
                        </div>
						<?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Room Section End -->
    <!-- Newslatter Section Begin -->
    <section class="newslatter-section">
        <div class="container">
		<form action="mail.php" name="post" method="post">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="newslatter-text">
                        <img src="img/message.png" alt="">
                        <h4>Join our mailing to get weekly updates on <br>our exclusive deals.</h4>
                        <form>
                            <input type="text" name='email' placeholder="Email address">
                            <button type="submit" class="site-btn news-btn">Subscribe!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newslatter Section End -->
    <!-- Servies Section Begin -->
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-side">
                        <h2><span>Why choose homes?</span><br>Because we we are the best in <br>the business.</h2>
                        <p>Launched in 2020, Homes is India's No.1 online Property marketplace to buy, sell,
						and rent residential and commercial properties. Adjudged as the most preferred real estate 
						portal in India by various independent surveys, Homes offers a one-stop destination 
						for all Property needs.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-side">
                        <ul>
                            <li><img src="img/check.png" alt="">Cool and easy UI with attractive colors and textures.
                            </li>
                            <li><img src="img/check.png" alt="">Presenting you with the latest homes.</li>
                            <li><img src="img/check.png" alt="">Available for sale rent and many more..</li>
                            <li><img src="img/check.png" alt="">Full security of profile.
                            </li>
                            <li><img src="img/check.png" alt="">Also securing secure transactions in future.
                            </li>
                            <li><img src="img/check.png" alt="">Presenting with analytical graphs. Helps in easy research.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Servies Section End -->
    <section class="instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Don’t forget to follow us on Instagram @homes</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <!-- Rooms Pic Section Begin-->
        <div class="room-pic">
            <div class="container-fluid">
                <div class="row sp-40">
                    <img src="img/room-pic/1.jpg" alt="">
                    <img src="img/room-pic/2.jpg" alt="">
                    <img src="img/room-pic/3.jpg" alt="">
                    <img src="img/room-pic/4.jpg" alt="">
                    <img src="img/room-pic/5.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Rooms Pic Section End -->
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
                        <p>Launched in 2020, Homes is India's No.1 online Property marketplace to buy, sell,
						and rent residential and commercial properties. Adjudged as the most preferred real estate 
						portal in India by various independent surveys, Homes offers a one-stop destination 
						for all Property needs.</p>
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
<?php $col=$companydb->blog;
$blog=$col->find([],['sort' => ['timestamp' => -1],'limit'=>2]);
foreach($blog as $c){
	$filename=$c['filename'];
	$title=$c['title'];
	$username=$c['username'];
	$content=$c['content'];
	$date=$c['date'];
}
?>
                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/blogimages/<?php echo $filename;?>" alt="">
                            </div>
                            <div class="rt-side">
                                <h6><?php echo $title;?></h6>
                                <div class="blog-time">
                                    <i class="flaticon-clock"></i>
                                    <span><?php echo $date;?></span>
                                </div>
                                <a href="blog.php" class="read-more">
                                    <i class="flaticon-right-arrow-1"></i>
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                        <!--<div class="single-blog">
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
                        </div>-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Get In Touch</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span>132 Liberty Streetelit, Plano, Dadar(east)</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>hellohome@gmail.com</span></li>
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