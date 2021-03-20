<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<header>
  <div class="main-nav">
  <!-- <a href="#maincontent" class="skiplink">Go to Main Content</a> -->
    <div class="flex">
      <div class="hamburger-box">
        <button class="menu-button">
          <span class="hamburger"></span>
          <span class="hamburger"></span>
          <span class="hamburger"></span>
          <span class="hidden">Menu</span>
        </button>
        <div class="mainNav">
          <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'container_class' => 'menu'
          )); ?>
        </div>
      </div>
    </div>
  </div>
</header>

<main id="maincontent">
