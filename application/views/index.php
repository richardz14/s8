<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SilverOrbit &ndash; Home</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/assets/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font.css">
    <script src="<?php echo base_url();?>/assets/js/script.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.flexisel.js"></script>

    <!-- Full height image header -->
    <style>
        .bgimg-1 {
            background-position: center;
            background-size: contain;
            background-image: url("<?php echo base_url();?>/assets/img/back4.jpg");
            max-width: 100%;
        }
    </style>

    <body>
        <!-- Button -->
        <button onclick="topFunction()" id="myBtn" class="button1" title="Go To Top"> ↑ </button>

        <!-- Navbar (sit on top) -->
        <div class="w3-top">
            <div class="w3-bar w3-dark-grey w3-card-2" id="myNavbar">
                <!-- Right-sided navbar links -->
                <div class="w3-right w3-hide-small">
                    <a href="#home" class="w3-button">HOME</a>
                    <a href="<?php echo site_url();?>/home/about" class="w3-button">ABOUT</a>
                    <a href="<?php echo site_url();?>/home/contact" class="w3-button">CONTACT</a>
                    <a href="<?php echo site_url();?>/home/blog/" class="w3-button">BLOG</a>
                </div>
                <!-- Hide right-floated links on small screens and replace them with a menu icon -->
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                    <i class="fa"><img src="<?php echo base_url();?>/assets/img/menu.png"></i>
                </a>
            </div>
        </div>

        <!-- Sidebar on small screens when clicking the menu icon -->
        <nav class="w3-sidebar w3-bar-block w3-dark-grey w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
            <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
            <a href="<?php echo site_url();?>/home/about"  onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
            <a href="<?php echo site_url();?>/home/contact/" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
            <a href="<?php echo site_url();?>/home/blog/" onclick="w3_close()" class="w3-bar-item w3-button">BLOG</a>
        </nav>

        <!-- Header with full-height image -->
        <header class="bgimg-1 w3-display-containers" id="home">
            <img src="<?php echo base_url();?>/assets/img/logo.png" style="display: block; margin: auto; max-width: 40%; padding:70px 0px 40px 0px;">
        </header>

        <!-- Products Section -->
        <div class="w3-container" style="padding:50px 16px">
            <h2 class="w3-center w3-hover-opacity" id="toggle" style="cursor: pointer;">OUR PRODUCTS</h2>
            <div class="w3-row-padding" style="margin-top: 64px;" id="myDiv">
                <!-- <ul id="flexiselDemo1"> -->
                <div class="w3-container">
                    <!--<div class="w3-col l3 m6 w3-margin-bottom">-->
                    <div class="w3-third">
                        <div class="w3-card-2" style="display: block; margin: auto; width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/soon.jpg" style="width:100%;" onclick="onClick(this)">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 1</h3>
                                <p class="w3-opacity">Short Description</p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="w3-col l3 m6 w3-margin-bottom">-->
                    <div class="w3-third">
                        <div class="w3-card-2" style="display: block; margin: auto; width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/soon.jpg" style="width:100%;" onclick="onClick(this)">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 2</h3>
                                <p class="w3-opacity">Short Description</p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="w3-col l3 m6 w3-margin-bottom">-->
                    <div class="w3-third">
                        <div class="w3-card-2" style="display: block; margin: auto; width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/soon.jpg" style="width:100%;" onclick="onClick(this)">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 3</h3>
                                <p class="w3-opacity">Short Description</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </ul> 
                <a class="w3-button w3-dark-grey" style="display: block; margin: auto; width: 140px;" href="<?php echo site_url();?>/home/about/#products">View Products</a>-->
            </div>
        </div>

        <!-- Services Section -->
        <div class="w3-container w3-light-grey" style="padding:50px 16px">
            <h2 class="w3-center">SOME OF THE SERVICES WE OFFER</h2>
            <div class="w3-row-padding w3-center" style="margin-top:32px">
                <div class="w3-third">
                    <i><img src="<?php echo base_url();?>/assets/img/serv1.png"></i>
                    <p class="w3-large">Php</p>
                </div>
                <div class="w3-third">
                    <i><img src="<?php echo base_url();?>/assets/img/serv2.png"></i>
                    <p class="w3-large">MySQL</p>
                </div>
                <div class="w3-third">
                    <i><img src="<?php echo base_url();?>/assets/img/serv3.png"></i>
                    <p class="w3-large">Python</p>
                </div>
                <a class="w3-button w3-dark-grey" style="display: block; margin: auto; width: 140px;" href="<?php echo site_url();?>/home/about/#services">View Services</a>
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-center w3-dark-grey w3-padding-16">
            <div class="w3-margin-top">
                <a href="https://www.twitter.com/TeamSilverOrbit" class="w3-hover-opacity"><img src="<?php echo base_url();?>/assets/img/foot2.png"></a>
                <a href="https://github.com/silverorbit" class="w3-hover-opacity"><img src="<?php echo base_url();?>/assets/img/foot3.png"></a>
                <a href="mailto:support@silverorbit.com" class="w3-hover-opacity"><img src="<?php echo base_url();?>/assets/img/foot4.png"></a>
            </div>
            <p class="w3-center">© SilverOrbit 2017</p>
        </footer>
        
        <script>
            // Toggle between showing and hiding the sidebar when clicking the menu icon
            var mySidebar = document.getElementById("mySidebar");

            function w3_open() {
                if (mySidebar.style.display === 'block') {
                    mySidebar.style.display = 'none';
                } else {
                    mySidebar.style.display = 'block';
                }
            }

            // Close the sidebar with the close button
            function w3_close() {
                mySidebar.style.display = "none";
            }

            // Products Animation
            /*$(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 3,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });
            });*/

            // Show/Hide Products
            $(document).ready(function(){
                $("#myDiv").hide();
                $("#toggle").click(function(){
                    $("#myDiv").toggle(1000);
                });
            });
        </script>
    </body>
</html>
