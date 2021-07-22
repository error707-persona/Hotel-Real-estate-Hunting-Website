<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->vendordetailscollection;
$collection2=$companydb->propertycollection;
error_reporting(0);
session_start();
//$_SESSION["email"]=;
//echo $_SESSION['email'];
//exit;
$flag=$collection->find(
['email'=>$_SESSION["email"],'flag'=>1]
);
if(!isset($flag)){
$lotsize=$_POST['lotsize'];
$username=$_POST['username'];
$bed=$_POST['bed'];
$baths=$_POST['baths'];
$garage=$_POST['garage'];
$description=$_POST['description'];
$propertyname=$_POST['propertyname'];
$location=$_POST['location'];
$propertyfeature=$_POST['feature'];
//$regid=$_POST['random'];
$first=$_POST['firstname'];
$propertytype=$_POST['propertytype'];
$last=$_POST['lastname'];
$office=$_POST['office'];
$mobile=$_POST['mobile'];
$fax=$_POST['fax'];
$whatsapp=$_POST['whatsapp'];
$email=$_POST['email'];
$price=$_POST['price'];
$address=$_POST['address'];
$hashtag=$_POST['hashtag'];
//$image=$_POST['image'];
$count=0;
//HASHTAG
/*function convertHashtags($str){
	$regex="/#+([a-zA-Z0-9_]+)/";
	$str=preg_replace($regex,'<a href="#?tag=$1">$0</a>',$str);
return($str);
}
$string=$hashtag;
$string=convertHashtags($string);
//echo $string; 
//if(isset($_GET["tag"])){
	$tag=preg_replace('#[^a-z0-9_]#i','',$string);
	//tag is now ready and sanitised fro database queries here
	$fulltag="#".$tag;
	foreach($collection as $c){
		if($fulltag==$c){
		$newcoll=$companydb->$c;
		$inst=$newcoll->insertOne(['hashtag'=>$fulltag,'propid'=>$document['_id']]);
		}
		elseif($fulltag!=$c){
			 $collection = $companydb->createCollection("$fulltag");
		}
	}*/
//}
//echo $fulltag;
if($lotsize!='' || $bed!='' || $garage!='' || $description!='' || $first!='' || $last!='' || $office!='' || $mobile!='' || $fax!='' || $whatsapp!='' || $email!='')
{
	$insertdetail=array(
	'propertyname'=>$propertyname,
	'proprtytype'=>$propertytype,
	'ownerfirstname'=>$first,
	'ownerlastname'=>$last,
	'username'=>$username,
	'lotsize'=>$lotsize,
	'bed'=>$bed,
	'bath'=>$baths,
	'garage'=>$garage,
	'description'=>$description,
	'propertyfeature'=>$propertyfeature,
	'location'=>$location,
	'office'=>$office,
	'mobile'=>$mobile,
	'fax'=>$fax,
	'whatsapp'=>$whatsapp,
	'email'=>$email,
	'price'=>$price,
	'address'=>$address,
	'hashtag'=>$hashtag,
	'flag'=>0,
	'status'=>"Open",
	);
	$arr2=array(
	'propertyname'=>$propertyname,
	'proprtytype'=>$propertytype,
	'ownerfirstname'=>$first,
	'ownerlastname'=>$last,
	'username'=>$username,
	'email'=>$email,
	'lotsize'=>$lotsize,
	'location'=>$location,
	'bed'=>$bed,
	'bath'=>$baths,
	'garage'=>$garage,
	'description'=>$description,
	'propertyfeature'=>$propertyfeature,
	'status'=>"Open",
	'hashtag'=>$htag,
	'likecount'=>$count+1,
	'price'=>$price
	);
	$result=$collection->insertOne($insertdetail);
	
}	
//$result = $collection->insertOne($data);
$result2=$collection2->insertOne($arr2);
					/*if($result->getInsertedCount()>0) {
						echo "Article is created..";
					} else {
						echo "Failed to create Article";
					}*/
$findproperty=$collection->findOne(
['propertyname'=>$propertyname,
	'ownerfirstname'=>$first,
	'ownerlastname'=>$last,
	'email'=>$email,
]
);
$findpro=$collection2->find(
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
	'email'=>$email,'propertyname'=>$propertyname],
	['$set'=>['propertyid'=>$propid],]
	);

if($findproperty)
{
	$user=$collection->updateOne(
	['propertyname'=>$propertyname,
	'ownerfirstname'=>$first,
	'ownerlastname'=>$last,],
	['$set'=>['flag'=>1]]
	);
	
}
$cursor=$collection->find(['email'=>$email],['limit'=>1]);
}else{
	$cursor=$collection->find(['email'=>$_GET['e']],['limit'=>1]);
}
/*$findflag=$collection->findOne(
['propertyname'=>$propertyname,
	'ownerfirstname'=>$first,
	'ownerlastname'=>$last,],
	['flag'=>1]
);*/
	//$cursor=$collection->find(['email'=>$_SESSION["email"]],['limit'=>1]);

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
    <!-- chatboat code 
        <script type="text/javascript" align="left"
    id="botcopy-embedder-d7lcfheammjct"
    class="botcopy-embedder-d7lcfheammjct" 
    data-botId="5db1875b7487773823c82259">

    var s = document.createElement('script'); 
    s.type = 'text/javascript'; s.async = true; 
    s.src = 'https://d7lcfheammjct.cloudfront.net/js/injection.js'; 
    document.getElementById('botcopy-embedder-d7lcfheammjct').appendChild(s);
    </script>-->
    <!-- chatboat end-->
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
   <?php include('searchbarr.php');
    foreach($cursor as $document)
{
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
	$mobile=$document["mobile"];
	$fax=$document["fax"];
	$whatsapp=$document["whatsapp"];
	$image=$document["filename"];
	$propimage=$document['propertyimage'];
	?>
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
                        <span>₹<?php echo $priced;?></span>
                    </div>
                </div>
            </div>
			            <div class="row">
                <div class="col-lg-12">
                    <div class="property-img owl-carousel">
                        <div class="single-img">
                            <img src="img/about-img/2.jpg" alt="">
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
						<!-- WHATSAPP CODE -->
						
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
                                    <div class="elfsight-app-7139ec50-ad91-4ea2-bb67-f4723e36170a"></div>
									
									<!-- END -->
						<div class="row">
                            <div class="col-lg-12">
                                <div class="property-description">
                                    <h4>Description</h4>
                                    <p><?php echo $descriptiond;?> </p>
                                </div>
								<div class="property-features">
                                    <h4>Property Features</h4>
                                    <div class="property-table">
									&nbsp;&nbsp;
									&nbsp;&nbsp;

									<?php
                                    $i=0;
                                    foreach($propertyfeatured as $doc){
                                    $co=count($doc);echo '<table>';$j=1;
                                    for($i=0;$i<$co;$i++){
                                        if($j%3==0){
                                            echo '<tr>';
                                        echo '&nbsp;&nbsp;&nbsp;<td><img src="img/check.png" alt="">'.$propertyfeatured[0][$i].'</td>&nbsp;&nbsp;&nbsp;';
                                        echo '</tr>';
                                        }elseif($j%3!=0){
                                            echo '&nbsp;&nbsp;&nbsp;<td><img src="img/check.png" alt="">'.$propertyfeatured[0][$i].'</td>&nbsp;&nbsp;&nbsp;';
                                        }else{
											echo $propertyfeatured[0];
										}
                                        $j++;
                                        }
                                        echo '</table>';
                                    }           
                                    //echo $bedd;
                                     ?>
                                        </table>
                                    </div>
                                </div>
								 <div class="location-map">
                                    <h4>Location</h4>
                                   <?php
								  // $myvalue = 'Test me more';
//$loc = explode(' ',trim($location));
$loc[0]=="Borivali";
//echo $aloc[0]; // will print Test
	if($loc[0]=="Borivali" || $location=="Borivali south" ||$location=="Borivali east"||$location=="Borivali west"||$location=="Borivali north"){
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
	elseif($loc[0]=="Kandivali" || $location=="Kandivali east" || $location=="Kandivali west" || $location=="Kandivali north" || $location=="Kandivali south"){
		echo '<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60283.76119456597!2d72.8098519272876!3d19.206770175215365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6c7d151eb11%3A0x53c60cb900ce3b40!2sKandivali%2C%20Kandivali%20West%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581854537259!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}
	elseif($loc[0]=="Malad"||$location=="Malad east" || $location=="Malad west" || $location=="Malad north" || $location=="Malad south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30146.061201498567!2d72.85151684319709!3d19.183945752297202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b5ce2b93d7db%3A0x879a5e5cfe9bb7a8!2sMalad%2C%20Malad%20East%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1582207395017!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Mira Road" || $location=="Mira Road east" || $location=="Mira Road west" || $location=="Mira Road north" || $location=="Mira Road south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60256.07490678742!2d72.84151679447227!3d19.282162614157905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0458cf7298b%3A0x468ed839e9df2b21!2sMira%20Road%2C%20Mira%20Bhayandar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855513853!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Matunga" || $location=="Matunga east" || $location=="Matunga west" || $location=="Matunga north" || $location=="Matunga south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15087.162965575417!2d72.84517566760142!3d19.028940493836853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ced0e96b48cf%3A0x7a816e69fb2d0324!2sMatunga%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855577487!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Dahisar" || $location=="Dahisar east" || $location=="Dahisar west" || $location=="Dahisar north" || $location=="Dahisar south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15044.518347442192!2d72.85503521774932!3d19.493059789597986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a8261bedd511%3A0x6eff7d8bc9ebde9c!2sDahisar%2C%20Maharashtra%20401303!5e0!3m2!1sen!2sin!4v1581855618045!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Ville Parle" ||$location=="Ville Parle east" || $location=="Ville Parle west" || $location=="Ville Parle north" || $location=="Ville Parle south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30161.883225259175!2d72.8445466308462!3d19.09732617282551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b42151fed3%3A0xac3b84f7db9d9318!2sVile%20Parle%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855643533!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Andheri" || $location=="Andheri east" || $location=="Andheri west" || $location=="Andheri north" || $location=="Andheri south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30161.883225259175!2d72.8445466308462!3d19.09732617282551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b42151fed3%3A0xac3b84f7db9d9318!2sVile%20Parle%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855667081!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Churchgate" || $location=="Churchgate east" || $location=="Churchgate north" || $location=="Churchgate west" || $location=="Churchgate south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15095.627450796394!2d72.81738921757206!3d18.935516244696704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1e71360b0c5%3A0x710e8dfe75aca32b!2sChurchgate%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855716781!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Dadar" || $location=="Dadar east" || $location=="Dadar west" || $location=="Dadar north" || $location=="Dadar south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30175.684287130465!2d72.8254232807501!3d19.02146057561261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cedb0ea0cd0f%3A0x428a465039995bd0!2sDadar%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855739802!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Bandra" || $location=="Bandra east" || $location=="Bandra west" || $location=="Bandra north" || $location=="Bandra south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30169.675091953643!2d72.81239883079193!3d19.054529374397042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8e123f8d27b%3A0x437996b49a236a78!2sBandra%20West%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855781759!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Goregaon" || $location=="Goregaon east" || $location=="Goregaon west" ||$location=="Goregaon north"||$location=="Goregaon south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60303.55045189852!2d72.8436782438066!3d19.152707133098996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b65a7edbbdb9%3A0xf447c38599143078!2sGoregaon%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855877050!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Khar Road" || $location=="Khar Road east" || $location=="Khar Road west" || $location=="Khar Road north" || $location=="Khar Road south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15083.541072381098!2d72.82301481761401!3d19.068781393470847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c904d1f59003%3A0x3fed21d7128f1fd4!2sKhar%2C%20Khar%20West%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855829018!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Mahim" || $location=="Mahim east" || $location=="Mahim west" || $location=="Mahim north" || $location=="Mahim south"){
	echo'	<div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15086.147721737654!2d72.83324021760494!3d19.040116293734133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c92e5ad82b5d%3A0xa5d4096e2b84be0d!2sMahim%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1581855909683!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}elseif($loc[0]=="Jogeshwari" || $location=="Jogeshwari east" || $location=="Jogeshwari west" || $location=="Jogeshwari north" || $location=="Jogeshwari south"){
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.6433229747!2d72.74109780863927!3d19.08252232377542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1582207051191!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>';
	}
	?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 <div class="col-lg-4">
                    <div class="row pb-30">
                        <div class="col-lg-12">
                            <div class="contact-service">
                             <?php echo '<img src="img/blog/'.$image.'" alt="">'; ?>
								<center>
                                <p>Listed by</p>
                                <h5><?php echo $document["ownerfirstname"].' '.$document["ownerlastname"];?></h5>
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
                                        <td><center>Email : <span><?php echo $document['email'];?></span></center></td>
                                    </tr>
                                </table>
								</center>
                                <a href="#" class="site-btn list-btn">View More Listings</a>
                                <?php
                                if(isset($_GET['e'])){
                                if($_SESSION['email']==$_GET['e']){
                                    $mine=1;
                                }else{
                                    $mine=0;
                                }}else{
                                    $mine=1;
                                }
                                if($mine==1){
                            echo '<a href="logout.php" class="site-btn list-btn">Logout</a>';
                        }elseif($mine==0){
                            echo '<a href="cusprofile.php?id='.$document["_id"].'" class="site-btn list-btn">Book property</a>';
                        }?>
							</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="room-items">
                               									 <?php echo '<div class="room-img set-bg" data-setbg="images/'.$propimage.'"><br>'; ?>
																 <div>
                                    <a href="#" class="room-content">
                                        <i class="flaticon-heart"></i>
										</div>
                                    </a>
                                </div>
                                <div class="room-text">
                                    <div class="room-details">
                                        <div class="room-title">
                                            <h5><?php echo $propertynamed;?></h5>
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
                                        <span>₹ <?php  echo $priced;?></span>
                                    </div>
                                    <a href="#" class="site-btn btn-line">View Property</a>
                                </div>
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