<!DOCTYPE html>
<html>
<head>
    <title>
        <?php wp_title(''); ?> <?php bloginfo('name'); ?>
    </title>
  <link href="<?php bloginfo('template_url'); ?>/stylesheets/style.css" rel="stylesheet">  
<!--  external stylesheets-->
<link href="<?php bloginfo('template_url'); ?>/css/royalslider.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php bloginfo('template_url'); ?>/css/rs-default.css" rel="stylesheet" type="text/css" media="screen" />
<!--scripts-->
  <script  src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.0.min.js"></script>
  <!--isotope-->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/isotope.config.js"></script>
  <!--slider-->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.royalslider.min.js"></script>
  <!--custom scripts-->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
  <?php wp_head(); ?>
</head>
<body>
    <div class="top-color">
    </div>
    <div class="inner">
        <header>
                <a href="<?php echo get_option('home'); ?>">
                <div class="logo">
                </div>
                </a>
            <div class="main-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) );   ?>
            </div>
        </header>
    </div>