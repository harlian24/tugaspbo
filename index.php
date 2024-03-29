﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Linuji</title>

    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- ANIMATE STYLE  -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- FLEXSLIDER STYLE  -->
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    
</head>
<body>

 <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">

                    <img src="assets/img/logo.png" />
                </a>

            </div>
            <div class="right-div">
<strong>Support : </strong>  tugaspbo@gmail.com
            </div>
          
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php" class="menu-top-active" >Beranda</a></li>
                           
                            <li><a href="index.php?menu=about">About</a></li>
                             <li><a href="index.php?menu=galeri" >Gallery</a></li>
                             <li><a href="index.php?menu=servis">Services</a></li>
                            <li><a href="index.php?menu=kontak">Contact</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
        <?php 
            if (empty($_GET['menu'])){
                include "home.php";
            }
            elseif($_GET['menu']=='about')
            {
                include "about.php";
            }
            elseif($_GET['menu']=='galeri')
            {
                include "galeri.php";
            }
            elseif($_GET['menu']=='servis')
            {
                include "servis.php";
            }
            elseif($_GET['menu']=='kontak')
            {
                include "kontak.php";
            }

        ?>
     <!--JUST SECTION END-->
     <div class="container " >
         <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="head-line">Our Clients </h1>
                <br />
                </div>
            </div>
             <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <hr />
                 <div class="flexslider carousel">
          <ul class="slides">
            <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
  	    		 <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
            <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
  	    		 <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
              <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
  	    		 <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
              <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
  	    		 <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
              <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
  	    		 <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
               <li>
  	    	    <img src="assets/img/client.jpg" />
  	    		</li>
          </ul>
        </div>
                <hr />
                <br />
                </div>
            </div>
         </div>
     <!--CLIENT SECTION END-->
     <div class="container " >
             <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-12 set-div">
                <div class="just-txt-div text-center">
                    <h3><strong>-- Lorem ipsum dolor sit --</strong> </h3>
                    <p>
                         Lorem Lorem ipsum dolor sit amet <strong> Lorem ipsum dolor sit ametLorem </strong> ipsum dolor sit ametLorem 
                ipsum dolor sit ametLorem ipsum dolor 
                      <br /><br />
                    </p>
                      <a class="btn btn-info btn-lg" href="#">Read More Here</a>
                    &nbsp;&nbsp;
                    <a class="btn btn-success btn-lg" href="#">Download Now </a>
                </div>
               
                </div>
            </div>
         </div>
      <!--SET-DIV SECTION END-->
   
   <div class="footer-sec">
         <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

              
									<h3> <strong>ABOUT COMPANY</strong> </h3>
									<p style="padding-right:50px;" >
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
									</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 social-div">
               

              
										<h3> <strong>SOCIAL PRESENCE</strong> </h3>
                We love to be social,Catch Us On
                <a href="#" ><h4>FACEBOOK </h4></a>
                   <a href="#" ><h4>TWITTER </h4></a>
                 <a href="#" ><h4>LINKEDIN </h4></a>
									
                    
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3> <strong>PHYSICAL LOCATION</strong> </h3>
                Reach Us Below:
                <br />
                <h4>90/567, Raw Street Lane,</h4>
                 <h4>United States of America,</h4>
                 <h4>Pin: 309987-09</h4>
            </div>
        </div>
 <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <hr />
                <div style="text-align:right;padding:5px;">
                    &copy;2014 yourdomain.com | <a href="http://www.binarytheme.com/" style="color:#fff;" target="_blank" >Designed By: Binarytheme.com</a>
                </div>
            </div>
    </div>
    </div>
       </div>
     <!--FOOTER SECTION END-->
      <!-- WE PUT SCRIPTS AT THE END TO LOAD PAGE FASTER-->
     <!--CORE SCRIPTS PLUGIN-->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
     <!--BOOTSTRAP SCRIPTS PLUGIN-->
<script src="assets/js/bootstrap.js"></script>
     <!--WOW SCRIPTS PLUGIN-->
    <script src="assets/js/wow.js"></script>
     <!--FLEXSLIDER SCRIPTS PLUGIN-->
    <script src="assets/js/jquery.flexslider.js"></script>
     <!--CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>

</html>
