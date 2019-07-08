<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<head>
    <!-- Basic Meta Tags -->
    <meta charset="utf-8">
    <title>ZOE</title>
    <meta name="description" content="ucorpora demo - Free Business Corporate HTML Template">
    <meta name="keywords" content="ucorpora, ucorpora demo, free, template, corporate, clean, modern, bootstrap, creative, design">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <![endif]-->

    <!-- Favicon -->
    <link href="{{ asset('assets/front/img/favicon.ico') }}" rel="icon" type="image/png">

    <!-- Styles -->
    <link href="{{ asset('assets/front/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/bootstrap-override.css') }}" rel="stylesheet">

    <!-- Font Avesome Styles -->
    <link href="{{ asset('assets/front/css/font-awesome/font-awesome.css') }}" rel="stylesheet">
    <!--[if IE 7]>
    <link href="{{ asset('assets/front/css/font-awesome/font-awesome-ie7.min.css') }}" rel="stylesheet">
    <![endif]-->

    <!-- FlexSlider Style -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/flexslider.css') }}" type="text/css" media="screen">

    <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<!-- Header -->
<header id="header">
    <div class="container">
        <div class="row t-container">

            <!-- Logo -->
            <div class="span3">
                <div class="logo">
                    <a href="index.htm"><img src="{{ asset('assets/front/img/logo-header.png') }}" alt=""></a>
                </div>
            </div>

            <div class="span9">
                <div class="row space60"></div>
                <nav id="nav" role="navigation">
                    <a href="#nav" title="Show navigation">Show navigation</a>
                    <a href="#" title="Hide navigation">Hide navigation</a>
                    <ul class="clearfix">
                        <li class="active"><a href="index.htm" title="">Acceuil</a></li>
                        <li><a href="about-us.htm" title="">Espèces</a></li>
                        <li><a href="gallery.htm" title="">Contact</a></li>
                        <li><a href="services.htm" title="">  ll  </a></li>

                        <li><a href="services.htm" title="">Connexion</a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="row space40"></div>

    </div>
</header>
<!-- Header End -->
<!-- Content -->
<!-- Titlebar
================================================== -->
<section id="titlebar">
    <!-- Container -->
    <div class="container">

        <div class="eight columns">
            <h3 class="left">Espèces</h3>
        </div>

        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>Vous êtes ici:</li>
                    <li><a href="#">Acceuil</a></li>
                    <li>Espèces</li>
                </ul>
            </nav>
        </div>

    </div>
    <!-- Container / End -->
</section>

<!-- Content -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h3>&nbsp;</h3>
            </div>

            <div class="span9">

                <!-- Blog Item -->

                    <div class="row">
                        <div class="span1">

                            <div class="blog-icon">
                                <button>Lancer une alerte</button>
                            </div>

                        </div>
                        <div class="span8">
                            <a href="{{ route('espece', $espece->slug) }}"><img src="{{ Storage::disk('public')->url('espece/'.$espece->image) }}" alt=""></a>

                            <div class="row">
                                <div class="span8 post-d-info">
                                    <a href="blog-detail.htm"><h3>{{ $espece->name }}</h3></a>
                                    <div class="blue-dark">
                                        <i class="icon-user"></i> By {{ $espece->user->nom }} <i class="icon-tag"></i> Photography | Portrait <i class="icon-comment-alt"></i> With 12 Comments
                                    </div>
                                    <p>
                                        {!! $espece->description !!}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Blog Item End -->

                    <div class="row space40"></div>




                <div class="row space40"></div>

            </div>

            <!-- Side Bar -->
            <div class="span3">


                <h3>Taximonie</h3>
                <a href="#"><div class="tag">WordPress</div></a>
                <a href="#"><div class="tag">Webdesign</div></a>
                <a href="#"><div class="tag">Post-processing</div></a>
                <a href="#"><div class="tag">Tourism</div></a>
                <a href="#"><div class="tag">Rendering</div></a>
                <a href="#"><div class="tag">Photography</div></a>

                <h3>Latest Tweets</h3>
                <i class="icon-twitter"></i> Saying "Wow, You're cool." when you see someone doing something stupid. <a href="#" rel="external">http://t.co/YywnqBb8</a><br>
                6 minutes ago
                <br><br>
                <i class="icon-twitter"></i> Are you getting ready to work on a new project, take off on a sales trip.
                <a href="#" rel="external">http://pic.witt.com.co/Uyoyyk#sp</a><br>
                33 minutes ago

                <h3>Photos From Flickr</h3>
                <div class="flickr-widget">
                    <div class="photo-stream">
                        <img src="img/stream/01.jpg" alt="">
                    </div>
                    <div class="photo-stream">
                        <img src="img/stream/02.jpg" alt="">
                    </div>
                    <div class="photo-stream">
                        <img src="img/stream/03.jpg" alt="">
                    </div>
                    <div class="photo-stream">
                        <img src="img/stream/04.jpg" alt="">
                    </div>
                    <div class="photo-stream">
                        <img src="img/stream/05.jpg" alt="">
                    </div>
                    <div class="photo-stream">
                        <img src="img/stream/06.jpg" alt="">
                    </div>
                </div>


                <div class="row space50"></div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
<!-- Content End -->

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="span5">
                <h3>Contact Form</h3>
                <div>
                    <form class="form-main" name="ajax-form" id="ajax-form" action="#" method="post">
                        <div id="ajaxsuccess">E-mail was successfully sent.</div>
                        <div class="error" id="err-name">Please enter name</div>
                        <input name="name" id="name" type="text" value="Name" onfocus="if(this.value == 'Name') this.value='';" onblur="if(this.value == '') this.value='Name';">

                        <div class="error" id="err-email">Please enter e-mail</div>
                        <div class="error" id="err-emailvld">E-mail is not a valid format</div>
                        <input  name="email" id="email" type="text" value="E-mail" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';">

                        <div class="error" id="err-message">Please enter message</div>
                        <textarea  name="message" id="message" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Message';">Message</textarea><br>
                        <div>
                            <div class="error" id="err-form">There was a problem validating the form please check!</div>
                            <div class="error" id="err-timedout">The connection to the server timed out!</div>
                            <div class="error" id="err-state"></div>
                        </div>
                        <button id="send" class="btn f-right">Send Message <i class="icon-ok"></i></button>
                    </form>
                </div>
            </div>
            <div class="span3 offset3">
                <h3>Address</h3>
                81 Sunnyvale Street<br>
                Los Angeles, CA 90185<br>
                United States<br>
                <br>
                <i class="icon-phone"></i>+01 880 555 999<br>
                <i class="icon-envelope"></i><a href="mailto:support@example.com">support@example.com</a><br>
                <i class="icon-home"></i><a href="#">www.example.com</a>

                <div class="row space40"></div>

                <a href="#" class="social-network sn2 behance"></a>
                <a href="#" class="social-network sn2 facebook"></a>
                <a href="#" class="social-network sn2 pinterest"></a>
                <a href="#" class="social-network sn2 flickr"></a>
                <a href="#" class="social-network sn2 dribbble"></a>
                <a href="#" class="social-network sn2 lastfm"></a>
                <a href="#" class="social-network sn2 forrst"></a>
                <a href="#" class="social-network sn2 xing"></a>
            </div>
        </div>

        <div class="row space50"></div>
        <div class="row">
            <div class="span6">
                <div class="logo-footer">
                    Design by <a href="https://www.freshdesignweb.com">freshDesignweb</a>
                </div>
            </div>
            <div class="span6 right">
                &copy; 2020. All rights reserved.
            </div>
        </div>

    </div>
</footer>
<!-- Footer End -->

<!-- JavaScripts -->
<script type="text/javascript" src="{{ asset('assets/front/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/js/functions.js') }}"></script>
<script type="text/javascript" defer src="{{ asset('assets/front/js/jquery.flexslider.js') }}"></script>

</body>
</html>
