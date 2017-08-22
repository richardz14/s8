<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SilverOrbit &ndash; About</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font.css">
    <script src="<?php echo base_url();?>/assets/js/script.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>

    <body>
        <!-- Button (to top) -->
        <button onclick="topFunction()" id="myBtn" class="button1" title="Go To Top"> ↑ </button>

        <!-- Navbar (sit on top) -->
        <div class="w3-top">
            <div class="w3-bar w3-dark-grey w3-card-2" id="myNavbar">
                <!-- Right-sided navbar links -->
                <div class="w3-right w3-hide-small">
                    <a href="<?php echo base_url();?>"class="w3-button">HOME</a>
                    <a href="<?php echo site_url();?>/home/about"  class="w3-button">ABOUT</a>
                    <a href="<?php echo site_url();?>/home/contact" class="w3-button">CONTACT</a>
                    <a href="<?php echo site_url();?>/home/blog/" class="w3-button">BLOG</a>
                </div>
                <!-- Hide right-floated links on small screens and replace them with a menu icon -->
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                    <i class="fa"><img src="<?php echo base_url();?>/assets/img/menu.png"></i>
                </a>
            </div>
        </div>

        <!-- Sidebar (on small screens when clicking the menu icon) -->
        <nav class="w3-sidebar w3-bar-block w3-dark-grey w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
            <a href="<?php echo base_url();?>" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
            <a href="<?php echo site_url();?>/home/about"  onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
            <a href="<?php echo site_url();?>/home/contact/" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
            <a href="<?php echo site_url();?>/home/blog/" onclick="w3_close()" class="w3-bar-item w3-button">BLOG</a>
        </nav>

        <!-- About Us & Products Section -->
        <div class="w3-container" style="padding:80px 16px">
            <h3 class="w3-center" style="margin-top:32px">ABOUT US</h3>
            <p class="w3-center">Silver Orbit is a software development company that caters to companies of any industry and size,<br>
                                            particularly with regards to working on open source projects, cloud computing,<br>
                                            business intelligence services, and custom software development.</p>
            <h3 class="w3-center" style="margin-top:64px">OUR PRODUCTS</h3>
            <div class="w3-row-padding" style="margin-top: 64px;">
                <ul id="flexiselDemo1">
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t1.jpg" alt="Rodney" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 1</h3>
                                <p class="w3-opacity">Product Details</p>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t2.jpg" alt="JM" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 2</h3>
                                <p class="w3-opacity">Product Details</p>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t3.jpg" alt="Javier" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 3</h3>
                                <p class="w3-opacity">Product Details</p>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t4.jpg" alt="Leomar" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 4</h3>
                                <p class="w3-opacity">Product Details</p>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t5.jpg" alt="Edson" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 5</h3>
                                <p class="w3-opacity">Product Details</p>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <div class="w3-card-2" style="width: 80%;">
                            <img src="<?php echo base_url();?>/assets/img/t6.jpg" alt="Julian" style="width:100%">
                            <div class="w3-container w3-light-grey">
                                <h3>Product 6</h3>
                                <p class="w3-opacity">Product Details</p>
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

        <!-- Company Section -->
        <div class="w3-container w3-light-grey" style="padding:50px 16px;">
            <h3 class="w3-center">OUR COMPANY</h3>
            <div class="w3-center" style="max-width: 60%; margin: auto;">
                <div>
                    <button class="w3-bar-item w3-button tablink w3-dark-grey" onclick="openTab(event,'story')">Our Story</button>
                    <button class="w3-bar-item w3-button tablink" onclick="openTab(event,'expertise')">Our Expertise</button>
                </div>
                <div id="story" class="w3-border tab" style="height: 350px; overflow-y: auto;">
                    <h5 class="w3-center">OUR COMPANY'S STORY</h5>
                    <p class="w3-center">Our team consists of professionals who have extensive knowledge<br>
                                                    and experience in the software development industry.<br>
                                                    We have collective skill sets in marketing, IT management, system administration,<br>
                                                    cloud computing, ERP, database management, business intelligence, and big data.</p>
                    <p class="w3-center">Although we love to teach, our passion for working on software development projects<br>
                                                    led us to forming a company that specializes in these types of endeavors.<br>
                                                    The members of our team have been providing software development services<br>
                                                    for various companies in the last 10 years.</p>
                </div>
                <div id="expertise" class="w3-border tab" style="height: 350px; overflow-y: auto; display:none">
                    <h5 class="w3-center">OUR AREAS OF EXPERTISE</h5>
                    <p class="w3-center">Although we cater to companies and businesses in all industries,<br>
                                            our main focus is on financial and business intelligence systems.</p>
                    <p class="w3-center">We also provide business intelligence services, such as report generation<br>
                                            and graph creation, for companies that already have an ERP system in place<br>
                                            but do not have an integrated business intelligence system.</p>
                    <p class="w3-center">We provide a cost-effective solution to your business intelligence needs,<br>
                                            enabling you to obtain comprehensive insights on your business and your customers,<br>
                                            empowering you to make the right decisions and enabling you<br>
                                            to quickly adapt to environment changes.</p>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="w3-container" style="padding:50px 16px">
            <h3 class="w3-center">SERVICES WE OFFER</h3>
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
            <div class="w3-row-padding w3-center" style="margin-top:32px">
                <div class="w3-third">
                    <i><img src="<?php echo base_url();?>/assets/img/serv4.png"></i>
                    <p class="w3-large">Amazon Web Services</p>
                </div>
                <div class="w3-third">
                    <i><img src="<?php echo base_url();?>/assets/img/serv5.png"></i>
                    <p class="w3-large">Microsoft Azure</p>
                </div>
                <div class="w3-third">
                    <i><img src="<?php echo base_url();?>/assets/img/serv6.png"></i>
                    <p class="w3-large">Google Cloud</p>
                </div>
            </div>
        </div>

        <!-- Skills Section
        <div class="w3-container w3-padding-64" style="padding:80px 16px">
            <div class="w3-row-padding">
                <div class="w3-col m6">
                    <h3>Our Expertise.</h3>
                    <p>Our mission is to make use of open source and cloud based technologies to build
                        products for our clients. In our day-to-day activities we adhere to the best industry
                        practices and enjoy it.</p>
                    <p>Our mission is to make use of open source and cloud based technologies to build
                        products for our clients. In our day-to-day activities we adhere to the best industry
                        practices and enjoy it.</p>
                </div>
                <div class="w3-col m6">
                    <p class="w3-wide"><i class="w3-margin-right"><img src="<?php echo base_url();?>/assets/img/php1.png"></i>PHP</p>
                    <div class="w3-grey">
                        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
                    </div>
                    <p class="w3-wide"><i class="w3-margin-right"><img src="<?php echo base_url();?>/assets/img/html.png"></i>HTML</p>
                    <div class="w3-grey">
                        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
                    </div>
                    <p class="w3-wide"><i class="w3-margin-right"><img src="<?php echo base_url();?>/assets/img/css.png"></i>CSS</p>
                    <div class="w3-grey">
                        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
                    </div>
                    <p class="w3-wide"><i class="w3-margin-right"><img src="<?php echo base_url();?>/assets/img/python1.png"></i>Python</p>
                    <div class="w3-grey">
                        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
                    </div>
                    <p class="w3-wide"><i class="w3-margin-right"><img src="<?php echo base_url();?>/assets/img/mysql1.png"></i>MySQL</p>
                    <div class="w3-grey">
                        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
                    </div>
                </div>
            </div>
        </div> -->

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

            // Responsive tabs
            function openTab(evt, tabName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("tab");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
                }
                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " w3-dark-grey";
            }
        </script>

    </body>
</html>
