<?php

/*
Template Name: Contact
*/
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webshowcase
 */
get_header(); ?>

<main id="main">
	<div class="small-visual bg-img no-overlay">
		<img src="<?php echo get_template_directory_uri(); ?>/images/contact-bg.jpg" alt="">
		<div class="container">
			<h2>Акции и прайс</h2>
			<nav aria-label="breadcrumb">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Главная</a></li>
					<li class="breadcrumb-item active" aria-current="page">Прайс</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 ">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum deleniti ipsum maxime voluptates nesciunt corrupti doloribus libero ad, necessitatibus eaque, cum voluptate esse quis eum velit, error tempore perspiciatis vel vitae veniam? Dicta optio quibusdam delectus, vitae in consequatur cupiditate quaerat reiciendis iste eveniet, odio deleniti velit sapiente aspernatur, ad aperiam libero eos provident pariatur mollitia, nostrum aliquid. Consequuntur natus maxime dolorem repudiandae iure soluta error vero quisquam magnam, laudantium, praesentium voluptatibus totam doloribus id quo! Alias quo et, provident culpa qui adipisci. Iste, mollitia dignissimos. Sunt dignissimos ea nobis unde blanditiis tenetur, assumenda, cumque deserunt nam nostrum quidem voluptatem!
				</div>
				<div class="col-md-7">
					<img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-slider">
		<div class="swiper-container bottom-slider-swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="slide-inner bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/bottom-slide-1.png" alt="">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/bottom-slide-2.png" alt="">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner  bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/bottom-slide-3.png" alt="">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner  bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/bottom-slide-4.png" alt="">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner  bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/bottom-slide-5.png" alt="">
					</div>
				</div>
			</div>
			<div class="swiper-button-next swiper-button-white"></div>
			<div class="swiper-button-prev swiper-button-white"></div>
		</div>
	</div>
	<div class="social">
		<div class="container">
			<ul class="social-list">
				<li class="social-list-item">
					<a href="" class="social-list-link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/fb.svg" alt="">
					</a>
				</li>
				<li class="social-list-item">
					<a href="" class="social-list-link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/inst.svg" alt="">
					</a>
				</li>
				<li class="social-list-item">
					<a href="" class="social-list-link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/google.svg" alt="">
					</a>
				</li>
				<li class="social-list-item">
					<a href="" class="social-list-link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/youtube.svg" alt="">
					</a>
				</li>
			</ul>
		</div>
	</div>
</main>

<?php get_footer(); ?>


