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
<?php
require_once "vendor/autoload.php";
$client     = new MongoDB\Client;
$companydb  = $client->selectDatabase('companydb');
$collection=$companydb->blogcollection;
$result=$collection->find([],['limit'=>2,'sort'=>['_id'=>-1]]);
foreach($result as $r){
?>
                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/footer-blog-1.jpg" alt="">
                            </div>
                            <div class="rt-side">
                                <h6><?php echo $r['title'];?></h6>
                                <div class="blog-time">
                                    <i class="flaticon-clock"></i>
                                    <span><?php echo $r['date'];?></span>
                                </div><br>
                                <a href="blog.php" class="read-more">
                                    <i class="flaticon-right-arrow-1"></i>
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
						<?php }?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Get In Touch</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span>132 Liberty Streetelit, Dadar(east).</span>
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


    <!-- chat boat code -->
    <script type="text/javascript"
    id="botcopy-embedder-d7lcfheammjct"
    class="botcopy-embedder-d7lcfheammjct" 
    data-botId="5db1875b7487773823c82259">
    
    var s = document.createElement('script'); 
    s.type = 'text/javascript'; s.async = true; 
    s.src = 'https://d7lcfheammjct.cloudfront.net/js/injection.js'; 
    document.getElementById('botcopy-embedder-d7lcfheammjct').appendChild(s);
    </script>
</body>

</html>