<?php 

session_start();
if (!isset($_SESSION['first_name'])) {
    header('Location: login.php');
}
 ?>
<html>
    <head>
        <title>::My Shop:: </title>
        <link href = "css/jquery.bxslider.css" rel = "stylesheet" type = "text/css">
        <link href = "css/style.css" rel = "stylesheet" type = "text/css">
        <link rel="stylesheet" href="css/media.css">
    </head>
    <body>
    	<!-- ijuhigi -->
        <div id = "wrapper">
            <div id = "header">
                <div id = "subheader">
                    <div class = "container">
                        <p><strong>Hello</strong> <?php echo $_SESSION['first_name']; ?></p>
                        <a href = "#">Help</a><a href = "#">Consumer</a>
                        <a href = "#">Guest</a><a href = "#">Download App</a>
                    </div>
                </div>
                <!--==main header==-->
                <div id = "main-header">
                    <!--logo-->
                    <div id = "logo">
                        <span id = "ist">RE</span><span id = "iist">DEON</span>
                        <img id="cartimg" src="images/cart1.jpg">
                    </div>
                    <!--==search area==-->
                    <div id = "search">
                        <form action = "">
                            <input class = "search-area" type = "text" name = "text" placeholder = "Search here">
                            <input class = "search-btn" type = "submit" name = "submit" value = "SEARCH">
                        </form>
                    </div>
                    <!--==user-menu==-->
                    <div id = "user-menu">
                        <li><a href="#">Cart</a></li>
                        <!-- <li><a href="#"><?php echo $_SESSION['first_name']; ?></a></li> -->
                        <li><a href="logout.php">Logout</a></li>
                    </div>
                </div>
            </div>
            <!--===navigation bar===-->
            <div id = "navigation">
                <a href="#" class="menu-toggler"><i class="fa fa-bars"></i></a>
                <nav id="mainav">
                        <a href="index.php">Home</a>
                        <a href="new_arrivals.php">New arrivals</a>
<!--
                        <a href="#">Deals</a>
                        <a href="#">Electronics</a>
                        <a href="#">Accessroies</a>
-->
                        <a href="product.php">Products</a>
                        <a href="#">Order</a>
                </nav>
            </div>
            <!--====home-slider====-->
            <div id = "gif">
                <li><img src="images/newarr.jpg"></li>
            </div>
            <!--category boxes-->
            <div class="container">
                <div class="prod-container">
                    <!--1st product-->
                    <div class="prod-box1">
                        <img src="images/91-FMQZE6DL._SL1500_.jpg" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>Best Samsung Smartwatches of 2019</p>
                                <p style="color:#fff; font-weight:blod;">price : $100</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--2nd product-->
                    <div class="prod-box1">
                        <img src="images/Casual-Wrist-watches-for-Women-LED-.jpg" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>Casual Wrist watches for Women LED Digital Sport Wristwatch Silicone Watch </p>
                                <p style="color:#fff; font-weight:blod;">price : $260</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--3rd product-->
                    <div class="prod-box1">
                        <img src="images/item_XL_11898051_17614082.jpg" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>G-Tab W700 Smart watch</p>
                                <p style="color:#fff; font-weight:blod;">price : $140</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--4th product-->
                    <div class="prod-box1">
                        <img src="images/rBVaSFsscM2AIk5kAAESA-nm7Qw411.jpg" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>Silicone Touch Screen Digital Watch Mens Sport LED</p>
                                <p style="color:#fff; font-weight:blod;">price : $340</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--5th product-->
                    <div class="prod-box1">
                        <img src="images/New-Fashion.jpg" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>New Fashion Children slippers Captain America slipper</p>
                                <p style="color:#fff; font-weight:blod;">price : $10</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--6th product-->
                    <div class="prod-box1">
                        <img src="images/shoes.png" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>New Black White Leather Loafers Shoe</p>
                                <p style="color:#fff; font-weight:blod;">price : $60</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--7th product-->
                    <div class="prod-box1">
                        <img src="images/Polyester-Sports-Bag-Yellow.jpg" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>Polyester Sports Bag Yellow</p>
                                <p style="color:#fff; font-weight:blod;">price : $55</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--8th product-->
                    <div class="prod-box1">
                        <img src="images/2019 New high heels dress shoes women ankle boot.jpg" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>2019 New high heels dress shoes women ankle boot</p>
                                <p style="color:#fff; font-weight:blod;">price : $28</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--9th product-->
                    <div class="prod-box1">
                        <img src="images/slipons.jpg" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>New slipons Slippers</p>
                                <p style="color:#fff; font-weight:blod;">price : $2.3</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--10th product-->
                    <div class="prod-box1">
                        <img src="images/2019 New peep toe Fashion High Heels.jpg" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>2019 New peep toe Fashion High Heels</p>
                                <p style="color:#fff; font-weight:blod;">price : $23</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--11th product-->
                    <div class="prod-box1">
                        <img src="images/WOMEN-DRESS-BLACK-DRESS.jpg" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>WOMEN-DRESS-BLACK-DRESS</p>
                                <p style="color:#fff; font-weight:blod;">price : $48</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--12th product-->
                    <div class="prod-box1">
                        <img src="images/ticwatchpro.jpg" alt="man-suit">
                        <div class="prod-trans1">
                            <div class="prod-feature1">
                                <p>Tic Watch Pro</p>
                                <p style="color:#fff; font-weight:blod;">price : $350</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div id="heading-block">
                        <h2>Offer</h2>
                    </div>
                    <!--offer-boxes-->
                    <div class="offer">
                        <a href="#"><img src="images/offer-1.jpg"></a>
                    </div>
                    <div class="offer">
                        <a href="#"><img src="images/offer-2.jpg"></a>
                    </div>
                    <div class="offer">
                        <a href="#"><img src="images/offer-3.jpg"></a>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="container">
                    <div class="footer_sub">
                        <h2 class="orstory">Our Story</h2>
                        <P>This is my first e-commerce website design in html and css and also using bx-slider. 
                            This is my first e-commerce website design in html and css and also using bx-slider. 
                            This is my first e-commerce website design in html and css and also using bx-slider. 
                            This is my first e-commerce website design in html and css and also using 
                            <span>
                                <a href="#">Read more..</a></span></P>
                    </div>
                    <div class="footer_sub2">
                            <h2 class="hdd">Imortant Links</h2>
                        <center>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="new_arrivals.php">New arrivals</a></li>
<!--
                                <li><a href="#">Deals</a></li>
                                <li><a href="#">Electronics</a></li>
                                <li><a href="#">Accessroies</a></li>
-->
                                <li><a href="product.php">Products</a></li>
                                <li><a href="#">Order</a></li>
                            </ul>
                        </center>
                    </div> 
                    <div class="footer_sub2">
                            <h2 class="hhd">Social Links</h2>
                        <center>
                            <ul>
                                <li><a href="https://www.facebook.com/Online-Shopping-600738073671438/?modal=admin_todo_tour">Facebook</a></li>
                                <li><a href="#">Google+</a></li>
                                <li><a href="#">Youtube</a></li>
                                <li><a href="#">Twitter</a></li>
<!--
                                <li><a href="#">Linkdin</a></li>
                                <li><a href="#">Blogger</a></li>
                                <li><a href="#">Digg</a></li>
-->
                            </ul>
                        </center>
                    </div>
                    <div class="footer_sub3">
                        <h2 class="hd">Subcribe Us</h2>
                        <center>                            
                            <input type="text" name="subs" placeholder="Write your e-mail" class="subs">
                            <input type="submit" name="submit-btn" value="Subcribe" class="sub-btn">
                        </center>
                            <p class="sub-p">Enter your e-mail id for get nitification by us.</p>
                    </div>
                </div>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>             
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/my.js"></script>
    </body>
</html> 