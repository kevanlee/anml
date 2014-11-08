<!DOCTYPE HTML>
<html lang=en>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php if ( is_single() ) { ?> <?php } ?><?php wp_title(); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, print" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<script src="http://codyhouse.co/demo/back-to-top/js/modernizr.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://codyhouse.co/demo/back-to-top/js/main.js"></script>

<?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
<div id="page-wrap">
<header class="clearfix  has-background center-none  " style="background-image: url(<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>);"><div class="navigation-toggle black  ">
        <span></span>
      </div><h1 class="fancy">
            <a href="/"><?php bloginfo('name'); ?></a>
          </h1></header>

<section class="navigation clearfix header">
      <nav class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </nav>
      <nav class="tumblr-nav">
<?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
      </nav>
    </section>
<div id="container">
