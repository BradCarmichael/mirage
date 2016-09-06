<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <div class="header-wrap">
      <h1>
      <?php the_custom_logo( $blog_id = 0 ) ?>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
    </div>
    
    <div class="nav-wrap">
      <div class="hamburger">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>

      <!-- <ul class="main-nav"> -->
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
      <!-- </ul> -->
    </div>

  </div> <!-- /.container -->
</header><!--/.header-->

