<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SilverOrbit &ndash; Contact</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/assets/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font.css">

    <style>
        .map {
            width: 100%;
            height: 820px;
            border: 0;
        }
        @media only screen and (max-width: 600px) {
            .map {
                width: 100%;
                height: 300px;
            }
        }
    </style>

    <body>

        <!-- Navbar (sit on top) -->
        <div class="w3-top">
            <div class="w3-bar w3-dark-grey w3-card-2" id="myNavbar">
                <!-- Right-sided navbar links -->
                <div class="w3-right w3-hide-small">
                    <a href="<?php echo base_url();?>" class="w3-button">HOME</a>
                    <a href="<?php echo site_url();?>/home/about"  class="w3-button">ABOUT</a>
                    <a href="<?php echo site_url();?>/home/contact/" class="w3-button">CONTACT</a>
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

        <!-- Contact Section -->
        <div class="w3-container" style="padding:80px 16px">
            <!--<h2 class="w3-center" style="margin-top:32px">CONTACT US</h2>
            <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>-->
            <div class="w3-row-padding" style="margin-top:32px">
                <div class="w3-half">
                    <p>S4 TBIC Bacolod First Cyber Center, P.Hernaez St., Bacolod City, Negros Occidental, Philippines, 6100</p>
                    <p><i class="w3-margin-right"><img src="<?php echo base_url();?>/assets/img/con2.png"></i> (034)445-3913</p>
                    <p><i class="w3-margin-right"><img src="<?php echo base_url();?>/assets/img/con3.png"></i> support@silverorbit.com</p>
                    <p><i class="w3-margin-right"><img src="<?php echo base_url();?>/assets/img/con4.png"></i> twitter.com/TeamSilverOrbit</p>
                    <p><i class="w3-margin-right"><img src="<?php echo base_url();?>/assets/img/con5.png"></i> github.com/silverorbit</p>
                    <br>
                    <!-- Add Google Maps -->
                    <div id="googleMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1648.5508672636442!2d122.94697157945163!3d10.662010469241437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aed1ca7857baad%3A0xb6c37dac71499761!2sNegros+First+Cybercentre!5e0!3m2!1sen!2sph!4v1502867796252"
                            class="map" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!--<form  method="post" action="<?php echo site_url();?>/home/contact_form">
                        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name" pattern="[a-zA-Z]+[ a-zA-Z]*"></p>
                        <p><input class="w3-input w3-border" type="email" placeholder="Email" required name="Email"></p>
                        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
                        <p><textarea class="w3-input w3-border" type="text" placeholder="Message" required name="Message" style="height: 200px;"></textarea></p>
                        <p><button class="w3-button w3-dark-grey" type="submit"> SEND MESSAGE</button></p>
                    </form>-->
                </div>
                <div class="w3-half">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfvxxbNc4-uLKfv2yoJOH54BYJn_U000BZWydzGkrUudUY_cA/viewform?embedded=true" 
                    width="100%" height="1100px" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                </div>
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
        </script>
    </body>
</html>
