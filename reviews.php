<?php

/*
Template Name: Reviews
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
		<img src="<?php echo get_template_directory_uri(); ?>/images/review.png" alt="">
		<div class="container">
			<h2>Спасибо За Доверие!</h2>
			<nav aria-label="breadcrumb">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Главная</a></li>
					<li class="breadcrumb-item active" aria-current="page">Отзывы</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="reviews-holder">
		<div class="container">
			<div class="row">
				<div class="reviews-heading">
					<div class="left">
						<span>Сортировать</span>
						<select class="selectpicker">
							<option value="">самый новые</option>
							<option value="">самый новые</option>
							<option value="">самый новые</option>
						</select>
					</div>
					<select class="selectpicker">
						<option value="">20</option>
						<option value="">30</option>
						<option value="">50</option>
					</select>
				</div>
				<ul class="reviews-list">
					<li class="reviews-list-item">
						<div class="by-who">
							<span class="name">Анна</span>
							<div class="my-rating"></div>
							<span class="date">12/05/2019</span>
						</div>
						<div class="reviews-text">
							<h3>Волшебно!</h3>
							<p>Сфера профессиональных интересов: ведение патологической беременности, задержка роста плода, резус-конфликт, ведение монохориальных двоен, внутриутробные инфекции, ведение плодов и новорожденных с пороками развития. патологией околоплодных вод.</p>
						</div>
					</li>
					<li class="reviews-list-item">
						<div class="by-who">
							<span class="name">Анна</span>
							<div class="my-rating"></div>
							<span class="date">12/05/2019</span>
						</div>
						<div class="reviews-text">
							<h3>Волшебно!</h3>
							<p>Сфера профессиональных интересов: ведение патологической беременности, задержка роста плода, резус-конфликт, ведение монохориальных двоен, внутриутробные инфекции, ведение плодов и новорожденных с пороками развития. патологией околоплодных вод.</p>
						</div>
					</li>
					<li class="reviews-list-item">
						<div class="by-who">
							<span class="name">Анна</span>
							<div class="my-rating"></div>
							<span class="date">12/05/2019</span>
						</div>
						<div class="reviews-text">
							<h3>Волшебно!</h3>
							<p>Сфера профессиональных интересов: ведение патологической беременности, задержка роста плода, резус-конфликт, ведение монохориальных двоен, внутриутробные инфекции, ведение плодов и новорожденных с пороками развития. патологией околоплодных вод.</p>
						</div>
					</li>
					<li class="reviews-list-item">
						<div class="by-who">
							<span class="name">Анна</span>
							<div class="my-rating"></div>
							<span class="date">12/05/2019</span>
						</div>
						<div class="reviews-text">
							<h3>Волшебно!</h3>
							<p>Сфера профессиональных интересов: ведение патологической беременности, задержка роста плода, резус-конфликт, ведение монохориальных двоен, внутриутробные инфекции, ведение плодов и новорожденных с пороками развития. патологией околоплодных вод.</p>
						</div>
					</li>
					<li class="reviews-list-item">
						<div class="by-who">
							<span class="name">Анна</span>
							<div class="my-rating"></div>
							<span class="date">12/05/2019</span>
						</div>
						<div class="reviews-text">
							<h3>Волшебно!</h3>
							<p>Сфера профессиональных интересов: ведение патологической беременности, задержка роста плода, резус-конфликт, ведение монохориальных двоен, внутриутробные инфекции, ведение плодов и новорожденных с пороками развития. патологией околоплодных вод.</p>
						</div>
					</li>
				</ul>
				<ul class="review-pagination">
					<li class="active"><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="add-review">
		<div class="container">
			<div class="row">
				<div class="contact-form">
					<h2>Оставить отзив</h2>
				<div class="row">
					<div class="col-md-6">
						<div class="input-block">
							<label for="">Имя (Обязательно)</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-block">
							<label for="">Email (Обязательно)</label>
							<input type="email" class="form-control">
						</div>
					</div>
					<div class="col-md-12">
						<div class="input-block">
							<label for="">Коментарий</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="add-revie-footer">
							<div class="my-rating"></div>
							<a href="" class="btn-arrow">
								<svg class="hover-line">
									<rect class="hover-rect" x="0" y="0" fill="none" width="100%" height="100%"></rect>
								</svg>
								<span class="text">Оставить отзив</span>
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


