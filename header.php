<?php
/**
 * The Header for our theme*
 * @package WordPress
 * @subpackage freewebsolution
 * @since freeweb 5.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

 
<title><?php wp_title(); ?></title>
<meta name="author" content="Freewebsolution.it">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Robots" content="All" />
<meta name="Owner" content="FREEWEBSOLUTION.it" /> 

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="copyright" content="Freewebsolution, inc. Copyright (c) 2010-2017" />

  <!-- Modernizr -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
  <!-- respond.js per IE8 -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
<link href="https://plus.google.com/109320036616082507061" rel="author">

    <!--google analitycs-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32385563-1', 'auto');
  ga('send', 'pageview');

</script>

<!--end google analitycs-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.5&appId=1026309287435428";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!--cookie-->

<?php wp_head() ?>
</head>

   <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
		<div id="top" style="height:1px;"></div>
		<div class="topbar animated fadeInLeftBig"></div>
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo1.png" alt="Freewebsolution"/>
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active">
                                <a href="#hero-area"class="animated smooth-scroll" data-section="#hero-area">Home</a>
                            </li>
                            <li><a href="#about" class="animated smooth-scroll" data-section="#about">About</a></li>
                            <li><a href="#servizi"class="animated smooth-scroll" data-section="#servizi">Service</a></li>
                            <li><a href="#blog" class="animated smooth-scroll" data-section="#blog">Blog</a></li>      
                            <li><a href="#contatti"class="animated smooth-scroll" data-section="#contatti">Contact</a></li>
							<li><a href="#" data-toggle="modal" data-target="#search"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
			<div class="text-center carets"><i class="fa fa-caret-down"></i></div>
        </header>