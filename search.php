<!DOCTYPE html>
<html lang="en">

           <?php
require 'vendor/autoload.php';
       $client=new MongoDB\Client;
        $db = $client->companydb;
    $collection = $db->propertycollection;
	session_start();
	//error_reporting(E_ALL & ~E_NOTICE);
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Page | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/popup.css" type="text/css">
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
    <?php include('header2.php');?>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg search-result" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Search Results</h2>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Filter Search Section Begin -->

    <?php include("searchbarr.php"); ?>
 <section class="hotel-rooms spad-2">
 <div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482634.69488104683!2d72.60098061876228!3d19.082039058363428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581854666859!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
	<br><br>
<?php
        // $propertycollection=$companydb->propertycollection;
		/*$ddr=$collection->find();
		$count=0;
		$borivali="borivali";
		 foreach($ddr as $document)
		 {
			 $location=$document[. "north"];
			$count++;
		 }
		 echo $count;
		 */
       $cursor1=$collection->find();
	   foreach($cursor1 as $c){
		   $locat=explode(" ",$c['location']);
		     // echo $locat[1];
	   if($locat[1]=="north"){
		   $sum_north+=$c['price'];
            $count_north++;
			$avg_north=$sum_north/$count_north;
       $avg_north_old=$avg_north*90/100;
	   // echo $avg_north;
	   
	   
	   }elseif($locat[2]=="north"){
		    $sum_north+=$c['price'];
            $count_north++;
			$avg_north=$sum_north/$count_north;
       $avg_north_old=$avg_north*90/100;
	   // echo $avg_north;
	   }
		   if($locat[1]=="east"){
		   $sum_east+=$c['price'];
            $count_east++;
			$avg_east=$sum_east/$count_east;
       $avg_east_old=$avg_east*90/100;
	   // echo $avg_north;
	   
	   
	   }elseif($locat[2]=="east"){
		    $sum_east+=$c['price'];
            $count_east++;
			$avg_east=$sum_east/$count_east;
       $avg_east_old=$avg_east*90/100;
	   
	   }
	   
	   if($locat[1]=="west"){
		   $sum_west+=$c['price'];
            $count_west++;
			$avg_west=$sum_west/$count_west;
       $avg_west_old=$avg_west*90/100;
	   // echo $avg_north;
	   
	   
	   }elseif($locat[2]=="west"){
		    $sum_west+=$c['price'];
            $count_west++;
			$avg_west=$sum_west/$count_west;
       $avg_west_old=$avg_west*90/100;
	   
	   }
	   
	   if($locat[1]=="south"){
		   $sum_south+=$c['price'];
            $count_south++;
			$avg_south=$sum_south/$count_south;
       $avg_south_old=$avg_south*90/100;
	   // echo $avg_north;
	   
	   
	   }elseif($locat[2]=="south"){
		    $sum_south+=$c['price'];
            $count_south++;
			$avg_west=$sum_south/$count_south;
       $avg_west_old=$avg_south*90/100;
	   }
	   }
	   /*
	   foreach($cursor1 as $c){
		   $locat=explode(" ",$c['location']);
		     // echo $locat[1];
	   /if($locat[1]=="east"){
		   $sum_east+=$c['price'];
            $count_east++;
			$avg_east=$sum_east/$count_east;
       $avg_east_old=$avg_east*90/100;
	   // echo $avg_north;
	   
	   
	   }elseif($locat[2]=="east"){
		    $sum_east+=$c['price'];
            $count_east++;
			$avg_east=$sum_east/$count_east;
       $avg_east_old=$avg_east*90/100;
	   // echo $avg_north;
		   
	   }
	   }
	   
	   foreach($cursor1 as $c){
		   $locat=explode(" ",$c['location']);
		     // echo $locat[1];
	   if($locat[1]=="west"){
		   $sum_west+=$c['price'];
            $count_west++;
			$avg_west=$sum_west/$count_west;
       $avg_west_old=$avg_west*90/100;
	   // echo $avg_north;
	   
	   
	   }elseif($locat[2]=="west"){
		    $sum_west+=$c['price'];
            $count_west++;
			$avg_west=$sum_west/$count_west;
       $avg_west_old=$avg_west*90/100;
	   // echo $avg_north;
		   
	   }
	   }
	   foreach($cursor1 as $c){
		   $locat=explode(" ",$c['location']);
		     // echo $locat[1];
	   if($locat[1]=="south"){
		   $sum_south+=$c['price'];
            $count_south++;
			$avg_south=$sum_south/$count_south;
       $avg_south_old=$avg_south*90/100;
	   // echo $avg_north;
	   
	   
	   }elseif($locat[2]=="south"){
		    $sum_south+=$c['price'];
            $count_south++;
			$avg_west=$sum_south/$count_south;
       $avg_west_old=$avg_south*90/100;
	   // echo $avg_north;
		   
	   }
	   }
*/
?>


<!-- graph code
-->
<?php

$dataPoints1 = array(
	array("label"=> "Mumbai north", "y"=>  $avg_north_old),
	array("label"=> "Mumbai west", "y"=>  $avg_west_old),
	array("label"=> "Mumbai east", "y"=> $avg_east_old),
	array("label"=> "Mumbai south", "y"=>  $avg_south_old),
	/*array("label"=> "2014", "y"=> 39.50),
	array("label"=> "2015", "y"=> 50.82),
	array("label"=> "2016", "y"=> 74.70)*/
);
$dataPoints2 = array(
	array("label"=> "Mumbai north", "y"=>  $avg_north),
	array("label"=> "Mumbai west", "y"=>  $avg_west),
	array("label"=> "Mumbai east", "y"=>   $avg_east),
	array("label"=> "Mumbai south", "y"=>  $avg_south),
	/*array("label"=> "2014", "y"=> 63.60),
	array("label"=> "2015", "y"=> 69.38),
	array("label"=> "2016", "y"=> 98.70)*/
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Average prices of houses in mumbai as per zones"
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Old price",
		indexLabel: "{y}",
		yValueFormatString: "₹#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "New price as per commercial utilities",
		indexLabel: "{y}",
		yValueFormatString: "₹#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>
<body><center>
<div id="chartContainer" align="center" style="height: 370px; width: 65%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
<br><br><br>
            <div class="row">
<?php 
$cursor=$collection->find(['status'=>"Open"],['limit'=>12,'skip'=>2]);
foreach($cursor as $document){
    $price=$document['price'];
    $Lot_Size=$document['lotsize'];
    $beds=$document['bed'];
    $garage=$document['garage'];
    $Property_Name=$document['propertyname'];
$baths=$document['bath'];
$image=$document['filename'];
$location=$document['location'];

?>
                <div class="col-lg-4 col-md-4 col-md-6">
                    <div class="room-items">
                        <?php echo '<div class="room-img set-bg" data-setbg="images/'.$image.'">'; ?> 
						<a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5><?php  echo $Property_Name;?></h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span><?php echo $location;?></span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Lot Size</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span><?php  echo $Lot_Size;?> sqft</span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span><?php  echo $beds;?></span>
                                    </div>
                                    <div class="baths">
                                        <p>Baths</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span><?php  echo $baths;?></span>
                                    </div>
                                    <div class="garage">
                                        <p>Garage</p>
                                        <img src="img/rooms/garage.png" alt="">
                                        <span><?php  echo $garage;?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="room-price">
                                <p>For Sale</p>
                                <span><?php  echo "₹".$price;?></span>
                            </div><?php $id=$document['email'];?><form action="viewprop.php" method="GET"><input type="hidden"name="propid" value="<?php echo $id;?>">
                            <a href="insertdetails.php?e=<?php echo $document['email'];?>" class="site-btn btn-line" data-id="<?=$id?>">View Property</a>
							</form>
                        </div>
                    </div>
                </div>
               <?php }?>
            </div>
        </div>
    </section>
    <!-- Hotel Room Section End -->
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
                        <p>A very admirable yet easy to use website with minimal complexity and can be used by new residents
						of the society. a website that can be easily used by new residents who are in search of their house.</p>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/main.js"></script>
</body>

</html>