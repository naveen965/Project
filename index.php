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
                        <form action = "" method="GET" id="searchFrom">
                            <input class = "search-area" type = "text" name = "text" placeholder = "Search here" required="">
                            <input class = "search-btn" type = "submit" name = "submit" value = "SEARCH">
                        </form>
                        <?php
                            $con = mysqli_connect('localhost','root','','user');
                            mysqli_query($con,"select * from products where ProductName like '%$_GET[text]%'");
                           
                           
                            /*if(isset($_POST['submit'])){
                                $q=mysqli_query($db, "SELECT * FROM products where ProductName like '%$_POST[text]%' ");
                                if(mysqli_num_rows($q)==0){
                                    echo "Sorry! No Product found. Try searching again.";
                                }
                            }*/
                        ?>
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
                        <a href="#">Home</a>
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
            <div id = "slider">
                <ul class="bxslider">
                    <li><img src="images/img1.jpg"></li>
                    <li><img src="images/img2.jpg"></li>
                    <li><img src="images/img3.jpg"></li>
                    <li><img src="images/img4.jpg"></li>
                </ul>
            </div>
            <!--category boxes-->
            <div class="container">
                <div id="heading-block">
                    <h2>Category</h2>
                </div>
                <!--1st catbox-->
                <a href="#">
                    <div class="catbox">
                        <img src="images/cato1.jpg" alt="Men-fation">
                        <span>Ladies Fashion</span>
                    </div>
                </a>
                <!--2nd catbox-->
                <a href="#">
                    <div class="catbox">
                        <img src="images/cato2.jpg" alt="Men-fation">
                        <span>Men Fashion</span>
                    </div>
                </a>
                <!--3rd catbox-->
                <a href="#">
                    <div class="catbox">
                        <img src="images/cato3.jpg" alt="Men-fation">
                        <span>Child Fashion</span>
                    </div>
                </a>
                <!--4th catbox-->
                <!-- <a href="#">
                    <div class="catbox">
                        <img src="images/cato4.jpg" alt="Men-fation">
                        <span>Earing</span>
                    </div>
                </a>
                5th catbox
                <a href="#">
                    <div class="catbox">
                        <img src="images/cato5.jpg" alt="Men-fashion">
                        <span>Sandal</span>
                    </div>
                </a>
                6th catbox
                <a href="#">
                        <div class="catbox">
                            <img src="images/cato6.jpg" alt="Men-fashion">
                            <span>Child Fashion</span>
                        </div>
                </a> -->
                <!--HEADING OF CATEGORY-->
                <div id="heading-block">
                    <h2>Products</h2>
                </div>
                <div class="prod-container">
                    <!--1st product-->
                    <div class="prod-box">
                        <img src="images/pro1.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>T Shirts</p>
                                <p style="color:#fff; font-weight:blod;">price : $100</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--2nd product-->
                    <div class="prod-box">
                        <img src="images/pro2.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>Denims</p>
                                <p style="color:#fff; font-weight:blod;">price : $260</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--3rd product-->
                    <div class="prod-box">
                        <img src="images/pro3.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>Shoes</p>
                                <p style="color:#fff; font-weight:blod;">price : $400</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--4th product-->
                    <div class="prod-box">
                        <img src="images/pro4.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>Slippers</p>
                                <p style="color:#fff; font-weight:blod;">price : $40</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--5th product-->
                    <div class="prod-box">
                        <img src="images/pro5.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>Bags</p>
                                <p style="color:#fff; font-weight:blod;">price : $210</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--6th product-->
                    <div class="prod-box">
                        <img src="images/pro6.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>Hand Bags</p>
                                <p style="color:#fff; font-weight:blod;">price : $97</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--7th product-->
                    <div class="prod-box">
                        <img src="images/pro7.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>Hats</p>
                                <p style="color:#fff; font-weight:blod;">price : $55</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--8th product-->
                    <div class="prod-box">
                        <img src="images/pro8.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>Caps</p>
                                <p style="color:#fff; font-weight:blod;">price : $28</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--9th product-->
                    <div class="prod-box">
                        <img src="images/pro9.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>Watches</p>
                                <p style="color:#fff; font-weight:blod;">price : $1000</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--10th product-->
                    <div class="prod-box">
                        <img src="images/pro10.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>Gowns</p>
                                <p style="color:#fff; font-weight:blod;">price : $237</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--11th product-->
                    <div class="prod-box">
                        <img src="images/pro11.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>Blouse</p>
                                <p style="color:#fff; font-weight:blod;">price : $132</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <!--12th product-->
                    <div class="prod-box">
                        <img src="images/pro12.jpg" alt="man-suit">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p>Jackets</p>
                                <p style="color:#fff; font-weight:blod;">price : $150</p>
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
                                <li><a href="new_arrivals.php">Home</a></li>
                                <li><a href="#">New arrivals</a></li>
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