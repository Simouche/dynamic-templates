<!DOCTYPE html>
<html lang="{{Config::get('app.locale')}}">
<head>
    <meta charset="utf-8">
    <title>{{$settings->title}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: NewBiz
      Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>

<!--==========================
Header
============================-->
<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
            <a href="#intro" class="scrollto"><img src="{{asset("storage/".$settings->logo)}}" alt="" class="img-fluid"><span><b>{{$settings->company_name}}</b></span></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                @foreach ($menus as $index => $menu)
                    <li @if ($index==0) class="active" @endif><a href="#{{$menu->hreference}}">{{$menu->title}}</a></li>
            @endforeach
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="intro-info col-md-6">
                <h2>{{$menus[0]->description}}</h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide col-md-6" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach(json_decode($carousel->images,true) as $image)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}"
                            class=@if ($loop->index == 0) 'active' @endif></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">

                    @foreach(json_decode($carousel->images,true) as $image)
                        <div class=@if($loop->index == 0) 'carousel-item active' @else 'carousel-item' @endif>
                        <img src="{{asset("storage/".$image)}}" class="img-fluid" alt="">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    {{--        <div class="intro-img">--}}
    {{--            <img src="{{asset("storage/".$menus[0]->background_image)}}" alt="" class="img-fluid">--}}
    {{--        </div>--}}


    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>{{$menus[1]->title}}</h3>
                <p>{{$menus[1]->description}}</p>
            </header>

            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    @foreach ($menus[1]->contents as $content)
                        <div class="icon-box wow fadeInUp">
                            <div class="icon"><img class="icon-img" src="{{asset("storage/".$content->round_image)}}"/>
                            </div>
                            <h4 class="title"><a href="{{$content->link}}">{{$content->title }}</a></h4>
                            <p class="description">{{$content->description}}</p>
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="{{asset("storage/".$menus[1]->background_image)}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>{{$menus[2]->title}}</h3>
                <p>{{$menus[2]->description}}</p>
            </header>

            <div class="row">
                @foreach ($menus[2]->contents as $content)
                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><img class="icon-img" src="{{asset("storage/".$content->round_image)}}"/>
                            </div>
                            <h4 class="title"><a href="{{$content->link}}">{{$content->title}}</a></h4>
                            <p class="description">{{$content->description}}</p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

        <div class="container">

            <div class="section-header">
                <h3>{{$menus[3]->title}}</h3>
                <p>{{$menus[3]->description}}</p>
            </div>

            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
                @foreach ($menus[3]->contents as $content)
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo" style="display: block">
                            <img src="{{asset("storage/".$content->background_image)}}" class="img-fluid" style="height:64px" alt="">
                            <p><b>{{$content->title}}</b></p>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container-fluid">

            <div class="section-header">
                <h3>Contact</h3>
            </div>

            <div class="row wow fadeInUp">

                <div class="col-lg-6">
                    <div class="map mb-4 mb-lg-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12789.516616023466!2d3.177395857362184!3d36.7374692379637!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e5201717985dd%3A0xb33b4086629a36d9!2sCentre%20commercial%20-%20Mohamadia%20mall!5e0!3m2!1sen!2sbg!4v1595071804593!5m2!1sen!2sbg"
                            frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-5 info">
                            <i class="ion-ios-location-outline"></i>
                            <p>{{$settings->address}}</p>
                        </div>
                        <div class="col-md-4 info">
                            <i class="ion-ios-email-outline"></i>
                            <p>{{$settings->emails}}</p>
                        </div>
                        <div class="col-md-3 info">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>{{$settings->phone}}</p>
                        </div>
                    </div>

                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name" data-rule="minlen:4"
                                           data-msg="Please enter at least 4 chars"/>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email" data-rule="email"
                                           data-msg="Please enter a valid email"/>
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject" data-rule="minlen:4"
                                       data-msg="Please enter at least 8 chars of subject"/>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                          data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center">
                                <button type="submit" title="Send Message">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>

    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Safe Soft</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="/lib/jquery/jquery.min.js"></script>
<script src="/lib/jquery/jquery-migrate.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/mobile-nav/mobile-nav.js"></script>
<script src="/lib/wow/wow.min.js"></script>
<script src="/lib/waypoints/waypoints.min.js"></script>
<script src="/lib/counterup/counterup.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/lib/isotope/isotope.pkgd.min.js"></script>
<script src="/lib/lightbox/js/lightbox.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="/js/main.js"></script>

</body>
</html>
