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
	<div class="contact-wrap">
		<div class="container">
			<div class="contact-form">
				<div class="contact-form-iner">
					<div class="row">
						<div class="col-md-4">
							<div class="input-block">
								<label for="">Имя (Обязательно)</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-block">
								<label for="">Email (Обязательно)</label>
								<input type="email" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-block">
								<select class="selectpicker">
									<option>Гинекология</option>
									<option>Гинекология</option>
									<option>Гинекология</option>
								</select>

							</div>
						</div>
						<div class="col-md-12">
							<div class="input-block">
								<label for="">Коментарий</label>
								<textarea class="form-control"></textarea>
							</div>
							<a href="" class="btn-arrow">
								<svg class="hover-line">
									<rect class="hover-rect" x="0" y="0" fill="none" width="100%" height="100%"></rect>
								</svg>
								<span class="text">Записаться</span>
								<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path class="arrow" d="M19.3536 4.35355C19.5488 4.15829 19.5488 3.84171 19.3536 3.64644L16.1716 0.464465C15.9763 0.269203 15.6597 0.269203 15.4645 0.464465C15.2692 0.659727 15.2692 0.976309 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53553C15.6597 7.73079 15.9763 7.73079 16.1716 7.53553L19.3536 4.35355ZM4.37114e-08 4.5L19 4.5L19 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z" fill="#716F74"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>


