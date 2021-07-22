<!DOCTYPE html>
<html lang="en">
<?php
require 'vendor/autoload.php';
       $client=new MongoDB\Client;
        $db = $client->Home_data;
    $collection = $db->Borivali_East;
    $collection2 = $db->price_data; ?>
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
                        <li><a href="./single-property.html">Single Property</a></li>
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
    <section class="hero-section set-bg search-result" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Search Results</h2>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Filter Search Section Begin -->
    <div class="filter-search search-opt">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
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
        </div>
    </div>
    <!-- Filter Search Section End -->
    <!-- Map Section Begin -->
 
    <!-- Map Section End -->
    <!-- Hotel Room Section Begin -->
    <section class="hotel-rooms spad-2">
        <br><br><br><br><br><br>
  <?php
 $ans=$collection->find(['Location'=>"Borivali_East"]);
 $tprice=0.0;
 foreach($ans as $a){
    $price=$a['price'];
    $tprice=$tprice+$price;
 }
    
  $avgprice=$tprice/4;
  $perc=$avgprice/$tprice*100;


 $ans2=$collection->find(['Location'=>"mira road"]);
  $price2=0.0;
 foreach($ans2 as $a2){
    $price2=$price2+$a2['price'];
}
  $avgprice2=$price/4;
 $perc2=$avgprice2/$price2*100;


  $ans3=$collection->find(['Location'=>"Dahiser_West"]);
  $price3=0.0;
 foreach($ans3 as $a3){
    $price3=$price3+$a3['price'];
 }
  $avgprice3=$price3/4;
  $perc3=$avgprice3/$price3*100;


  $ans4=$collection->find(['Location'=>"Borivali_West"]);
  $price=0.0;
 foreach($ans4 as $a4){
    $price4=$price4+$a4['price'];
 }
  $avgprice4=$price4/4; 
 $perc4=$avgprice4/$price4*100;


$ans5=$collection->find(['Location'=>"Bhayander"]);
  $price5=0.0;
 foreach($ans5 as $a5){
    $price5=$price5+$a5['price'];
 }
  $avgprice5=$price5/4; 
 $perc5=$avgprice5/$price5*100;


  $ans6=$collection->find(['Location'=>"Kandivali_East"]);
  $price6=0.0;
 foreach($ans6 as $a6){
    $price6=$price6+$a6['price'];
 }
  $avgprice6=$price6/4; 
   $perc6=$avgprice6/$price6*100;


   $ans7=$collection->find(['Location'=>"Kandivali_West"]);
  $price7=0.0;
 foreach($ans7 as $a7){
    $price7=$price7+$a7['price'];
 }
  $avgprice7=$price7/4; 
   $perc7=$avgprice7/$price7*100;


    $ans8=$collection->find(['Location'=>"Malad_East"]);
  $price8=0.0;
 foreach($ans8 as $a8){
    $price8=$price8+$a8['price'];
 }
  $avgprice8=$price8/4; 
   $perc8=$avgprice8/$price8*100; 


    $ans9=$collection->find(['Location'=>"Malad_West"]);
  $price9=0.0;
 foreach($ans9 as $a9){
    $price9=$price9+$a9['price'];
 }
  $avgprice9=$price9/4; 
   $perc9=$avgprice9/$price9*100;


 $dataPoints1 = array(
    array("label"=> "Borivali East", "y"=>/* $perc*/$avgprice),
    array("label"=> "mira road", "y"=>/*$perc2*/$avgprice2 ),
    array("label"=> "Dahiser_West", "y"=>/*$perc3*/$avgprice3),
    array("label"=> "Borivali_West", "y"=>/*$perc4 */$avgprice4),
    array("label"=> "Bhayander", "y"=>/*$perc5*/$avgprice5),
    array("label"=> "Kandivali_East", "y"=>/*$perc6*/$avgprice6 ),
    array("label"=> "Kandivali_West", "y"=>/*$perc7*/$avgprice7),
    array("label"=> "Malad_East", "y"=>/*$perc8*/$avgprice8),
    array("label"=> "Malad_West", "y"=>/*$perc9*/$avgprice9)
);

 $dataPoints2 = array(
    array("label"=> "Borivali East", "y"=> $perc),
    array("label"=> "mira road", "y"=>$perc2 ),
    array("label"=> "Dahiser_West", "y"=>$perc3),
    array("label"=> "Borivali_West", "y"=>$perc4 ),
    array("label"=> "Bhayander", "y"=>$perc5),
    array("label"=> "Kandivali_East", "y"=>$perc6 ),
    array("label"=> "Kandivali_West", "y"=>$perc7),
    array("label"=> "Malad_East", "y"=>$perc8),
    array("label"=> "Malad_West", "y"=>$perc9)
);
 
$dataPoints3 = array(
    array("label"=> "Borivali East", "y"=> $avgprice),
    array("label"=> "mira road", "y"=> $avgprice2),
    array("label"=> "Dahiser_West", "y"=> $avgprice3),
    array("label"=> "Borivali_West", "y"=> $avgprice4),
    array("label"=> "Bhayander", "y"=> $avgprice5),
    array("label"=> "Kandivali_East", "y"=> $avgprice6),
    array("label"=> "Kandivali_West", "y"=> $avgprice7),
    array("label"=> "Malad_East", "y"=> $avgprice8),
    array("label"=> "Malad_West", "y"=> $avgprice9)
);
 
$dataPoints4 = array(
    array("label"=> "Borivali East", "y"=> $avgprice),
    array("label"=> "mira road", "y"=> $avgprice),
    array("label"=> "Dahiser_West", "y"=> $avgprice),
    array("label"=> "Borivali_West", "y"=> $avgprice),
    array("label"=> "Bhayander", "y"=> $avgprice),
    array("label"=> "Kandivali_East", "y"=> $avgprice),
    array("label"=> "Kandivali_West", "y"=> $avgprice),
    array("label"=> "Malad_East", "y"=> $avgprice),
    array("label"=> "Malad_West", "y"=> $avgprice)
);
 
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
    title: {
        text: "Price chart"
    },
    axisY:{
        suffix: "%"
    },
    toolTip: {
        shared: true,
        reversed: true
    },
    legend:{
        cursor: "pointer",
        itemclick: toggleDataSeries
    },
    data: [
        {
            type: "stackedArea100",
            name: "price",
            showInLegend: true,
            yValueFormatString: "#0.0#\"%\"",
            dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
        },
        {
            type: "stackedArea100",
            name: "old price",
            showInLegend: true,
            yValueFormatString: "#0.0#\"%\"",
            dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
        }
    ]
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
<body>
<center>
<div id="chartContainer" style="height: 450px; width: 70%;"></div>
</center>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>
</html> 
            <div class="row">
                <div class="col-lg-4 col-md-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="img/rooms/1.jpg">
                            <a href="liking.php"  class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Shivthar complex</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
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
                                        <span>2871 sqft</span>
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
                                <span>$264,000</span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="img/rooms/2.jpg">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Oracle complex</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
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
                                        <span>4571 sqft</span>
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
                                <span>$950,000</span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="img/rooms/3.jpg">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Gintama tower</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
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
                                        <span>2674 sqft</span>
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
                                <span>$450,000</span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="img/rooms/4.jpg">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Mohak complex</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
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
                                        <span>1004 sqft</span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span>3</span>
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
                                <span>$100,000</span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="img/rooms/5.jpg">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Hina Garden</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
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
                                        <span>3014 sqft</span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span>3</span>
                                    </div>
                                    <div class="baths">
                                        <p>Baths</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span>1</span>
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
                                <span>$481,000</span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="img/rooms/6.jpg">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>Randomseol Tower</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
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
                                        <span>7624 sqft</span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span>7</span>
                                    </div>
                                    <div class="baths">
                                        <p>Baths</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span>4</span>
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
                                <span>$706,000</span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                </div>
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