<?php
require 'vendor/autoload.php';
       $client=new MongoDB\Client;
        $companydb = $client->companydb;
    $collection = $companydb->ssgraph;
	error_reporting(0);
    // $collection2 = $db->;
//error_reporting(E_ALL & ~E_NOTICE);
/*if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
         /*
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        // choose the appropriate page to redirect users 
        die( header( 'location:Login.php' ) );

    }*/
$location=$_GET['location'];
// ECHO $location;
$propertytype=$_GET['propertytype'];
$priced=$_GET['select1'];
$bedss=$_GET['room'];
$bathh=$_GET['bathroom']; 

/*if($location='' || $propertytype='' || $price='' || $room='' || $bathroom='')
{
	
header('Location:search.php');

}*/

	//$search =$collection->find(['Location'=>$location],['Property_Type'=>$propertytype],[' beds'=>$room],['bath'=>$bathroom],['price'=>$price]);
//$search2 =$collection2->find(['price'=>$price]);



?>
<!DOCTYPE html>
<html>
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

    <?php include("searchbarr.php");?>
<br>
<!-- Filter Search Section End -->
    <!-- Map Section Begin -->
	<?php
	if($location=="Borivali" || $location=="Borivali east" || $location=="Borivali west" || $location=="Borivali north" || $location=="Borivali south"){
  echo ' <div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60274.59168788896!2d72.81068442738832!3d19.23177112155761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b128b333e163%3A0x985640540577af7e!2sBorivali%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581737443794!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}
	elseif($location=="Kandivali" || $Location=="Kandivali east" || $Location=="Kandivali south" || $Location=="Kandivali north" || $Location=="Kandivali west"){
		echo '<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120580.72419036052!2d72.77226449466463!3d19.188753210909205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b701648ae49f%3A0x5f26aa1cd1a28d4c!2sMalad%2C%20Reserve%20Bank%20of%20India%20Staff%20Quarters%2C%20Raheja%20Twp%2C%20Malad%20East%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1582888336005!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>';
	}
	elseif($location=="Malad" || $location=="Malad north" || $location=="Malad south" || $location=="Malad east" || $location=="Malad west"){
	// echo $location;
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60274.59168788896!2d72.81068442738832!3d19.23177112155761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b128b333e163%3A0x985640540577af7e!2sBorivali%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581737443794!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($location=="Mira Road" || $location=="Mira Road west" || $location=="Mira Road east" || $location=="Mira Road north" || $location=="Mira Road south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60256.07490678742!2d72.84151679447227!3d19.282162614157905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0458cf7298b%3A0x468ed839e9df2b21!2sMira%20Road%2C%20Mira%20Bhayandar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855513853!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($location=="Matunga" || $location=="Matunga north" || $location=="Matunga south" || $location=="Matunga east" || $location=="Matunga west"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120580.72419036052!2d72.77226449466463!3d19.188753210909205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b701648ae49f%3A0x5f26aa1cd1a28d4c!2sMalad%2C%20Reserve%20Bank%20of%20India%20Staff%20Quarters%2C%20Raheja%20Twp%2C%20Malad%20East%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1582888106566!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>';
	}elseif($location=="Dahisar" || $location=="Dahisar north" || $location=="Dahisar south" || $location=="Dahisar east" || $location=="Dahisar west"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15044.518347442192!2d72.85503521774932!3d19.493059789597986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a8261bedd511%3A0x6eff7d8bc9ebde9c!2sDahisar%2C%20Maharashtra%20401303!5e0!3m2!1sen!2sin!4v1581855618045!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($location=="Ville Parle" || $location=="Ville Parle north" || $location=="Ville Parle south" || $location=="Ville Parle east" || $location=="Ville Parle west"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30161.883225259175!2d72.8445466308462!3d19.09732617282551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b42151fed3%3A0xac3b84f7db9d9318!2sVile%20Parle%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855643533!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($location=="Andheri" || $location=="Andheri north" || $location=="Andheri south" || $location=="Andheri east" || $location=="Andheri west"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30161.883225259175!2d72.8445466308462!3d19.09732617282551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b42151fed3%3A0xac3b84f7db9d9318!2sVile%20Parle%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855667081!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($location=="Churchgate" || $location=="Churchgate north" || $location=="Churchgate south" || $location=="Churchgate east" || $location=="Churchgate west"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15095.627450796394!2d72.81738921757206!3d18.935516244696704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1e71360b0c5%3A0x710e8dfe75aca32b!2sChurchgate%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855716781!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($location=="Dadar" || $location=="Dadar west" || $location=="Dadar east" || $location=="Dadar north" || $location=="Dadar south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30175.684287130465!2d72.8254232807501!3d19.02146057561261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cedb0ea0cd0f%3A0x428a465039995bd0!2sDadar%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855739802!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($location=="Bandra" || $location=="Bandra north" || $location=="Bandra south" || $location=="Bandra east" || $location=="Bandra west"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30169.675091953643!2d72.81239883079193!3d19.054529374397042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8e123f8d27b%3A0x437996b49a236a78!2sBandra%20West%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855781759!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($location=="Goregaon" || $location=="Goregaon east" || $location=="Goregaon west" || $location=="Goregaon north" || $location=="Goregaon south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60303.55045189852!2d72.8436782438066!3d19.152707133098996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b65a7edbbdb9%3A0xf447c38599143078!2sGoregaon%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855877050!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($location=="Khar Road" || $location=="Khar Road east" || $location=="Khar Road west" || $location=="Khar Road north" || $location=="Khar Road south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15083.541072381098!2d72.82301481761401!3d19.068781393470847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c904d1f59003%3A0x3fed21d7128f1fd4!2sKhar%2C%20Khar%20West%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855829018!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($location=="Mahim" || $location=="Mahim north" || $location=="Mahim south" || $location=="Mahim east" || $location=="Mahim west"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15086.147721737654!2d72.83324021760494!3d19.040116293734133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c92e5ad82b5d%3A0xa5d4096e2b84be0d!2sMahim%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855909683!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($location=="Jogeshwari" || $location=="Jogeshwari north" || $location=="Jogeshwari south" || $location=="Jogeshwari east" || $location=="Jogeshwari west"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.795658279574!2d72.82321483090249!3d19.141649671199882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1581855939443!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}else{
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60274.59168788896!2d72.81068442738832!3d19.23177112155761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b128b333e163%3A0x985640540577af7e!2sBorivali%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581737443794!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}
	?>
    <!-- Map Section End -->
    <!-- Hotel Room Section Begin --><br><br>
<!-- graph code
-->
<!-- ss code -->
<?php
        
       $cursor1=$collection->find(['location'=>$location." north"]);
       $sum_north=0;
       $count_north=0;
       foreach ($cursor1 as $q) {
           $sum_north+=$q['price'];
            $count_north++;
			
       }
echo $count_north;

       $avg_north=$sum_north/$count_north;
       $avg_north_old=$avg_north*90/100;
   

       $cursor2=$collection->find(['location'=>$location." south"]);
       $sum_south=0;
       $count_south=0;
       foreach ($cursor2 as $q) {
           $sum_south+=$q['price'];
           $count_south++;
       }


       $avg_south=$sum_south/$count_south;
        $avg_south_old=$avg_south*90/100;

       $cursor3=$collection->find(['location'=>$location." east"]);
       $sum_east=0;
       $count_east=0;
       foreach ($cursor3 as $q) {
           $sum_east+=$q['price'];
           $count_east++;
       }


       $avg_east=$sum_east/$count_east;
         $avg_east_old=$avg_east*90/100;

       $cursor4=$collection->find(['location'=>$location." west"]);
       $sum_west=0;
       $count_west=0;
       foreach ($cursor4 as $q) {
           $sum_west+=$q['price'];
           $count_west++;
       }


       $avg_west=$sum_west/$count_west;
        $avg_west_old=$avg_west*90/100;       
       

?>


<!-- graph code
-->
<?php

$dataPoints1 = array(
	array("label"=> $location." north", "y"=>  $avg_north_old),
	array("label"=> $location ." west", "y"=>  $avg_west_old),
	array("label"=> $location." east", "y"=> $avg_east_old),
	array("label"=> $location." south", "y"=>  $avg_south_old),
	/*array("label"=> "2014", "y"=> 39.50),
	array("label"=> "2015", "y"=> 50.82),
	array("label"=> "2016", "y"=> 74.70)*/
);
$dataPoints2 = array(
	array("label"=> $location." north", "y"=>  $avg_north),
	array("label"=> $location." west", "y"=>  $avg_west),
	array("label"=> $location." east", "y"=>   $avg_east),
	array("label"=> $location." south", "y"=>  $avg_south),
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
           
<?php 
if($price="high to low"){
$cursor=$collection->find(['location'=>$location,'propertytype'=>$propertytype],['$or'=>[['bed'=>$bedss],['bath'=>$bathh]]],['sort' => ['timestamp' => -1],'limit'=>9]);
}
elseif($price="low to high"){
$cursor=$collection->find(['location'=>$location,'propertytype'=>$propertytype],['$or'=>[['bed'=>$bedss],['bath'=>$bathh]]],['sort' => ['timestamp' => 1],'limit'=>9]);
}
$count=count($cursor);
echo '<h2 align="left">'.$count.' Results are found</h2><br>';
//$var=$cursor->count(true);
//$var=cool();
//echo '&nbsp;&nbsp;&nbsp;&nbsp;<h3>'.$var.' results found</h3><br><br>';?>
<div id="grid" class="row">
<?php
//$i=0;
foreach($cursor as $document){
	$image=$document['filename'];
?>

                <div class="col-lg-4 col-md-4 col-md-6">
                    <div class="room-items">
                        <?php echo ' <div class="room-img set-bg" data-setbg="images/'.$image.'">'; ?>
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5><?php $Property_Name=$document['propertyname']; echo $Property_Name;?></h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span><?php echo $document['location'];?></span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a><a href="#" class="large-width"><i class="flaticon-cursor"></i> <span><?php echo $document["propertytype"];?></span></a>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Lot Size</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span><?php $Lot_Size=$document['lotsize']; echo $Lot_Size;?></span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span><?php $beds=$document['bed']; echo $beds;?></span>
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
                                <span><?php $price=$document['price']; echo $price;?></span>
                            </div>
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

