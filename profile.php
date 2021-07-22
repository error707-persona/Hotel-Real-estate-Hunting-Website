<!DOCTYPE html>
<html lang="en">
<?php

require_once "config.php";

/*print_r($_GET['e']);

if($_SESSION['email'] == $_GET['e']) {
	//hide edit button 
	$mine = 1;
	//echo '<h1>MY PROFILE</h1>';
	
} else {
	//echo '<h1>not mine PROFILE</h1>';
	$mine = 0;
}*/
//for checking if someone is logged in the system
//if(!isset($_SESSION['islogin']) || empty($_SESSION['islogin']) || $_SESSION['islogin'] == 0) {
	//header('location:login.php');
//}


//forbidden acces through url
     // at the top of 'check.php' 
  /* if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
         /*
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        // choose the appropriate page to redirect users 
        die( header( 'location:Login.php' ) );

    }*/


$collection = $companydb->selectCollection('venpiccollection');
                
    //$_SESSION['email']            
?>
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
            <h2>Profile Page</h2>
        </div>
    </section>
    <!-- Hero Section End -->
    <?php //include('searchbarr.php'); ?>
    <!-- Single Property Section Begin -->
   

    
    <div class="single-property">
        <div class="container">
        
            <div class="row spad-p">
                <div class="col-lg-12">
                    <div class="property-title">

                   <h3>Upload Property image </h3>
                        
                    </div>
                  <!--  <div class="property-price">
                        <p>Price</p>
                        <span></span>
                    </div>-->
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
                    <br>
                    <!-- upload image--><form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="image" enctype="multipart/form-data">
                        
                        <br>
						
                       <!--  <button type="submit" name="image" class="btn btn-primary">Property Image</button>-->
						 
               </form> </div>
            </div>
        </div>


    </div>


 <?php 
// $collection5=$companydb->like;
 $uniq=$_SESSION['email'];
 $SESSION['email']=$uniq;

    
 // $_SESSION['Username']=$_SESSION['username'];
    ?>
    <!-- Single Property End -->
    <!-- Single Property Deatails Section Begin -->
    <section class="property-details">
           <form action="insertdetails.php" id="profile" name="profile" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row sp-40 spt-40">
                <div class="col-lg-8">
                    <div class="p-ins">
                        <div class="row details-top">
                            <div class="col-lg-12">
                                <div class="t-details">
                                   <!-- <div class="register-id">
                                        <p>Registered ID: <span><?php// $random=rand();?><input name="random" type="text" name="id" placeholder="<?//=$random?>" disabled></span></p>
                                    </div>-->
                                    <div class="popular-room-features single-property">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span><input type="text" name="lotsize" placeholder="Enter number only" required></span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span><input type="text" name="bed" placeholder="Enter number only" required></span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img align="left" src="img/rooms/bath.png" alt="">
                                            <input type="text" name="baths" placeholder="Enter number only" required>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span><input type="text" name="garage" placeholder="Enter number only" required></span>
                                            
                                        </div>
                                        <div class="price">
                                            <p>Price</p>
                                            <span>&nbsp;  ₹ <input type="text" name="price" placeholder="Enter number only" required></span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="property-description">
                                    <h4>Description:</h4>
                                    <p><textarea type="text" rows="6" cols="50" name="description" placeholder="Description about your property or incase any kind of terms/conditions applied" required></textarea> </p>
                                <br>
								<br>
                                <h4>Property type:</h4>
                                    <p><select id="t" name="propertytype"><option>Rent</option><option>Builder</option><option>PG</option></select> </p>
                                <br>
                                <h4>Address:</h4>
                                    <p><textarea type="text" rows="6" cols="50" name="address" placeholder="Address of the property" required></textarea> </p>
                                <br>
                                <h4>City:</h4>
                                    <select id="t" name="location"><option value="Virar">Virar</option><option value="Nallasopara">Nallasopara</option><option value="Vasai Road">Vasai Road</option><option value="Naigaon">Naigaon</option><option value="Bhayander">Bhayander</option><option value="Mira road">Mira Road</option><option value="Dahisar">Dahisar</option><option value="Borivali">Borivali</option><option value="Kandivali">Kandivali</option><option value="Malad">Malad</option><option value="Goragaon">Goragaon</option><option value="Ram Mandir">Ram Mandir</option><option value="Jogeshwari">Jogeshwari</option><option value="Andheri">Andheri</option><option value="Ville Parle">Ville Parle</option><option value="Santa Cruz">Santa Cruz</option><option value="Khar Road">Khar Road</option><option value="Bandra">Bandra</option><option value="Mahim" >Mahim</option><option value="Matunga Road">Matunga Road</option><option value="Dadar">Dadar</option><option value="Prabhadevi">Prabhadevi</option><option value="Mahalaxmi">Mahalaxmi</option><option value="Mumbai Central">Mumbai Central</option><option value="Grand Road">Grand Road</option><option value="Charni Road">Charni Road</option><option value="Marine Line">Marine Line</option><option value="Churchgate">Churchgate</option></select><br><br><h4>Zone:</h4><select id="z" name="zone"><option value="north">North</option><option value="south">South</option><option value="east">East</option><option value="west">West</option></select>
                                <br><br>
                   
                                    <h4>Property Name:</h4>
                                    <p><span><input type="text" rows="6" cols="50" name="propertyname" placeholder="Name of the property/complex/building etc." required></span> </p>
                              <br>
							  <h4>Hashtags:</h4>
                                    <p><span><input type="text" rows="6" cols="50" name="hashtag" placeholder="atleast include one" required></span> </p>
							  </div>
                                <div class="property-features">
                                    <h4>Property Features</h4>
                                    <div class="property-table">
                                        <table>
                                            <tr>
                                                <td><input type="checkbox"  value="Home theater" name="feature[]"><label for="Home theater">Home theater</label></td>
                                                <td><input type="checkbox"  value="Carpeting" name="feature[]"><label for="Carpeting"> Carpeting</label></td>
                                                <td><input type="checkbox"  value="Attic fans" name="feature[]"><label for="Attic fans"> Attic fans</label></td>

                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"  value="Media room" name="feature[]"><label for="Media room"> Media room </label></td>
                                                <td><input type="checkbox"  value="Concrete" name="feature[]"><label for="Concrete"> Concrete</label></td>
                                                <td><input type="checkbox"  value="Ceiling fans" name="feature[]"><label for="Ceiling fans"> Ceiling fans</label></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"  value="Family room" name="feature[]"><label for="Family room"> Family room</label></td>
                                                <td><input type="checkbox"  value="Bamboo" name="feature[]"><label for="Bamboo"> Bamboo</label></td>
                                                <td><input type="checkbox"  value="Thermostats" name="feature[]"><label for="Thermostats"> Thermostats</label></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"  value="Gym/workout room" name="feature[]"> <label for="Gym/workout room">Gym/workout room</label></td>
                                                <td><input type="checkbox"  value="Stone" name="feature[]"><label for="Stone"> Stone</label></td>
                                                <td><input type="checkbox"  value="Single flush toilets" name="feature[]"> <label for="Single flush toilets">Single flush toilets</label></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"  value="Library" name="feature[]"><label for="Library"> Library</label></td>
                                                <td><input type="checkbox"  value="Tile" name="feature[]"><label for="Tile"> Tile</label></td>
                                                <td><input type="checkbox"  value="Window shutters" name="feature[]"><label for="Window shutters"> Window shutters</label></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"  value="Butler pantry" name="feature[]"><label for="Butler pantry"> Butler pantry</label></td>
                                                <td><input type="checkbox"  value="Laminate" name="feature[]"><label for="Laminate"> Laminate</label></td>
                                                <td><input type="checkbox"  value="Solar heat" name="feature[]"><label for="Solar heat"> Solar heat</label></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"  value="Sunroom" name="feature[]"><label for="Sunroom"> Sunroom</label></td>
                                                <td><input type="checkbox"  value=" Cork" name="feature[]"><label for="Cork"> Cork</label></td>
                                                <td><input type="checkbox"  value="Solar plumbing" name="feature[]"><label for="Solar plumbing"> Solar plumbing</label></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"  value="Downstairs bedroom" name="feature[]"><label for="Downstairs bedroom"> Downstairs bedroom</label></td>
                                                <td><input type="checkbox"  value="Vinyl / linoleum" name="feature[]"><label for="Vinyl / linoleum"> Vinyl / linoleum</label></td>
                                                <td><input type="checkbox"  value="Solar Screens" name="feature[]"><label for="Solar Screens"> Solar Screens</label></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=" Basement" name="feature[]"><label for="Basement" > Basement</label></td>
                                                <td><input type="checkbox"  value="Manufactured wood" name="feature[]"><label for="Manufactured wood"> Manufactured wood</label></td>
                                                <td><input type="checkbox"  value="Storm windows" name="feature[]"><label for="Storm windows"> Storm windows</label></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"  value="Guest quarters" name="feature[]"><label for="Guest quarters"> Guest quarters</label></td>
                                                <td><input type="checkbox"  value="Marble" name="feature[]"><label for="Marble"> Marble</label></td>
                                                <td><input type="checkbox"  value=" Tankless water heater" name="feature[]"><label for="Tankless water heater"> Tankless water heater</label></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"  name="feature[]" value="Wine storage"><label for="Wine storage"> Wine storage</label></td>
                                                <td><input type="checkbox"  name="feature[]" value="Wood"><label for="Wood"> Wood</label></td>
                                                <td><input type="checkbox"  value="Skylights or sky tubes" name="feature[]"><label for="Skylights or sky tubes"> Skylights or sky tubes</label></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
								<div class="property-description">
								<h4>Property Image</h4>
								<input id="file" name="image" type="file" placeholder="Select a property image" class="form-control input-md">
								</div>
                               <!-- <div class="location-map">
                                    <h4>Location</h4>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107002.020096289!2d-96.80666618302782!3d33.06138629992991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c21da13c59513%3A0x62aa036489cd602b!2sPlano%2C+TX%2C+USA!5e0!3m2!1sen!2sbd!4v1558246953339!5m2!1sen!2sbd" allowfullscreen></iframe>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row pb-30">
                        <div class="col-lg-12">
                            <div class="contact-service">
                            <img src="img/single-property/download.png" alt=""><br>
                    
                 <!-- <input type="hidden" name="aid" id="aid">
                                <input type="file" class="site-btn list-btn" name="create" onclick="image()"><br>for profile<br>-->
                                
                                 <!-- File input-->
            
                                <p>Listed by</p>
                                <h5><input type="text" placeholder="Firstname" name="firstname"><br><br><input type="text" name="lastname" placeholder="Lastname"></h5>
                                <table>
                                    <tr>
                                        <td>Office : <span><input type="text" name="office" required></span></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile : <span><input type="text" name="mobile" required></span></td>
                                    </tr>
                                    <tr>
                                        <td>Fax : <span><input type="text" name="fax"></span></td>
                                    </tr>
									<tr>
                                        <td>Username: <span><input type="text" name="username"></span></td>
                                    </tr>
                                    <tr>
                                        <td>WhatsApp : <span><input type="text" name="whatsapp" required></span></td>
                                    </tr>
                                     <tr>
                                        <td>Email : <span><input type="text" name="email" required></span></td>
                                    </tr>
                                </table>
								<input id="file" name="profilepic" type="file" placeholder="Select a property image" class="form-control input-md"><br><br>
                                <input type="submit" name="proceed" class="site-btn list-btn" value="submit">
                                  <br><br> </form>
                            </div>
                        </div>
                    </div>
					<!--<form class="form-horizontal" method="post" action="<?php //echo $_SERVER['PHP_SELF']; ?>" name="image" enctype="multipart/form-data">
                        <input id="file" name="file" type="file" placeholder="Select a property image" class="form-control input-md">
                        <br>
                         <button type="submit" name="profilepic" class="btn btn-primary">Profile Image</button>
               </form>-->
                
                </div>
            </div>
        </div>
        
    </section>
   
<script>

    <?php /*if($_FILES['file']) {
                        if(move_uploaded_file($_FILES['file']['tmp_name'], '/profile_image'.$_FILES['file']['name'])) {
                            $data['fileName'] = $_FILES['file']['name'];
                        } else {
                            echo "Failed to upload file.";
                        }
                    }
                    $result = $collection->insertOne($data);
                    if($result->getInsertedCount()>0) {
                        echo "Article is created..";
                    } else {
                        echo "Failed to create Article";
                    }
            */    
                ?>
/*function s(){
    document.forms['profile'].action='insertdetails.php';
    document.forms['profile'].submit();
}*/
</script>


</div>

    <!-- Single Property Deatails Section End -->
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
	<script type="text/javascript">   
$(document).ready(function () {   
$('input#proceed').on('click', function () {   
var myForm = $("form#profile");   
if (myForm) {   
$(this).prop('disabled', true);   
$(myForm).submit();   
}   
});   
});   
</script>
</body>

</html>