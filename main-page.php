<?php
/*
Template Name: Main page
*/
global $webshowcase;
get_header(); ?>

<header class="main-head parallax" style="background-image: url(
<?php if( !empty($webshowcase['banner_image']) ) echo $webshowcase['banner_image']['url'];?>
    )">

    <div class="top-wrapper">
        <h1 id="type-name"></h1>
    </div>

</header>


<?php get_footer(); ?>



