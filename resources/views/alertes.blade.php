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
        @include('layouts.front.partial.header')
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
            <h3 class="left">Alertes</h3>
        </div>

        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>Vous êtes ici:</li>
                    <li><a href="#">Acceuil</a></li>
                    <li>Alertes</li>
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

                <div  class="slider2 flexslider">
                    <ul class="slides">
                        <li>
                            <div class="row">
                                @foreach($alertes as $key=>$alerte)
                                <div>
                                    <a href="{{ route('alerte', $alerte->slug) }}">
                                        <div class="span3 square-1">
                                            <div class="img-container">
                                                @foreach($alerte->especes as $espece)
                                                <img src="{{ Storage::disk('public')->url('espece/'.$espece->image) }}" alt="">
                                                @endforeach
                                                <div class="img-bg-icon"></div>
                                            </div>
                                            <h4>{{ $alerte->title }}</h4>
                                            <div class="blue-dark">
                                                <i class="icon-user"></i>Publié par {{ $alerte->user->nom }} | <i class="icon-comment-alt"></i>  12
                                            </div>
                                            <p>  {!!  str_limit($alerte->body, '300') !!} <a href="{{ route('alerte', $alerte->slug) }}">...Lire plus</p>
                                        </div>
                                    </a>

                                </div>
                                @endforeach

                            </div>
                        </li>

                    </ul>
                </div>


                <!-- Paging -->
                <div class="row">
                    <div class="span9">
                        <a href="#" class="paging">&#62;</a>
                        <a href="#" class="paging">84</a>
                        <a href="#" class="paging">83</a>
                        <a href="#" class="paging">82</a>
                        <a href="#" class="paging">...</a>
                        <a href="#" class="paging">3</a>
                        <a href="#" class="paging">2</a>
                        <a href="#" class="paging">1</a>
                        <a href="#" class="paging">&#60;</a>
                    </div>
                </div>
                <!-- Paging End -->


                <div class="row space40"></div>

            </div>

            <!-- Side Bar -->
            <div class="span3">

                <h3 class="p-t-0">Recherche</h3>
                <div class="search-box">
                    <a href="#" class="search-icon"><i class="icon-search"></i></a>
                    <input class="search" name="" value="">
                </div>




                <div class="row space50"></div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
<!-- Content End -->

<!-- Footer -->
@include('layouts.front.partial.footer')
<!-- Footer End -->

<!-- JavaScripts -->
<script type="text/javascript" src="{{ asset('assets/front/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/js/functions.js') }}"></script>
<script type="text/javascript" defer src="{{ asset('assets/front/js/jquery.flexslider.js') }}"></script>

</body>
</html>
