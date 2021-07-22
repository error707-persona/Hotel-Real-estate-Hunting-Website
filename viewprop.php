<?php 
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->vendordetailscollection;
$id=$_GET["propid"];

$findproperty=$collection->findOne(
['propertyname'=>$propertyname,
	'ownerfirstname'=>$first,
	'ownerlastname'=>$last,
	'email'=>$email,
]
);
session_start();
$_SESSION['CUSID']=$_SESSION['cussid'];
/*$findpro=$collection2->findOne(
['propertyname'=>$propertyname,
	'ownerfirstname'=>$first,
	'ownerlastname'=>$last,
	'email'=>$email,
]
);
foreach($findpro as $f){
	$propid=$f['_id'];
	$propertyname=$f['propertyname'];
}
 $collection5=$companydb->picproperty;
$pic=$collection5->updateOne([
	'email'=>$email,],
	['$set'=>['propertyid'=>$id],['propertyname'=>$propertyname]]
	);
*/
if($findproperty)
{
	$user=$collection->findOne(
	['_id'=>$id]
	);
	
}
/*$findflag=$collection->findOne(
['propertyname'=>$propertyname,
	'ownerfirstname'=>$first,
	'ownerlastname'=>$last,],
	['flag'=>1]
);*/
if($findflag)
{
foreach($findflag as $document)
{$id=$document["_id"];
	$addressd=$document["address"];
	$priced=$document["price"];
	$reg=$document["_id"];
	$lotsized=$document["lotsize"];
	$bedd=$document["bed"];
	$bathsd=$document["bath"];
	$garaged=$document["garage"];
	$descriptiond=$document["description"];
	$propertynamed=$document["propertyname"];
	$propertyfeatured=$document["propertyfeature"]; 
	$office=$document["office"];
	$location=$document["location"];
	$mobile=$document["phone"];
	$fax=$document["fax"];
	$whatsapp=$document["whatsapp"];
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
    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>-->
    <!-- Header Section Begin -->
    <?php include('header2.php');?>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg single-property-r" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Property Page</h2>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Filter Search Section Begin -->
   <?php include('searchbarr.php');?>
 <div class="single-property">
        <div class="container">
            <div class="row spad-p">
                <div class="col-lg-12">
                    <div class="property-title">
                        <h3><?php echo $propertynamed;?></h3>
                        <a href="#"><i class="fa flaticon-placeholder"></i> <?php echo $addressd;?></a>
                    </div>
                    <div class="property-price">
                        <p>For Sale</p>
                        <span>$<?php echo $priced;?></span>
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
	 <!-- Single Property Deatails Section Begin -->
    <section class="property-details">
        <div class="container">
            <div class="row sp-40 spt-40">
                <div class="col-lg-8">
                    <div class="p-ins">
                        <div class="row details-top">
                            <div class="col-lg-12">
                                <div class="t-details">
                                    <div class="register-id">
                                        <p>Registered ID: <span><?php echo $reg;?></span></p>
                                    </div>
                                    <div class="popular-room-features single-property">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span><?php echo $lotsized;?></span>
                                        </div>
										<div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span><?php echo $bedd;?></span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span><?php echo $bathsd?></span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span><?php echo $garaged;?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="col-lg-12">
                                <div class="property-description">
                                    <h4>Description</h4>
                                    <p><?php $descriptiond;?> </p>
                                </div>
								<div class="property-features">
                                    <h4>Property Features</h4>
                                    <div class="property-table">
									
									<?php 
									foreach($propertyfeatured as $doc)
									echo $doc; ?>
                                        <table>
									<?php	/*$fea=explode($propertyfeatured);*/ ?>
                                            <tr>
											<?php //if($fea[0]==" Home theater"){
                                                //echo '<td><img src="img/check.png" alt=""> Home theater</td>';
											//}?>
                                                <td><img src="img/check.png" alt=""> Carpeting</td>
                                                <td><img src="img/check.png" alt=""> Attic fans</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Media room</td>
                                                <td><img src="img/check.png" alt=""> Concrete</td>
                                                <td><img src="img/check.png" alt=""> Ceiling fans</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Family room</td>
                                                <td><img src="img/check.png" alt=""> Bamboo</td>
                                                <td><img src="img/check.png" alt=""> Thermostats</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Gym/workout room</td>
                                                <td><img src="img/check.png" alt=""> Stone</td>
                                                <td><img src="img/check.png" alt=""> Single flush toilets</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Library</td>
                                                <td><img src="img/check.png" alt=""> Tile</td>
                                                <td><img src="img/check.png" alt=""> Window shutters</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Butler's pantry</td>
                                                <td><img src="img/check.png" alt=""> Laminate</td>
                                                <td><img src="img/check.png" alt=""> Solar heat</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Sunroom</td>
                                                <td><img src="img/check.png" alt=""> Cork</td>
                                                <td><img src="img/check.png" alt=""> Solar plumbing</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Downstairs's bedroom</td>
                                                <td><img src="img/check.png" alt=""> Vinyl / linoleum</td>
                                                <td><img src="img/check.png" alt=""> Solar Screens</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Basement</td>
                                                <td><img src="img/check.png" alt=""> Manufactured wood</td>
                                                <td><img src="img/check.png" alt=""> Storm windows</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Guest quarters</td>
                                                <td><img src="img/check.png" alt=""> Marble</td>
                                                <td><img src="img/check.png" alt=""> Tankless water heater</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Wine storage</td>
                                                <td><img src="img/check.png" alt=""> Wood</td>
                                                <td><img src="img/check.png" alt=""> Skylights or sky tubes</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
								 <div class="location-map">
                                    <h4>Location</h4>
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.4487669232144!2d72.86228711421569!3d19.262841101080117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0f74539954d%3A0xbb6b56faebc49ef4!2sAshish%20Complex%2C%20Dahisar%20East%2C%20Mumbai%2C%20Maharashtra%20400068!5e0!3m2!1sen!2sin!4v1571909515281!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 <div class="col-lg-4">
                    <div class="row pb-30">
                        <div class="col-lg-12">
                            <div class="contact-service">
                                <img src="img/single-property/small.png" alt="">
								<center>
                                <p>Listed by</p>
                                <h5><?php echo $first.' '.$last;?></h5>
                                <table>
                                    <tr>
                                        <td><center>Office : <span><?php echo $office;?></span></center></td>
                                    </tr>
                                    <tr>
                                        <td><center>Mobile : <span><?php echo $mobile;?></span></center></td>
                                    </tr>
                                    <tr>
                                        <td><center>Fax : <span><?php echo $fax;?></span></center></td>
                                    </tr>
                                    <tr>
                                        <td><center>WhatsApp : <span><?php echo $whatsapp; ?></span></center></td>
                                    </tr>
                                    <tr>
                                        <td><center>Email : <span><?php echo $email;?></span></center></td>
                                    </tr>
                                </table>
								</center>
                                <a href="#" class="site-btn list-btn">View More Listings</a>
                            <a href="logout.php" class="site-btn list-btn">Logout</a>
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
                                            <h5><?php echo $propertynamed;?></h5>
                                            <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span><?php echo $location;?></a>
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
                                                <span><?php echo $bedd;?></span>
                                            </div>
                                            <div class="baths">
                                                <p>Baths</p>
                                                <img src="img/rooms/bath.png" alt="">
                                                <span><?php echo $bathsd;?></span>
                                            </div>
                                            <div class="garage">
                                                <p>Garage</p>
                                                <img src="img/rooms/garage.png" alt="">
                                                <span><?php echo $garaged;?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-price">
                                        <p>For Sale</p>
                                        <span>$<?php  echo $priced;?></span>
                                    </div><form method="get"><input type="hidden" name ="propid" value="<?=$id?>">
                                    <a href="book.php" class="site-btn btn-line">Book property</a></form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include("footer.php");?>
<?php }?>
<?php }?>