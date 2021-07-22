<!DOCTYPE html>
<html lang="en">
<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$companydb=$client->companydb;
$collection=$companydb->customercollection;
$property=$companydb->customercollection;
session_start();
/*if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
         /*
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        // choose the appropriate page to redirect users 
        die( header( 'location:Login.php' ) );

    }*/
$email=$_SESSION['email'];
$_SESSION['emai']=$_SESSION['email'];
if(isset($_POST['go'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mobile=$_POST['phone'];
$query=$collection->find(['email'=>$email,'firstname'=>$firstname,'lastname'=>$lastname,'phone'=>$mobile]);
$book=$companydb->book;
$result=$property->find(['_id'=>$_GET['id']]);
if(isset($result)){
foreach($result as $r){
	$id=$r['_id'];
	$propertyname=$r['propertyname'];
	$status=$r['status'];
	$price=$r['price'];
}
$insertbook=$book->insertOne(['useremail'=>$_SESSION["email"],'propid'=>$id,'propertyname'=>$propertyname,'status'=>$status,'price'=>$price]);
}
if($query==null){
	$insert=$collection->insertOne(['email'=>$email,'firstname'=>$firstname,'lastname'=>$lastname,'phone'=>$mobile]);
}
}
// error_reporting(E_ALL & ~E_NOTICE);
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Property Page | Template</title>

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
    <?php include("searchbarr.php");?>
    <!-- Filter Search Section End -->
    <!-- Single Property Section Begin -->
	

    <div class="single-property">
        <div class="container">
            <div class="row spad-p">
              
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
    <!-- Single Property End -->
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
									<?php $account=$collection->find(['email'=>$_SESSION['email']],['limit'=>1]);
									foreach($account as $a)
									{
										$regid=$a['reg_id'];
										$firstname=$a['firstname'];
										$lastname=$a['lastname'];
										$phone=$a['phone'];
										$email=$a['email'];
									
									?>
                                        <p>Registered ID: <span><?php echo $regid;?></span></p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="property-description">
                                    <h4>Bio:</h4>
                                    <p> </p>
                                </div>
                                <div class="property-features">
                                    <h4>Liked property</h4>
                                    <div class="property-table">
									<?php 
									$collection2=$companydb->likepropertycollection;
									$match=$collection2->find(['email'=>$_SESSION['email']]);
									?>
                                        <table>
                                            <tr>
                                                <td> Property ID</td>
                                                <td> Name</td>
                                                <td> Status</td>
												<td> Price</td>
                                            </tr>
											<?php 
											$collection3=$companydb->propertycollection;
											foreach($match as $m){
									$propid=$m['prop_id'];
									
	                                $match2=$collection3->find(['prop_id'=>$propid,'status'=>"liked"]);
	                                foreach ($match2 as $j){ ?>
	                                <tr>
                                                <td><?php $regid=$j['reg_id']; echo $regid; ?></td>
                                                <td><?php $name=$j['propertyname']; echo $name;?></td>
                                                <td><?php $status=$j['status']; echo $status;?></td>
                                                <td><?php $price=$j['price']; echo $price;?></td> 
											</tr>
											<?php } }?>
                                            <tr>
                                        </table>
                                    </div>
                                </div>  
                            </div>
                        </div>
						   <div class="row">
                            <div class="col-lg-12">
                                <div class="property-description">
                                    <h4>Bio:</h4>
                                    <p> </p>
                                </div>
                                <div class="property-features">
                                    <h4>Booked property</h4>
                                    <div class="property-table">
									<?php 
									$collection2=$companydb->like;
									if(isset($_GET['_id'])){
									$like=$collection3->find(['_id'=>$_GET['id']],['limit'=>1]);
									if($like){
										$up=$collection3->find(['_id'=>$_GET['id']],['$set'=>['status'=>"Booked"]]);
									}
									$liked=$collection3->find(['_id'=>$_GET['id']],['limit'=>1]);
									foreach($liked as $prop)
									{
										$liking=array(
										'prop_id'=>$_GET['id'],
										'bookedby'=>$a['firstname'].$a['lastname'],
										'bookedbyemail'=>$a['email'],
										'propertyname'=>$prop['propertyname'],
										'propertytype'=>$prop['propertyname'],
										'lotsize'=>$prop['lotsize'],
										'status'=>$prop['status'],
										'bed'=>$prop['bed'],
										'bath'=>$prop['bath'],
										'location'=>$prop['location'],
										'garage'=>$prop['garage'],
										'ownerfirstname'=>$prop['ownerfirstname'],
										'ownerlastname'=>$prop['ownerlastname'],
										'username'=>$prop['username'],
										'email'=>$prop['email'],
										'propertyfeature'=>$prop['propertyfeature'],
										'description'=>$prop['description'],
										'price'=>$prop['price']
										);							
										$insert=$collection2->insertOne($liking);
									}
									
									$match=$collection2->find(['prop_id'=>$_GET['id']	]);
									
									?>
                                        <table>
                                            <tr>
                                                <td> Property ID</td>
                                                <td> Name</td>
												<td> Property Type</td>
                                                <td> Status</td>
												<td> Price</td>
                                            </tr>
											<tr>
                                                <td>5e23fdefb004a8f0eb8700ae</td>
                                                <td>Shashi</td>
                                                <td>Rent</td>
                                                <td>Booked</td>
                                                <td>24000</td> 
											</tr>
											</table>
											<?php 
											foreach($match as $m){
									$propid=$m['prop_id'];
									//$collection3=$companydb->propertycollection;
	                               // $match2=$collection3->find(['prop_id'=>$propid,'status'=>"Booked"]);
	                              //  foreach ($match2 as $j){ ?>
	                                <tr>
                                                <td><?php $regid=$m['reg_id']; echo $propid; ?></td>
                                                <td><?php $name=$m['propertyname']; echo $name;?></td>
                                                <td><?php $type=$m['propertytype']; echo $type;?></td>
                                                <td><?php $status=$m['status']; echo $status;?></td>
                                                <td><?php $price=$m['price']; echo $price;?></td> 
												<td><a href="insertdetails.php?e=<?php echo $email;?>" class="site-btn list-btn">Logout</a></td>
											</tr>
											
											<?php  }}?>
                                            <tr>
                                        </table>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row pb-30">
                        <div class="col-lg-12">
                            <div class="contact-service">
							<form method="POST" name="edit">
							<?php 	$articles = $collection->find(['email'=>$_SESSION['email']]);
		    		foreach ($articles as $key => $article) {
                              echo  '<div class="col-md-3"><img src="p/'.$article['filename'].'" width="180"></div>';
								 } ?>
                                <p>Listed by</p>
                                <h5><?php echo $firstname.' '.$lastname;?></h5>
								<table>
                                    <tr>
                                        <td>Mobile : <?php echo $phone;?></span></td>   
                                </table>
								<script>
								function profile()
								{
									document.forms['edit'].action="editcus.php";
								}
								</script>
                                <button type="submit" onclick="profile()" class="site-btn list-btn">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
									<?php }?>
    </section>
    <!-- Single Property Deatails Section End -->
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