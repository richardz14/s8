<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SilverOrbit Home</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Article-List.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Team-Grid.css">

        <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/silverorbit.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div>
        <nav class="navbar navbar-default navigation-clean-button">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><i><img src="<?php echo base_url();?>/assets/img/so_logo.png"></i>SilverOrbit</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="active" role="presentation"><a href="#">HOME</a></li>
                        <li role="presentation"><a href="#about_info">ABOUT</a></li>
                        <li role="presentation"><a href="#service_info">SERVICE</a></li>
                        <li role="presentation"><a href="#contact_info">CONTACT</a></li>
                        <li role="presentation"><a href="#">BLOG</a></li>
                        <!--contact_info
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="#">First Item</a></li>
                                <li role="presentation"><a href="#">Second Item</a></li>
                                <li role="presentation"><a href="#">Third Item</a></li>
                            </ul>
                        </li>
                        -->
                    </ul>
                    <!--
                    <p class="navbar-text navbar-right actions"><a class="navbar-link login" href="#">Log In</a> <a class="btn btn-default action-button" role="button" href="#">Sign Up</a></p>
                    -->
                </div>
            </div>
        </nav>
    </div>

	<div class="container container-image" align="center" >
        	  <img class="img-responsive" width="580" height="380" src="<?php echo base_url();?>/assets/img/so_logo.png" />
       </div>


    <div class="article-list">
        <div class="container">

            <div id="about_info" class="intro">
                <h2 class="text-center">ABOUT</h2>
                <p class="text-center">We are a startup company located in the Philippines.<br>We worked and adhere with DevOps Tools like Hashicorp's Terraform, Vagrant, Packer, Jenkins Travis and Ansible. We deploy applications using Continuous Integration and Delivery together with cloud platforms like Amazon Web Services, LXD, Openstack, Docker, Kubernetes.</p>
            </div>
            <div id="service_info" class="row articles">
            <h2 class="text-center">SERVICES</h2>
                <p class="text-center">We are a startup company located in the Philippines.<br>We worked and adhere with DevOps Tools like Hashicorp's Terraform, Vagrant, Packer, Jenkins Travis and Ansible. We deploy applications using Continuous Integration and Delivery together with cloud platforms like Amazon Web Services, LXD, Openstack, Docker, Kubernetes.</p>

                <div class="col-md-4 col-sm-6 item">
                    <a href="#"><img class="img-responsive" src="<?php echo base_url();?>/assets/img/php.png"></a>
                    <h3 class="name">SERVICES</h3>
                    <p class="description">We believe that cloud computing and open source technologies are the present and the future of technology.    In our day-to-day activities we adhere to best industry practices and enjoy it.</p><a href="#" class="action"><i class="glyphicon glyphicon-circle-arrow-right"></i></a></div>
                <div
                class="col-md-4 col-sm-6 item">
                    <a href="#"><img class="img-responsive" src="<?php echo base_url();?>/assets/img/mysql2.png"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="glyphicon glyphicon-circle-arrow-right"></i></a></div>
            <div
            class="col-md-4 col-sm-6 item">
                <a href="#"><img class="img-responsive" src="<?php echo base_url();?>/assets/img/pythonlogo.jpg"></a>
                <h3 class="name">Article Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="#" class="action"><i class="glyphicon glyphicon-circle-arrow-right"></i></a></div>
    		</div>

            <div id="contact_info" class="intro">
                <h2 class="text-center">CONTACTS</h2>
                <p class="text-center">We are a startup company located in the Philippines.<br>We worked and adhere with DevOps Tools like Hashicorp's Terraform, Vagrant, Packer, Jenkins Travis and Ansible. We deploy applications using Continuous Integration and Delivery together with cloud platforms like Amazon Web Services, LXD, Openstack, Docker, Kubernetes.</p>
            </div>
    </div>
    </div>


    <!-- footer team info -->
    <div class="team-grid">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet.&nbsp; </p>
            </div>
            <div class="row people">
                <div class="col-md-3 col-sm-4 item">
                    <div class="box" style="background-image:url(assets/img/1.jpg)">
                        <div class="cover">
                            <h3 class="name">Ben Johnson</h3>
                            <p class="title">Musician</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 item">
                    <div class="box" style="background-image:url(assets/img/2.jpg)">
                        <div class="cover">
                            <h3 class="name">Emily Clark</h3>
                            <p class="title">Artist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 item">
                    <div class="box" style="background-image:url(assets/img/3.jpg)">
                        <div class="cover">
                            <h3 class="name">Carl Kent</h3>
                            <p class="title">Stylist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 item">
                    <div class="box" style="background-image:url(assets/img/4.jpg)">
                        <div class="cover">
                            <h3 class="name">Felicia Adams</h3>
                            <p class="title">Model </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-sm-4 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2016</p>
            </div>
        </footer>
    </div>


</body>

</html>