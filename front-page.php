<?php
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
	<div class="visual">
		<div class="swiper-container visual-swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="slide-inner bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/visual-bg.png" alt="Logo">
						<div class="container">
							<div class="cell">
								<div class="visual-text">
									<h1>Медицинский Центр Villa Medica</h1>
									<a href="#" class="visual-btn">
										<svg>
											<rect x="0" y="0" fill="none" width="100%" height="100%"></rect>
										</svg>
										Запись на консультацию
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/visual-bg.png" alt="Logo">
						<div class="container">
							<div class="cell">
								<div class="visual-text">
									<h1>Медицинский Центр Villa Medica</h1>
									<a href="#" class="visual-btn">
										<svg>
											<rect x="0" y="0" fill="none" width="100%" height="100%"></rect>
										</svg>
										Запись на консультацию
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner  bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/visual-bg.png" alt="">
						<div class="container">
							<div class="cell">
								<div class="visual-text">
									<h1>Медицинский Центр Villa Medica</h1>
									<a href="#" class="visual-btn">
										<svg>
											<rect x="0" y="0" fill="none" width="100%" height="100%"></rect>
										</svg>
										Запись на консультацию
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-button-next swiper-button-white"></div>
			<div class="swiper-button-prev swiper-button-white"></div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
	<div class="our-services">
		<div class="container">
			<h2>Наши Услуги</h2>
			<ul class="our-services-list">
				<li class="our-services-list-item">
					<a class="our-services-list-link bg-img" href="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-1.png" alt="">
						<span class="description">
							<span class="off-hover-block">
								<span class="ico">
									<img src="<?php echo get_template_directory_uri(); ?>/images/gynecology.svg" alt="">
								</span>
								<span class="heading">Гинекология</span>
								<span class="text">Наши специалисты подбирают программу индивидуально для каждого клиєнта</span>
							</span>
						</span>
					</a>
				</li>
				<li class="our-services-list-item">
					<a class="our-services-list-link bg-img" href="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-2.png" alt="">
						<span class="description">
							<span class="off-hover-block">
								<span class="ico">
									<img src="<?php echo get_template_directory_uri(); ?>/images/gynecology.svg" alt="">
								</span>
								<span class="heading">Косметология</span>
								<span class="text">Наши специалисты подбирают программу индивидуально для каждого клиєнта</span>
							</span>
						</span>
					</a>
				</li>
				<li class="our-services-list-item">
					<a class="our-services-list-link bg-img" href="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-3.png" alt="">
						<span class="description">
							<span class="off-hover-block">
								<span class="ico">
									<img src="<?php echo get_template_directory_uri(); ?>/images/plastic.svg" alt="">
								</span>
								<span class="heading">Инъекции</span>
								<span class="text">Наши специалисты подбирают программу индивидуально для каждого клиєнта</span>
							</span>
						</span>
					</a>
				</li>
				<li class="our-services-list-item">
					<a class="our-services-list-link bg-img" href="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-4.png" alt="">
						<span class="description">
							<span class="off-hover-block">
								<span class="ico">
									<img src="<?php echo get_template_directory_uri(); ?>/images/hair.svg" alt="">
								</span>
								<span class="heading">Трихология</span>
								<span class="text">Наши специалисты подбирают программу индивидуально для каждого клиєнта</span>
							</span>
						</span>
					</a>
				</li>
				<li class="our-services-list-item">
					<a class="our-services-list-link bg-img" href="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-5.png" alt="">
						<span class="description">
							<span class="off-hover-block">
								<span class="ico">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon_antiage.svg" alt="">
								</span>
								<span class="heading">Аппаратные методики</span>
								<span class="text">Наши специалисты подбирают программу индивидуально для каждого клиєнта</span>
							</span>
						</span>
					</a>
				</li>
				<li class="our-services-list-item">
					<a class="our-services-list-link bg-img" href="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-6.png" alt="">
						<span class="description">
							<span class="off-hover-block">
								<span class="ico">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon_dermatology.svg" alt="">
								</span>
								<span class="heading">Дерматология</span>
								<span class="text">Наши специалисты подбирают программу индивидуально для каждого клиєнта</span>
							</span>
						</span>
					</a>
				</li>
				<li class="our-services-list-item">
					<a class="our-services-list-link bg-img" href="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-7.png" alt="">
						<span class="description">
							<span class="off-hover-block">
								<span class="ico">
									<img src="<?php echo get_template_directory_uri(); ?>/images/anti.svg" alt="">
								</span>
								<span class="heading">Ендокринологія Anti–Age</span>
								<span class="text">Наши специалисты подбирают программу индивидуально для каждого клиєнта</span>
							</span>
						</span>
					</a>
				</li>
				<li class="our-services-list-item">
					<a class="our-services-list-link bg-img" href="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-8.png" alt="">
						<span class="description">
							<span class="off-hover-block">
								<span class="ico">
									<img src="<?php echo get_template_directory_uri(); ?>/images/massage.svg" alt="">
								</span>
								<span class="heading">Массаж</span>
								<span class="text">Наши специалисты подбирают программу индивидуально для каждого клиєнта</span>
							</span>
						</span>
					</a>
				</li>
			</ul>
			<a href="" class="btn-arrow">
				<svg class="hover-line">
					<rect class="hover-rect" x="0" y="0" fill="none" width="100%" height="100%"></rect>
				</svg>
				<span class="text">Все услуги</span>
				<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="arrow" d="M19.3536 4.35355C19.5488 4.15829 19.5488 3.84171 19.3536 3.64644L16.1716 0.464465C15.9763 0.269203 15.6597 0.269203 15.4645 0.464465C15.2692 0.659727 15.2692 0.976309 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53553C15.6597 7.73079 15.9763 7.73079 16.1716 7.53553L19.3536 4.35355ZM4.37114e-08 4.5L19 4.5L19 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z" fill="#716F74"/>
				</svg>
			</a>
		</div>
	</div>
	<div class="our-doctors">
		<div class="container">
			<h2>Наши профессионалы</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="doctor-card">
							<a href="">
								<div class="ava bg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/doctor-1.png" alt="">
								</div>
								<div class="doctor-descr">
									<strong>Олег Дмитриевич Иванов</strong>
									<p>Доктор наук. ведение патологической беременности, задержка роста плода...</p>
									<span class="detail-btn">Детальнее</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="doctor-card">
							<a href="">
								<div class="ava bg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/doctor-2.png" alt="">
								</div>
								<div class="doctor-descr">
									<strong>Ольга Михайловна Кук</strong>
									<p>Доктор наук. ведение патологической беременности, задержка роста плода...</p>
									<span class="detail-btn">Детальнее</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="doctor-card">
							<a href="">
								<div class="ava bg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/doctor-3.png" alt="">
								</div>
								<div class="doctor-descr">
									<strong>Олег Дмитриевич Иванов</strong>
									<p>Доктор наук. ведение патологической беременности, задержка роста плода...</p>
									<span class="detail-btn">Детальнее</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="doctor-card">
							<a href="">
								<div class="ava bg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/doctor-4.png" alt="">
								</div>
								<div class="doctor-descr">
									<strong>Олег Дмитриевич Иванов</strong>
									<p>Доктор наук. ведение патологической беременности, задержка роста плода...</p>
									<span class="detail-btn">Детальнее</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="doctor-card">
							<a href="">
								<div class="ava bg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/doctor-5.png" alt="">
								</div>
								<div class="doctor-descr">
									<strong>Олег Дмитриевич Иванов</strong>
									<p>Доктор наук. ведение патологической беременности, задержка роста плода...</p>
									<span class="detail-btn">Детальнее</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="doctor-card">
							<a href="">
								<div class="ava bg-img">
									<img src="<?php echo get_template_directory_uri(); ?>/images/doctor-6.png" alt="">
								</div>
								<div class="doctor-descr">
									<strong>Олег Дмитриевич Иванов</strong>
									<p>Доктор наук. ведение патологической беременности, задержка роста плода...</p>
									<span class="detail-btn">Детальнее</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="get-in-touch">
		<div class="container">
			<div class="get-in-touch-form">
				<div class="touch-content">
					<h2>Запись на Консультацию</h2>
					<a href="" class="btn-arrow">
						<svg class="hover-line">
							<rect class="hover-rect" x="0" y="0" fill="none" width="100%" height="100%"></rect>
						</svg>
						<span class="text">Заполнить форму</span>
						<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path class="arrow" d="M19.3536 4.35355C19.5488 4.15829 19.5488 3.84171 19.3536 3.64644L16.1716 0.464465C15.9763 0.269203 15.6597 0.269203 15.4645 0.464465C15.2692 0.659727 15.2692 0.976309 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53553C15.6597 7.73079 15.9763 7.73079 16.1716 7.53553L19.3536 4.35355ZM4.37114e-08 4.5L19 4.5L19 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z" fill="#716F74"/>
						</svg>
					</a>
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


