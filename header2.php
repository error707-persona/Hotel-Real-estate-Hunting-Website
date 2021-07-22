<?php 
//$_SESSION['islogin']=0;
error_reporting(0);
?>
<header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <ul class="main-menu">
                         <li><a href="index.php">Home</a></li>
                        <li><a href="search.php">Search Results</a></li>
                        <li><a href="about.php">About</a></li>
                     <!--   <li><a href="single-property.php">Single Property</a></li>-->
                        <li><a href="Register.php">Register</a></li>
						<?php if($_SESSION['islogin'] == 0) {?>
                         <li><a href="Login.php">Login</a></li>
						<?php } else { ?>
						<li><a href="logout.php">Logout</a></li>
						<?php } ?>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
						 <li class="top-social">
                            <a href="insertdetails.php?e=<?php echo $_SESSION['email'];?>"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            
							<?php if($_SESSION['islogin'] == 1 && $_SESSION['type']=="vendor") {?>
							<a href="insertdetails.php?e=<?php echo $_SESSION['email'];?>" class="btn btn-info btn-lg">
                            <i class="glyphicon glyphicon-user"></i></a> 
							<?php } elseif($_SESSION['islogin'] == 1 && $_SESSION['type']=="customer"){?>
								<a href="cusprofile.php?e=<?php echo $_SESSION['email'];?>" class="btn btn-info btn-lg">
                            <i class="glyphicon glyphicon-user"></i></a> <?php
							} 
							else {
                                     echo '<a href="#"><i class="fa fa-behance"></i></a>';
								}?>
                        </li>
                    </ul>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>