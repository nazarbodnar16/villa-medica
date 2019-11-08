<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webshowcase
 */
global $webshowcase;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Title</title>
    <meta name="description" content="<?php get_bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

</head>

<body <?php body_class( $class ); ?>>
    <header id="header">
     <div class="container flex-center">
        <span class="logo flex-center"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"></a></span>
        <nav class="main-nav flex-center">
          <ul class="main-nav-list">
            <li class="main-nav-item"><a href="#">About us</a></li>
            <!-- <li class="main-nav-item"><a href="">Our Value Proposition</a></li>
            <li class="main-nav-item"><a href="">Quality Control</a></li> -->
            <li class="main-nav-item"><a href="">services</a></li>
           <!--  <li class="main-nav-item"><a href="">WORK TIME</a></li> -->
            <li class="main-nav-item"><a href="">Our Process</a></li>
            <li class="main-nav-item"><a href="">Our Services</a></li>
            <li class="main-nav-item"><a href="">Reviews</a></li>
            <li class="main-nav-item"><a href="">Contact</a></li>
          </ul>
        </nav>
    </div>
    <a href="#" class="open-menu"><span></span>Open Menu</a>
    <span class="fader"></span>
</header>