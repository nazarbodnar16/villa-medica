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
				<div class="col-md-4">
					<div class="contact-info-box">
						<div class="address-holder">
							<div class="ico">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home.svg" alt="">
							</div>
							<div class="text">
								<p><span>м. Киев,</span><span>ул. Героев Сталинграда 2Д,</span><span>ЖК "Парк Стоун", офіс 603, 1 етаж </span><span>(вхід з боку Північного моста)</span></p>
							</div>
						</div>
						<div class="phone-email-holder">
							<a href="tel:380443337825">
								<span class="ico">
									<img src="<?php echo get_template_directory_uri(); ?>/images/phone.svg" alt="">
								</span>
								<span class="text phone">+38 (044) 333-78-25</span>
							</a>
							<a href="mailto:info@villamedica.com.ua" >
								<span class="ico">
									<img src="<?php echo get_template_directory_uri(); ?>/images/mail.svg" alt="">
								</span>
								<span class="text email">info@villamedica.com.ua</span>
							</a>
						</div>
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
				<div class="col-md-7">
					<img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="">
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>


