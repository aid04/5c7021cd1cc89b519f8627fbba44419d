<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('front-end-includes/header.php');?>
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
                    <div class="col-sm-12">
                       <div id="mycarousel" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#mycarousel" data-slide-to="1"></li>
                            <li data-target="#mycarousel" data-slide-to="2"></li>
                            <li data-target="#mycarousel" data-slide-to="3"></li>
                            <li data-target="#mycarousel" data-slide-to="4"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" data-color="lightblue" alt="First Image">
                                <div class="carousel-caption">
                                    <h3 class="carousel-cap">First Image</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" data-color="firebrick" alt="Second Image">
                                <div class="carousel-caption">
                                    <h3 class="carousel-cap">Second Image</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" data-color="violet" alt="Third Image">
                                <div class="carousel-caption">
                                    <h3 class="carousel-cap">Third Image</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" data-color="lightgreen" alt="Fourth Image">
                                <div class="carousel-caption">
                                    <h3 class="carousel-cap">Fourth Image</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>assets/images/slide-sample.png" data-color="tomato" alt="Fifth Image">
                                <div class="carousel-caption">
                                    <h3 class="carousel-cap">Fifth Image</h3>
                                </div>
                            </div>
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
        <section class="section merchant-location">
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
        <section class="section featured-merchant">
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
                        <div id="carousel-merchant2" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant2" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant2" data-slide-to="2"></li>
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
                        <div id="carousel-merchant3" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant3" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant3" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant3" data-slide-to="2"></li>
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
                        <div id="carousel-merchant4" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant4" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant4" data-slide-to="2"></li>
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

                    <div class="col-sm-12 spacing"></div>

                    <div class="col-sm-3">
                        <div id="carousel-merchant5" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant5" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant5" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant5" data-slide-to="2"></li>
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
                        <div id="carousel-merchant6" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant6" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant6" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant6" data-slide-to="2"></li>
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
                        <div id="carousel-merchant7" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-merchant7" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-merchant7" data-slide-to="1"></li>
                                <li data-target="#carousel-merchant7" data-slide-to="2"></li>
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
        <section class="section">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 class="title">Featured Merchants</h1>
                    </div>
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-sm-4 ">
                        <div class="img-circle text-center">
                            <p>Go Asst</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat odio non nulla tempor, blandit efficitur risus pharetra. Proin eleifend quis leo id malesuada. Vestibulum a luctus velit.</p>
                    </div>

                    <div class="col-sm-4 ">
                        <div class="img-circle text-center">
                            <p>Go Med</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat odio non nulla tempor, blandit efficitur risus pharetra. Proin eleifend quis leo id malesuada. Vestibulum a luctus velit.</p>
                    </div>

                    <div class="col-sm-4 ">
                        <div class="img-circle text-center">
                            <p>Go Shop</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat odio non nulla tempor, blandit efficitur risus pharetra. Proin eleifend quis leo id malesuada. Vestibulum a luctus velit.</p>
                    </div>
                </div>
            </div>
        </section>


        <!--Footer Navbar-->
        <footer class="footer footer-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2">
                        <h3>Quick Links</h3>
                        <ul class="footer-menu">
                            <li>About Us</li>
                            <li>Contact Us</li>
                            <li>FAQ</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-lg-offset-2 col-md-6">
                        <h3>Follow Us</h3>
                        <h5>Stay with us!</h5>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h3>Subscribe to Our Newsletter</h3>
                        <p>Enjoy exclusive updates and previews just for you!</p>
                        <input type="text" id="state-warning" name="state-warning" class="form-control" placeholder="Enter Your Email Address">
                        <br>
                        <div class="text-center">
                            <button type="button" class="btn btn-warning waves-effect waves-light">Subscribe</button>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>
        <!--End of Footer Navbar-->

        <!-- FOOTER -->
        <footer class="footer copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p>Copyright &copy; 2016All Rights Reseved | Terms and Conditions | Sitemap</p>                
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-right">
                            <p>Website Proudly Made By: Innov8tive Design &amp; Development</p>
                        </div>
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
        <script src="<?php echo base_url(); ?>/assets/js/front-end/carousel-plugin.js"></script>
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