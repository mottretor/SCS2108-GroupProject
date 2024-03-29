<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Samikta Construction </title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="<?php echo base_url(); ?>assets/vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
	<section class="top_header_area">
	    <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>041 2224847</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>samikta9949@gmail.com</a></li>
                <?php if($this->session->userdata('userType') == 'admin'){ ?>
                        <li> <a href="<?php echo base_url('index.php/Login/logout') ?>"><i class="fa fa-sign-out"></i>Log Out</a></li>
                        <li><a href="#"><i class="fa fa-user-o"></i><?php echo $this->session->userdata('userName'); ?></a></li>
                 <?php   }elseif($this->session->userdata('userType') == 'customer'){ ?>
                        <li> <a href="<?php echo base_url('index.php/Login/logout') ?>"><i class="fa fa-sign-out"></i>Log Out</a></li>
                        <li><a href="#"><i class="fa fa-user-o"></i><?php echo $this->session->userdata('userName'); ?></a></li>
                 <?php  }else{  ?>
                        <li><a href="<?php echo base_url('index.php/Home/login') ?>"><i class="fa fa-sign-in"></i>Login</a></li>
                         <li><a href="<?php echo base_url('index.php/Home/register') ?>"><i class="fa fa-user-o"></i>Register</a></li>
                  <?php }  ?>
               
                

            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="https://www.facebook.com/300831170250525"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
	    </div>
	</section>
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="margin-top:-30px;" href="<?php echo base_url();?>index.php/Home/index"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" ></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url();?>index.php/Home/index" >Home</a>

                        </li>
                        <li class="dropdown submenu">
                            <a href="<?php echo base_url();?>index.php/Home/about" >About Us</a>

                        </li>
                        <li >
                            <a href="<?php echo base_url();?>index.php/Home/services" >Services</a>

                        </li>
                        <li >
                            <a href="<?php echo base_url();?>index.php/Home/projects" >Projects</a>

                        </li>
                        <li><a href="<?php echo base_url();?>index.php/Home/contact">Contact</a></li>
                        <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->

    <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
            <div data-thumb="<?php echo base_url(); ?>assets/images/slider-1.jpg" data-src="<?php echo base_url(); ?>assets/images/slider-1.jpg">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">Welcome!</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">Samikta Construction</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="<?php echo base_url();?>index.php/Home/contact">Contact</a>
                   </div>
                </div>
            </div>
            <div data-thumb="<?php echo base_url(); ?>assets/images/slider-2.jpg" data-src="<?php echo base_url(); ?>assets/images/slider-2.jpg">
                <div class="camera_caption">
                  <div class="container">
                       <h5 class=" wow fadeInUp animated">Welcome!</h5>
                       <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">Samikta Construction</h3>
                       <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                       <a class=" wow fadeInUp animated" data-wow-delay="1s" href="<?php echo base_url();?>index.php/Home/contact">Contact</a>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider area -->

    <!-- Professional Builde -->
    <section class="professional_builder row">
        <div class="container">
           <div class="row builder_all">
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4>Professional Builde</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <h4>We Deliver Quality</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h4>Always On Time</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <h4>We Are Pasionate</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                </div>
           </div>
        </div>
    </section>
    <!-- End Professional Builde -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>ABOUT US</h2>
                <h4>“Emerge as the Leading Construction Company in Sri Lanka And Gradual Growth into the International Market”</h4>
            </div>
            <div class="row about_row">
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2>WHO WE ARE</h2>
                    </div>
                    <p>Twenty years ago, a company was formed to support the country’s development programmes while providing employment opportunities to many talented youths. It is none other than Samikta Construction (Pvt) Ltd. Initially the company undertook small-scale contracts, starting at the base. By ICTAD grading the company was at M7 or C8. Today Samikta Construction (Pvt) Ltd is one of the foremost construction companies in the country holding Grade C1.
Grade C1 signifies the financial and technical stability of the company to undertake large-scale contracts of huge value and complexity. </p>
<p>Subsequently, obtaining ISO certification from 2008 has brought Samikta Construction (Pvt) Ltd to international standards. This required the company to enhance its staff as well as supportive services. The company also encompasses modern technologies and techniques to provide total customer satisfaction and on time delivery of Projects.  With this as the motto, the company exerted much to win many awards from prestigious institutions for outstanding performances and quality construction.</p>
                    <a href="<?php echo base_url();?>index.php/Home/contact" class="button_all">Contact Now</a>
                </div>
                <div class="col-md-5 col-sm-6 about_client">
                    <img src="<?php echo base_url(); ?>assets/images/about_client.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

    <!-- What ew offer Area -->
    <section class="what_we_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>WHAT WE OFFER</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row construction_iner">
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="<?php echo base_url(); ?>assets/images/cns-1.jpg" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">BUILDING CONSTRUCTION</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="<?php echo base_url(); ?>assets/images/cns-2.jpg" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        <a href="#">PROJECT PLANNING</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="<?php echo base_url(); ?>assets/images/cns-3.jpg" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-gavel" aria-hidden="true"></i>
                        <a href="#">HOUSE RENOVATION</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What ew offer Area -->

    <!-- Our Features Area -->
    <section class="our_feature_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Features</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="feature_row row">
                <div class="col-md-6 feature_img">
                    <img src="<?php echo base_url(); ?>assets/images/feature-man.jpg" alt="">
                </div>
                <div class="col-md-6 feature_content">
                    <div class="subtittle">
                        <h2>WHY CHOOSE US</h2>
                        <h5>There are many variations of passages of Lorem Ipsum available.</h5>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">30+ YEARS OF EXPERIENCE</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">QUALIFIED EXPERTS</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">Best Customer Services</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Features Area -->

    <!-- Our Services Area -->
    <section class="our_services_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Services</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="portfolio_inner_area">
                <div class="portfolio_filter">
                    <ul>
                        <li data-filter="*" class="active"><a href=""> All</a></li>
                        <li data-filter=".photography"><a href="">ARCHITECTURE</a></li>
                        <li data-filter=".branding"><a href="">Building</a></li>
                        <li data-filter=".webdesign"><a href="">CONSTRUCTION</a></li>
                        <li data-filter=".adversting"><a href="">DESIGN</a></li>
                        <li data-filter=".painting"><a href="">Painting</a></li>
                    </ul>
                </div>
                <div class="portfolio_item">
                   <div class="grid-sizer"></div>
                    <div class="single_facilities col-xs-4 p0 painting photography adversting">
                       <div class="single_facilities_inner">
                          	<img src="<?php echo base_url(); ?>assets/images/gallery/sv-1.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 webdesign">
                       <div class="single_facilities_inner">
                          	<img src="<?php echo base_url(); ?>assets/images/gallery/sv-2.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 painting p0 photography branding">
                       <div class="single_facilities_inner">
                          	<img src="<?php echo base_url(); ?>assets/images/gallery/sv-3.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 adversting webdesign adversting">
                       <div class="single_facilities_inner">
                          	<img src="<?php echo base_url(); ?>assets/images/gallery/sv-4.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 painting adversting branding">
                       <div class="single_facilities_inner">
                          	<img src="<?php echo base_url(); ?>assets/images/gallery/sv-5.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 webdesign photography magazine adversting">
                       <div class="single_facilities_inner">
                          	<img src="<?php echo base_url(); ?>assets/images/gallery/sv-6.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Services Area -->

    <!-- Our Team Area -->
    <section class="our_team_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Team</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row team_row">
                <div class="col-md-3 col-sm-6 wow fadeInUp">
                   <div class="team_membar">
                        <img src="<?php echo base_url(); ?>assets/images/team/tm-1.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Prodip Ghosh</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                   <div class="team_membar">
                        <img src="<?php echo base_url(); ?>assets/images/team/tm-2.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Emran Khan</a>
                            <h6>Web-Developer</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                   <div class="team_membar">
                        <img src="<?php echo base_url(); ?>assets/images/team/tm-3.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Prodip Ghosh</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                   <div class="team_membar">
                        <img src="<?php echo base_url(); ?>assets/images/team/tm-4.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Jakaria Khan</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Area -->

    <!-- Our Achievments Area -->
    <section class="our_achievments_area" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Achievments</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="achievments_row row">
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-connectdevelop" aria-hidden="true"></i>
                    <span class="counter">800</span>
                    <h6>PROJECT COMPLETED</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="counter">230</span>
                    <h6>HOUSE RENOVATIONS</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-child" aria-hidden="true"></i>
                    <span class="counter">1390</span>
                    <h6>WORKERS EMPLOYED</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <span class="counter">125</span>
                    <h6>AWARDS WON</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Achievments Area -->



    <!-- Our Featured Works Area -->
    <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>Our Featured Works</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class="featured_gallery">
          <?php
          $num=0;
          $query = $this->db->get('project');
          foreach ($query->result() as $row) {
            $id=$row->projid;

          ?>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="<?php echo base_url(); ?>uploads/<?php echo $row->image ?>" alt="" style="width:366px;height:244px;">
                <div class="gallery_hover">
                    <h4><?php echo $row->projtitle; ?></h4>
                    <a href="<?php echo base_url('index.php/Home/proj_view/'.$id) ?>">VIEW PROJECT</a>
                </div>
            </div>
          <?php
          $num+=1;
          if($num==8){
            break;
          }
         }


          ?>
        </div>
    </section>
    <!-- End Our Featured Works Area -->

    <!-- Our Latest Blog Area -->
    <section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Latest Blog</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row latest_blog">
                <div class="col-md-4 col-sm-6 blog_content">
                    <img src="<?php echo base_url(); ?>assets/images/blog/lb-1.jpg" alt="">
                    <a href="#" class="blog_heading">Our Latest Project</a>
                    <h4><small>by  </small><a href="#">Emran Khan</a><span>/</span><small>ON </small> October 15, 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
                </div>
                <div class="col-md-4 col-sm-6 blog_content">
                    <img src="<?php echo base_url(); ?>assets/images/blog/lb-2.jpg" alt="">
                    <a href="#" class="blog_heading">Our Latest Project</a>
                    <h4><small>by  </small><a href="#">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
                </div>
                <div class="col-md-4 col-sm-6 blog_content">
                    <img src="<?php echo base_url(); ?>assets/images/blog/lb-3.jpg" alt="">
                    <a href="#" class="blog_heading">Our Latest Project</a>
                    <h4><small>by  </small><a href="#">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Latest Blog Area -->

    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Partners</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="partners">
                <div class="item"><img src="<?php echo base_url(); ?>assets/images/client_logo/client_logo-1.png" alt=""></div>
                <div class="item"><img src="<?php echo base_url(); ?>assets/images/client_logo/client_logo-2.png" alt=""></div>
                <div class="item"><img src="<?php echo base_url(); ?>assets/images/client_logo/client_logo-3.png" alt=""></div>
                <div class="item"><img src="<?php echo base_url(); ?>assets/images/client_logo/client_logo-4.png" alt=""></div>
                <div class="item"><img src="<?php echo base_url(); ?>assets/images/client_logo/client_logo-5.png" alt=""></div>
            </div>
        </div>
        <div class="book_now_aera">
            <div class="container">
                <div class="row book_now">
                    <div class="col-md-10 booking_text">
                        <h4>Booking now if you need build your dream home.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-2 p0 book_bottun">
                        <a href="#" class="button_all">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>ABOUT OUR COMPANY</h2>
                    <img src="<?php echo base_url(); ?>assets/images/footer-logo.png" alt="">
                    <p>Emerge as the leading construction company in Sri Lanka and gradual growth into the international market!</p>
                    <ul class="socail_icon">
                        <li><a href="https://www.facebook.com/300831170250525"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Quick links</h2>
                    <ul class="quick_link">
                        <li><a href="<?php echo base_url();?>index.php/Home/"><i class="fa fa-chevron-right"></i>Home</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Home/about"><i class="fa fa-chevron-right"></i>About Us </a></li>
                        <li><a href="<?php echo base_url();?>index.php/Home/services"><i class="fa fa-chevron-right"></i>Services</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Home/projects"><i class="fa fa-chevron-right"></i>Projects</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Home/contact"><i class="fa fa-chevron-right"></i>Contact Us</a></li>
                    </ul>
                </div>
                <?php $query = $this->db->query("SELECT * FROM `project` ORDER BY `date` DESC"); ?>

                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Latest Projects</h2>
                    <?php
                      $num=0;
                      foreach ($query->result() as $row) {
                      $id=$row->projid; ?>
                      <h4 style="color: white;"><?php echo $row->projtitle ?></h4>
                      <a href="<?php echo base_url('index.php/Home/proj_view/'.$id) ?>" class="twitter">@<?php echo substr($row->projdes, 0, 60); ?></a>
                  <?php
                      $num+=1;
                      if($num==3){
                        break;
                      }
                }

                  ?>
                </div>


                
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>CONTACT US</h2>
                    <address>
                        <p>Have questions, comments or just want to say hello:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>samikta9949@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>047 2224847</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>071 8337406</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>071 4396045</a></li>

                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>407/8, Kumarathunga Mawatha, Matara </span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2017 All rights reserved. Designed by <a href="http://devlanka.com/">Pasindu</a>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="<?php echo base_url(); ?>assets/vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="<?php echo base_url(); ?>assets/vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="<?php echo base_url(); ?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="<?php echo base_url(); ?>assets/vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="<?php echo base_url(); ?>assets/vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="<?php echo base_url(); ?>assets/vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
</body>
</html>
