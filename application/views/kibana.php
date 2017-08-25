<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SilverOrbit &ndash; ElasticSearch and Kibana</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/assets/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font.css">

    <!-- Image -->
    <style>
        .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("<?php echo base_url();?>/assets/img/bg2.jpg");
        min-height: 100%;
        }
    </style>

    <body>
        <!-- Sidebar -->
        <nav class="w3-sidebar w3-bar-block w3-black w3-card-2 bgimg-1" id="mySidebar">
            <a href="<?php echo site_url();?>/home/blog/">
                <img src="<?php echo base_url();?>/assets/img/SOLogo2.png" style="display:block; margin:auto; padding-top:20px; max-width:100%;">
            </a>    
            <p class="w3-center w3-transparent">DevOps | AWS | BigData</p>
            <a href="<?php echo base_url();?>" class="w3-bar-item w3-button w3-transparent">HOME</a>
            <a href="<?php echo site_url();?>/home/about" class="w3-bar-item w3-button w3-transparent">ABOUT</a>
            <a href="<?php echo site_url();?>/home/contact" class="w3-bar-item w3-button w3-transparent">CONTACT</a>
            <div class="w3-margin-top w3-center">
                <a href="https://www.twitter.com/TeamSilverOrbit" class="w3-hover-opacity"><img src="<?php echo base_url();?>/assets/img/side2.png"></a>
                <a href="https://github.com/silverorbit" class="w3-hover-opacity"><img src="<?php echo base_url();?>/assets/img/side3.png"></a>
                <a href="mailto:support@silverorbit.com" class="w3-hover-opacity"><img src="<?php echo base_url();?>/assets/img/side4.png"></a>
            </div>
        </nav>

        <div style="width: 75%; position: absolute; right: 0px;">
            <!-- ElasticSearch and Kibana -->
            <div class="w3-container" style="padding:20px 50px">
                <header>
                    <h2 style="margin: 0px;"><a href="<?php echo site_url();?>/home/kibana/">ElasticSearch and Kibana</a></h2>
                    <p class="w3-small" style="margin: 0px;">
                        Posted on Tue 27 September 2016 in <a href="<?php echo site_url();?>/home/kibana/">elasticsearch</a>
                    </p>
                </header>
                <div>
                    <p>The following is a running ElasticSearch, Kibana and Topbeat installed using Ansible.</p>
                    <p>Using the following Ansible roles:</p>
                    <ul>
                        <li><a href="https://galaxy.ansible.com/williamyeh/oracle-java/">Java Role</a></li>
                        <li><a href="https://galaxy.ansible.com/CyVerse-Ansible/elasticsearch/">Elasticsearch Role</a></li>
                        <li><a href="https://galaxy.ansible.com/CyVerse-Ansible/beats/">Beats Roles</a> </li>
                    </ul>
                    <p><img alt="Stat Image ELK" src="<?php echo base_url();?>/assets/img/elk_stat.png" class="gallery"/></p>
                    <br>
                    <a class="w3-button w3-dark-grey" href="<?php echo site_url();?>/home/blog/">← Back</a>
                </div>
            </div>

           <!-- Footer -->
            <footer class="w3-center w3-dark-grey w3-padding-16">
                <p class="w3-center">© SilverOrbit 2017</p>
            </footer>
        </div>
    </body>
</html>
