<?php

/*
Template Name: single doctors
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
	<div class="small-visual bg-img">
		<img src="<?php echo get_template_directory_uri(); ?>/images/doctors-smal-bg.png" alt="">
		<div class="container">
			<h2>Наши профессионалы</h2>
			<nav aria-label="breadcrumb">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Главная</a></li>
					<li class="breadcrumb-item"><a href="#">Команда</a></li>
					<li class="breadcrumb-item active" aria-current="page">Ольга Михайловна Кук</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="single-doctor-holder">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="single-doctor">
						<div class="img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/doctor-2.png" alt="">
						</div>
						<div class="single-doctor-name">Ольга Михайловна Кук</div>
						<div class="single-doctor-info">
							<p>Доктор наук. ведение патологической беременности, задержка роста плода...</p>
						</div>
					</div>
					<div class="specialization">
						<h3>Специализации</h3>
						<ul class="specialization-list">
							<li class="specialization-item"><a href="">Гинекология</a></li>
							<li class="specialization-item"><a href="">Естетическая гинекология</a></li>
							<li class="specialization-item"><a href="">Гинекология</a></li>
							<li class="specialization-item"><a href="">Естетическая гинекология</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<div class="single-doctor-description">
						<ul class="nav doctor-nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#info">Информация</a>
							</li>
							<li>
								<a data-toggle="tab" href="#sertification">сертификаты</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="info">
								<div class="single-detail-box">
									<h3>Обо мне</h3>
									<p>Сфера профессиональных интересов: ведение патологической беременности, задержка роста плода, резус-конфликт, ведение монохориальных двоен, внутриутробные инфекции, ведение плодов и новорожденных с пороками развития. патологией околоплодных вод.</p>
									<p>Консультант международных организаций: Фонда народонаселения ООН (UNFPA), Международной федерации планирования семьи, Федерации спасения детей (IPPF), Программы передовых технологий в здравоохранении (PATH), Всемирной организации здравоохранения (WHO), Управления верховного комиссариата по делам беженцев ООН (UNHCR). Переводчик с английского, немецкого и итальянского языков</p>
									<p>Участник ликвидации последствий военных действий в зонах международных и локальных конфликтов. Тренер по военно-тактической медицине.</p>
								</div>
								<div class="single-detail-box">
									<h3>Oбразование</h3>
									<strong>С 2010 по 2012 год</strong>
									<p>старший научный сотрудник Центра микроинвазивной и фетальной хирургии Университетской клиники Иоганна Гутенберга (Майнц, Германия). Стипендиат Немецкой Академии Международного Сотрудничества (DAAD).</p>
									<strong>2011 г</strong>
									<p>Представитель DAAD на 61-й встрече с Нобелевскими лауреатами по физиологии и медицине в Ландау. Стипендиат Американо-Австрийского медицинского фонда (2017).</p>
								</div>
								<div class="single-detail-box">
									<h3>Хобби</h3>
									<p>поэзия, пулевая стрельба, экстремальное выживание.</p>
								</div>
							</div>
							<div class="tab-pane" id="sertification">
								<div class="sertification-holder">
									<h3>Сертификации</h3>
									<div class="row">
										<div class="col-md-4">
											<div class="simgle-sertificate">
												<div class="img bg-img">
													<img src="<?php echo get_template_directory_uri(); ?>/images/sertificate-1.png" alt="">
												</div>
												<div class="date-sertificate">2010</div>
												<div class="sertificate-info">
													<p>Сертификат дипломированного врача</p>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="simgle-sertificate">
												<div class="img bg-img">
													<img src="<?php echo get_template_directory_uri(); ?>/images/sertificate-2.png" alt="">
												</div>
												<div class="date-sertificate">2010</div>
												<div class="sertificate-info">
													<p>Сертификат дипломированного врача</p>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="simgle-sertificate">
												<div class="img bg-img">
													<img src="<?php echo get_template_directory_uri(); ?>/images/sertificate-3.png" alt="">
												</div>
												<div class="date-sertificate">2010</div>
												<div class="sertificate-info">
													<p>Сертификат дипломированного врача</p>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="simgle-sertificate">
												<div class="img bg-img">
													<img src="<?php echo get_template_directory_uri(); ?>/images/sertificate-4.png" alt="">
												</div>
												<div class="date-sertificate">2010</div>
												<div class="sertificate-info">
													<p>Сертификат дипломированного врача</p>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="simgle-sertificate">
												<div class="img bg-img">
													<img src="<?php echo get_template_directory_uri(); ?>/images/sertificate-5.png" alt="">
												</div>
												<div class="date-sertificate">2010</div>
												<div class="sertificate-info">
													<p>Сертификат дипломированного врача</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
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


