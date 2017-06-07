<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon.ico">

        <title>Go Local PH</title>

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>assets/css/front-end/bootstrap.min.css" rel="stylesheet">

        <!-- Owl Carousel CSS -->
        <link href="<?php echo base_url(); ?>assets/css/front-end/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/front-end/owl.theme.default.min.css" rel="stylesheet">

        <!-- Icon CSS -->
        <link href="<?php echo base_url(); ?>assets/css/front-end/font-awesome.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>assets/css/front-end/style.css" rel="stylesheet">



        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>


    <body data-spy="scroll" data-target="#navbar-menu">

        <!-- Navbar -->
        <div class="custom-nav navbar navbar-custom sticky navbar-fixed-top" role="navigation" id="sticky-nav">
            <div class="container">

                <!-- Navbar-header -->
                <div class="col-md-6">
                    <div class="navbar-header">

                        <!-- Responsive menu button -->
                        <div class="col-xs-6">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- LOGO -->
                        <div class="col-xs-6 pull-left">
                            <a href="http://172.16.0.87/go-local/" class="logo" id="tour-1">
                                <img src="http://172.16.0.87/go-local/assets/images/golocal-logo.png" />
                            </a>
                        </div>

                    </div>
                </div>
                <!-- end navbar-header -->

                <!-- menu -->
                <div class="col-md-6">
                    <div class="navbar-collapse collapse" id="navbar-menu">

                        <!-- Navbar right -->
                        <ul class="nav navbar-nav navbar-right">
                            <!--<li class="active">
                                <a href="#home" class="nav-link">Home</a>
                            </li>
                            <li>
                                <a href="#features" class="nav-link">Features</a>
                            </li>
                            <li>
                                <a href="#pricing" class="nav-link">Plans</a>
                            </li>
                            <li>
                                <a href="#clients" class="nav-link">Clients</a>
                            </li>
                            <li>
                                <a href="">Login</a>
                            </li>
                            <li>
                                <a href="" class="btn btn-white-bordered navbar-btn">Try for Free</a>
                            </li>-->
                            <li>
                                <i class="fa fa-search icons" aria-hidden="true"></i>
                            </li> 
                            <li>
                                <i class="fa fa-bars icons" aria-hidden="true"></i>
                            </li>
                            
                        </ul>

                    </div>
                </div>
                <!--/Menu -->
            </div>
            <!-- end container -->
        </div>
        <!-- End navbar-custom -->



        <!-- HOME -->
        <section class="home bg-img-1" id="home">
            <div class="bg-overlay"></div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="home-fullscreen">
                            <div class="full-screen">
                                <div id="carousel-captions" data-ride="carousel" class="carousel slide">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-captions" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-captions" data-slide-to="1"></li>
                                        <li data-target="#carousel-captions" data-slide-to="2"></li>
                                    </ol>
                                    <div role="listbox" class="carousel-inner">
                                        <div class="item active">
                                            <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="First slide image">
                                            <div class="carousel-caption">
                                                <h3 class="text-white font-600">First slide label</h3>
                                                <p>
                                                    Nulla vitae elit libero, a pharetra augue mollis interdum.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Second slide image">
                                            <div class="carousel-caption">
                                                <h3 class="text-white font-600">Second slide label</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Third slide image">
                                            <div class="carousel-caption">
                                                <h3 class="text-white font-600">Third slide label</h3>
                                                <p>
                                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#carousel-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
                                    <a href="#carousel-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- END HOME -->


        <!-- Features -->
        <section class="section" id="features">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 class="title">Price Plan</h1>
                    </div>
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-sm-4">
                        <div class="features-box">
                            <h3 class="plan-title">Regular</h3>
                            <h2 class="plan-price">$122</h2>
                            <div class="plan-duration">Per License</div>
                            <ul class="plan-stats list-unstyled">
                                <li>Number of End Products</li>
                                <li>Number of End Products</li>
                                <li>Number of End Products</li>
                            </ul>
                            <div class="text-center">
                                <a href="" class="btn btn-sm btn-custom">Purchase Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="features-box">
                            <h3 class="plan-title">Regular</h3>
                            <h2 class="plan-price">$122</h2>
                            <div class="plan-duration">Per License</div>
                            <ul class="plan-stats list-unstyled">
                                <li>Number of End Products</li>
                                <li>Number of End Products</li>
                                <li>Number of End Products</li>
                            </ul>
                            <div class="text-center">
                                <a href="" class="btn btn-sm btn-custom">Purchase Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="features-box">
                            <h3 class="plan-title">Regular</h3>
                            <h2 class="plan-price">$122</h2>
                            <div class="plan-duration">Per License</div>
                            <ul class="plan-stats list-unstyled">
                                <li>Number of End Products</li>
                                <li>Number of End Products</li>
                                <li>Number of End Products</li>
                            </ul>
                            <div class="text-center">
                                <a href="" class="btn btn-sm btn-custom">Purchase Now</a>
                            </div>
                        </div>
                    </div>

                </div> <!-- end row -->

            </div> <!-- end container -->
        </section>
        <!-- end Features -->



        <!-- Features Alt -->
        <section class="section">
            <div class="container">
                
                <div class="row" id="exploresec">
                    <div class="col-md-12 text-center">
                        <h2>Most Popular Location to Explore in the Philippines</h2>
                        <p>Take a look at these exciting destinations and experience what's happening about.<br />
                        Discover some of the most merchant listings in based on user reviews and ratings.</p>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="box location-box1">
                            <div class="content" id="exploresec">
                                <a href=""><h3>DAVAO</h3></a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="box location-box1" >
                            <div class="content" id="exploresec">
                                <a href=""><h3>MANILA</h3></a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="box location-box1">
                            <div class="content" id="exploresec">
                                <a href=""><h3>BOHOL</h3></a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="box location-box1">
                            <div class="content" id="exploresec">
                                <a href=""><h3>LAGUNA</h3></a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="box location-box1">
                            <div class="content" id="exploresec">
                                <a href=""><h3>BORACAY</h3></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="box location-box1">
                            <div class="content" id="exploresec">
                                <a href=""><H3>CEBU</H3></a>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="box location-box1">
                            <div class="content" id="exploresec">
                                <a href=""><h3>PALAWAN</h3></a>
                            </div>
                        </div> 
                    </div>
                </div><!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end features alt -->


        <!-- Features Alt -->
        <section class="section quick-sec">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 class="title">Quick Search</h1>
                    </div>
                </div> <!-- end row -->
                <br>
                <div class="row quick-icons">

                    <div class="col-sm-3">
                        <div class="col-sm-6 qi-box text-center">
                            <i class="fa fa-bell"></i>
                            <p>Food</p>
                        </div>
                        <div class="col-sm-6 qi-box text-center">
                            <i class="fa fa-shopping-cart"></i>
                            <p>Shop</p>
                        </div>                      
                    </div>


                    <div class="col-sm-3">
                        <div class="col-sm-6 qi-box text-center">
                            <i class="fa fa-briefcase"></i>
                            <p>Services</p>
                        </div>
                        <div class="col-sm-6 qi-box text-center">
                            <i class="fa fa-plane"></i>
                            <p>Travel</p>
                        </div>                      
                    </div>

                    <div class="col-sm-3">
                        <div class="col-sm-6 qi-box text-center">
                            <i class="fa fa-smile-o"></i>
                            <p>Leisure/ ReCreational</p>
                        </div>
                        <div class="col-sm-6 qi-box text-center">
                            <i class="fa fa-medkit"></i>
                            <p>HealthCare</p>
                        </div>                      
                    </div>

                    <div class="col-sm-3">
                        <div class="col-sm-6 qi-box text-center">
                            <i class="fa fa-building-o"></i>
                            <p>Real Estate</p>
                        </div>
                        <div class="col-sm-6 qi-box text-center">
                            <i class="fa fa-users"></i>
                            <p>Beauty & Wellness</p>
                        </div>                      
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end features alt -->


        <!-- Features Alt -->
        <section class="section quick-sec">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 class="title">Featured Merchants</h1>
                    </div>
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-sm-3">
                        <div id="carousel-merchant" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant" data-slide-to="2"></li>
                            </ol>
                            <div role="listbox" class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="First slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Second slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Third slide image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div id="carousel-merchant" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant" data-slide-to="2"></li>
                            </ol>
                            <div role="listbox" class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="First slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Second slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Third slide image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div id="carousel-merchant" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant" data-slide-to="2"></li>
                            </ol>
                            <div role="listbox" class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="First slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Second slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Third slide image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div id="carousel-merchant" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant" data-slide-to="2"></li>
                            </ol>
                            <div role="listbox" class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="First slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Second slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Third slide image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div id="carousel-merchant" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant" data-slide-to="2"></li>
                            </ol>
                            <div role="listbox" class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="First slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Second slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Third slide image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div id="carousel-merchant" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant" data-slide-to="2"></li>
                            </ol>
                            <div role="listbox" class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="First slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Second slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Third slide image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div id="carousel-merchant" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant" data-slide-to="2"></li>
                            </ol>
                            <div role="listbox" class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="First slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Second slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Third slide image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div id="carousel-merchant" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant" data-slide-to="2"></li>
                            </ol>
                            <div role="listbox" class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="First slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Second slide image">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" alt="Third slide image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->

            </div> <!-- end container -->
        </section>
        <!-- end features alt -->


        <!-- Testimonials section -->
        <section class="section bg-img-1">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="owl-carousel text-center">
                            <div class="item">
                                <div class="testimonial-box">
                                    <h4>Excellent support for a tricky issue related to our customization of the template. Author kept us updated as he made progress on the issue and emailed us a patch when he was done.</h4>
                                    <img src="images/user.jpg" class="testi-user img-circle" alt="testimonials-user">
                                    <p>- Ubold User</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-box">
                                    <h4>Flexible, Everything is in, Suuuuuper light, even for the code is much easier to cut and make it a theme for a productive app..</h4>
                                    <img src="images/user2.jpg" class="testi-user img-circle" alt="testimonials-user">
                                    <p>- Ubold User</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-box">
                                    <h4>Not only the code, design and support are awesome, but they also update it constantly the template with new content, new plugins. I will buy surely another coderthemes template!</h4>
                                    <img src="images/user3.jpg" class="testi-user img-circle" alt="testimonials-user">
                                    <p>- Ubold User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Testimonials section -->


        <!-- PRICING -->
        <section class="section" id="pricing">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="title">Pricing</h3>
                        <p class="text-muted sub-title">The clean and well commented code allows easy customization of the theme.It's <br> designed for describing your app, agency or business.</p>
                    </div>
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row">

                            <!--Pricing Column-->
                            <article class="pricing-column col-lg-4 col-md-4">
                                <div class="inner-box">
                                    <div class="plan-header text-center">
                                        <h3 class="plan-title">Ragular</h3>
                                        <h2 class="plan-price">$24</h2>
                                        <div class="plan-duration">Per License</div>
                                    </div>
                                    <ul class="plan-stats list-unstyled">
                                        <li> <i class="pe-7s-server"></i>Number of end products <b>1</b></li>
                                        <li> <i class="pe-7s-graph"></i>Customer support</li>
                                        <li> <i class="pe-7s-mail-open"></i>Free Updates</li>
                                        <li> <i class="pe-7s-tools"></i>24x7 Support</li>
                                    </ul>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-sm btn-custom">Purchase Now</a>
                                    </div>
                                </div>
                            </article>


                            <!--Pricing Column-->
                            <article class="pricing-column col-lg-4 col-md-4">
                                <div class="inner-box active">
                                    <div class="plan-header text-center">
                                        <h3 class="plan-title">Multiple</h3>
                                        <h2 class="plan-price">$120</h2>
                                        <div class="plan-duration">Per License</div>
                                    </div>
                                    <ul class="plan-stats list-unstyled">
                                        <li> <i class="pe-7s-server"></i>Number of end products <b>1</b></li>
                                        <li> <i class="pe-7s-graph"></i>Customer support</li>
                                        <li> <i class="pe-7s-mail-open"></i>Free Updates</li>
                                        <li> <i class="pe-7s-tools"></i>24x7 Support</li>
                                    </ul>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-sm btn-custom">Purchase Now</a>
                                    </div>
                                </div>
                            </article>


                            <!--Pricing Column-->
                            <article class="pricing-column col-lg-4 col-md-4">
                                <div class="inner-box">
                                    <div class="plan-header text-center">
                                        <h3 class="plan-title">Extended</h3>
                                        <h2 class="plan-price">$999</h2>
                                        <div class="plan-duration">Per License</div>
                                    </div>
                                    <ul class="plan-stats list-unstyled">
                                        <li> <i class="pe-7s-server"></i>Number of end products <b>1</b></li>
                                        <li> <i class="pe-7s-graph"></i>Customer support</li>
                                        <li> <i class="pe-7s-mail-open"></i>Free Updates</li>
                                        <li> <i class="pe-7s-tools"></i>24x7 Support</li>
                                    </ul>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-sm btn-custom">Purchase Now</a>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div><!-- end col -->
                </div>
                 <!-- end row -->

            </div> <!-- end container -->
        </section>
        <!-- End Pricing -->


        <!-- Clients -->
        <section class="section p-t-0" id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="title">Trusted by Thousands</h3>
                        <p class="text-muted sub-title">The clean and well commented code allows easy customization of the theme.It's <br/> designed for describing your app, agency or business.</p>
                    </div>
                </div>
                <!-- end row -->

                <div class="row text-center">
                    <div class="col-sm-12">
                        <ul class="list-inline client-list">
                            <li><a href="" title="Microsoft"><img src="images/clients/microsoft.png" alt="clients"></a></li>
                            <li><a href="" title="Google"><img src="images/clients/google.png" alt="clients"></a></li>
                            <li><a href="" title="Instagram"><img src="images/clients/instagram.png" alt="clients"></a></li>
                            <li><a href="" title="Converse"><img src="images/clients/converse.png" alt="clients"></a></li>
                        </ul>
                    </div> <!-- end Col -->

                </div><!-- end row -->

            </div>
        </section>
        <!--End  Clients -->


        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <a class="navbar-brand logo" href="index.html">
                            UB<span class="text-custom">o</span>ld
                        </a>
                    </div>
                    <div class="col-lg-4 col-lg-offset-3 col-md-7">
                        <ul class="nav navbar-nav">
                            <li><a href="#">How it works</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Clients</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>
        <!-- End Footer -->
        

        <!-- Back to top -->    
        <a href="#" class="back-to-top" id="back-to-top"> <i class="fa fa-angle-up"></i> </a>


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url(); ?>/assets/js/front-end/jquery-2.1.4.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/front-end/bootstrap.min.js"></script>

        <!-- Jquery easing -->                                                      
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/front-end/jquery.easing.1.3.min.js"></script>

        <!-- Owl Carousel -->                                                      
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/front-end/owl.carousel.min.js"></script>

        <!--sticky header-->
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/front-end/jquery.sticky.js"></script>

        <!--common script for all pages-->
        <script src="<?php echo base_url(); ?>/assets/js/front-end/jquery.app.js"></script>

        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                autoplay: true,
                autoplayTimeout: 4000,
                responsive:{
                    0:{
                        items:1
                    }
                }
            })
        </script>

    </body>
</html>