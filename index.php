<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Andika&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Narrow&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spline+Sans+Mono&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <!-- NAV BAR  -->
    <nav class="navbar navbar-expand-md nav-home">
        <div class="container">
            <!-- LOGO OF WEB SITE -->
            <img class="home-logo" src="assets/img/logo-web-png.png" width="222" height="67">
            <!-- LINKS BLOC -->
            <div class="nav-container-list" style="margin-right: -49%;" >
                <!-- list of links -->
                
                <ul class="navbar-nav" >
                <?php  
                if(isset($_SESSION["pseudo"])) {
                    if($_SESSION["role"] === "seeker"){
                        echo ' <li class="nav-item"><a class="nav-link " href="find job.php" >Find Job</a></li>';
                    }
                }else {
                    echo ' <li class="nav-item"><a class="nav-link " href="./login join by your role.php" >Find Job</a></li>';
                }
                      ?>    
                   
                </ul>
                <!-- DROPDOWN LOGIN INFOS -->
                
                <div class="buttons d-flex justify-content-between container-btns"  >
                <?php

                    if(isset($_SESSION["pseudo"])) {
                        echo "</div>";
                        echo'<div class="dropdown">';
                        echo  '<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" >';
                         echo '     <img class="img-profile" src="assets/img/icons8-utilisateur-64.png" width="37" height="35"> My account</button>'; 
                          echo'     <ul class="dropdown-menu dropdown-menu-dark">';
                          echo'         <li><a class="dropdown-item active" href="#">'.$_SESSION["pseudo"].'</a></li>';
                          if(isset($_SESSION["pseudo"])) {
                            if($_SESSION["role"] === "seeker"){
                                echo' <li><a class="dropdown-item" href="dashDem.php">Dash </a></li>';
                            }else {
                                echo'<li><a class="dropdown-item" href="DashOffer.php">Dash </a></li>';
                            }
                          }
                          echo'        <li> <hr class="dropdown-divider"></li>';
                          echo'         <li><a class="dropdown-item" href="includes/logout.inc.php">Log out</a></li></ul>';
                          echo" </div>"; 
                     echo"  </div>";
                    }else {
                      echo'  <button class="btn btn-primary login-btn " type="button" ><a href="./login.php">Login</a></button>';
                      echo'  <button class="btn btn-secondary register-btn" type="button" ><a href="./login join by your role.php">Register</a></button>';
                    }
                ?>
            </div>
        </div>
    </nav>

    <!-- TITLE PAGE HOME -->
    <h1>Get The <span>Right Job</span></h1>
    <h1 class="h1_2">You Deserve</h1>
    <p class="info-text">180k jobs listed here ! Your dream job is waiting</p>

    <!-- SEARCH BAR -->
    <div class="container-search-bar">
        <div class="d-flex search-barre">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="key-search" placeholder="Job title or keyword">
            <hr>
            <i class="icon-location-pin"></i>
            <input type="text" class="form-control place" placeholder="New York, USA">
            <button class="btn btn-primary btn-search" type="button">search</button>
        </div>
    </div>

    <!-- SOLUTIONS BLOC  -->
    <div class="solutions-bloc">
        <!-- ROW ONE  -->
        <div class="row">
            <div class="col">
                <p class="title-solution-bloc">One Platform <span class="title-solution-bloc-span">Many Solutions</span></p>
            </div>
        </div>

        <!-- ROW TWO  -->
        <div class="row-solution">
            <div class="container-four-solutions d-flex justify-content-evenly">
                <div class=" bloc-single-solution d-flex">
                    <img width="31" height="28" src="assets/img/campagne.png">
                    <div>
                        <p class="solution-title">Marketing &amp; Communication</p>
                        <p class="solution-avaibilty">58 Jobs available</p>
                    </div>
                </div>
                <div class="bloc-single-solution d-flex">
                    <img width="31" height="28" src="assets/img/outil-plume%20(1).png">
                    <div>
                        <p class="solution-title">Design Development</p>
                        <p class="solution-avaibilty">120 Jobs available</p>
                    </div>
                </div>
                <div class="bloc-single-solution d-flex ">
                    <img width="31" height="28" src="assets/img/research.png" >
                    <div>
                        <p class="solution-title">Human Research &amp; Development</p>
                        <p class="solution-avaibilty">199 Jobs available  </p>
                    </div>
                </div>
                <div class="bloc-single-solution d-flex">
                    <img width="31" height="28" src="assets/img/hand.png" >
                    <div>
                        <p class="solution-title">Finance    Mangement</p>
                        <p class="solution-avaibilty">237 Jobs available  </p>
                    </div>
                </div>
            </div>
            <!-- SECOND ROW -->
            <div class="container-four-solutions d-flex justify-content-evenly">
                <div class=" bloc-single-solution d-flex">
                    <img width="31" height="28" src="assets/img/policeman.png">
                    <div>
                        <p class="solution-title">Armforce Guide &amp; Security </p>
                        <p class="solution-avaibilty">120 Jobs available </p>
                    </div>
                </div>
                <div class="bloc-single-solution d-flex ">
                    <img width="28" height="28" src="assets/img/business-idea.png" >
                    <div>
                        <p class="solution-title">Business &amp; Consulting</p>
                        <p class="solution-avaibilty">47 Jobs available  </p>
                    </div>
                </div>
                <div class=" bloc-single-solution d-flex ">
                    <img width="28" height="28" src="assets/img/conversation.png" >
                    <div>
                        <p class="solution-title">Customer Support Care</p>
                        <p class="solution-avaibilty">20 Jobs available  </p>
                    </div>
                </div>
                <div class="bloc-single-solution d-flex ">
                    <img width="31" height="28" src="assets/img/planning.png" >
                    <div>
                        <p class="solution-title">Project Management</p>
                        <p class="solution-avaibilty">87 Jobs available  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- statics block -->
    <div class="statics-bloc">
        <p class="title-statics">People Productivity Performance</p>
        <div class="container-statics">
            <div class="statics-single">
                <p class="static-single-title">JOBS</p>
                <p class="static-single-number">+ 273K</p>
            </div>
            <div class="statics-single" >
                <p class="static-single-title" >STARTUPS</p>
                <p class="static-single-number">+ 23K</p>
            </div>
            <div class="statics-single" >
                <p class="static-single-title">TALENT</p>
                <p class="static-single-number">+ 834K</p>
            </div>
        </div>
    </div>
    

    <p class="text-center company-partener">Company Partner</p>
    <div href="#" style="height: 173px;">
        <div class="d-flex justify-content-around align-items-xxl-center" style="height: 40px;">
            <img src="assets/img/instacart.png"/>
            <img src="assets/img/kickstarter.png"/>
            <img src="assets/img/lyft.png" />
            <img src="assets/img/shopify.png" />
            <img src="assets/img/pinterest.png" />
            <img src="assets/img/twitter.png" />
        </div> 
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="content">
            <div class="top">
                <div class="logo-details">
                    <i class="fab fa-slack"></i>
                    <span class="logo_name">Search Job</span>
                </div>
                <div class="media-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
        </div>
        <div class="link-boxes">
            <ul class="box">
                <li class="link_name">Company</li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Get started</a></li>
            </ul>
            <ul class="box">
                <li class="link_name">Services</li>
                <li><a href="#">App design</a></li>
                <li><a href="#">Web design</a></li>
                <li><a href="#">Logo design</a></li>
                <li><a href="#">Banner design</a></li>
            </ul>
            <ul class="box">
                <li class="link_name">Account</li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">My account</a></li>
                <li><a href="#">Prefrences</a></li>
                <li><a href="#">Purchase</a></li>
            </ul>
            <ul class="box">
                <li class="link_name">Courses</li>
                <li><a href="#">HTML & CSS</a></li>
                <li><a href="#">JavaScript</a></li>
                <li><a href="#">Photography</a></li>
                <li><a href="#">Photoshop</a></li>
            </ul>
            <ul class="box input-box">
                <li class="link_name">Subscribe</li>
                <li><input type="text" placeholder="Enter your email"></li>
                <li><input type="button" value="Subscribe"></li>
            </ul>
            </div>
        </div>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">Copyright &#169; 2023 <a href="#">Search Job.</a>All rights reserved</span>
                <span class="policy_terms">
                    <a href="#">Privacy policy</a>
                    <a href="#">Terms & condition</a>
                </span>
            </div>
        </div>
    </footer>
    
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>