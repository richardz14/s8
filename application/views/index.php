<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SilverOrbit &ndash; Home</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font.css">
    <script src="<?php echo base_url();?>/assets/js/script.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>

    <!-- Full height image header -->
    <style>
        .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("<?php echo base_url();?>/assets/img/back3.jpg");
        min-height: 100%;
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
        <header class="bgimg-1 w3-display-containers" id="home"></header>

        <!-- Products Section -->
        <div class="w3-container" style="padding:50px 16px">
            <h3 class="w3-center">OUR PRODUCTS</h3>
            <p class="w3-center">Our mission is to make use of cloud based and open source technologies<br>
                                            to build products for you, our clients.<br>
                                            We believe that cloud computing and open source technologies<br>
                                            are the present and the future of technology.</p>
            <div class="w3-row-padding" style="margin-top: 64px;">
                <ul id="flexiselDemo1">
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t1.jpg" alt="Rodney" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 1</h3>
                                <p class="w3-opacity">Short Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t2.jpg" alt="JM" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 2</h3>
                                <p class="w3-opacity">Short Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t3.jpg" alt="Javier" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 3</h3>
                                <p class="w3-opacity">Short Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t4.jpg" alt="Leomar" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 4</h3>
                                <p class="w3-opacity">Short Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t5.jpg" alt="Edson" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 5</h3>
                                <p class="w3-opacity">Short Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t6.jpg" alt="Julian" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 6</h3>
                                <p class="w3-opacity">Short Description</p>
                            </div>
                        </div>
                    </div>
                </ul>
                <script type="text/javascript">
                    $(window).load(function() {
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
                    });
                </script>
                <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.flexisel.js"></script>
            </div>
        </div>

        <!-- Services Section -->
        <div class="w3-container w3-light-grey" style="padding:50px 16px">
            <h3 class="w3-center">SOME OF THE SERVICES WE OFFER</h3>
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
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-center w3-dark-grey w3-padding-16">
            <div class="w3-margin-top">
                <a href="https://www.twitter.com/TeamSilverOrbit" class="w3-hover-opacity"><img src="<?php echo base_url();?>/assets/img/foot2.png"></a>
                <a href="https://github.com/silverorbit" class="w3-hover-opacity"><img src="<?php echo base_url();?>/assets/img/foot3.png"></a>
                <a href="https://support@SilverOrbit.com" class="w3-hover-opacity"><img src="<?php echo base_url();?>/assets/img/foot4.png"></a>
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
        </script>
    </body>
</html>
