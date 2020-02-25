<?php

/*
Template Name: Price Sale
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
		<img src="<?php echo get_template_directory_uri(); ?>/images/price.png" alt="">
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
	<div class="price-box price-sale-box">
		<div class="container">
			<div class="price-slide">
				<div class="text">
					<h2>Акция месяца</h2>
					<p>Клініку було засновано 2019 року. Усі кабінети обладнано за новітніми технологіями з дотриманням всіх європейських норм. Всі фахівці клініки безперечні професіонали своєї справи. Ми отримали декілька сертифікацій та знаходимось у топ 10 клінік Києва за рейтингом “Найсучасніше обладнання”. Для нас дуже важливий кожен клієнт та ми дбаємо про ваше здоров’я. Якщо у вас виникли запитання ми з вам перетелефонуємо неодмінно у зручний для вас час...</p>
					<p>Якщо у вас виникли запитання ми з вам перетелефонуємо неодмінно у зручний для вас час...</p>
				</div>
				<div class="img bg-img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/price-slider-1.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="prof-review">
		<div class="container">
			<div class="heading">
				<h2>ПРОФОСМОТР</h2>
				<p>В XXI веке своевременно периодически оценивать состояние женского здоровья — золотой стандарт во всем цивилизованном мире. А болеть гинекологическими заболеваниями в стране со свободным доступом к высококачественной медицине —  просто неприлично. Уделите себе 1 день в год, чтобы спокойно наслаждаться судьбой остальные 364 дня. А мы в свою очередь поможем насладиться даже тем днем, который Вы проведете в нашей компании. </p>
			</div>
			<div class="prof-review-descr">
				<h3>В пакет «Профосмотр» — «Женское здоровье» входят: </h3>
				<ul class="prof-review-list">
					<li>консультация акушер-гинеколога</li>
					<li>УЗИ органов малого таза (матки, яичников)</li>
					<li>осмотр доктором на кресле </li>
					<li>кольпоскопия (осмотр шейки через микроскоп с проведением специальных проб)</li>
					<li>пап-тест (исследование клеток шейки матки)</li>
					<li>осмотр доктором молочных желез</li>
				</ul>
				<div class="price-prof-review">Стоимость пакета: <span>1450 гривен.</span></div>
			</div>
		</div>
	</div>
		<div class="price-box">
		<div class="container">
			<h2>Актуальные акции</h2>
			<div class="swiper-container price-slider-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="price-slide">
							<div class="text">
								<h2>ШЕЙКА МАТКИ</h2>
								<p>Клініку було засновано 2019 року. Усі кабінети обладнано за новітніми технологіями з дотриманням всіх європейських норм. Всі фахівці клініки безперечні професіонали своєї справи. Ми отримали декілька сертифікацій та знаходимось у топ 10 клінік Києва за рейтингом “Найсучасніше обладнання”. Для нас дуже важливий кожен клієнт та ми дбаємо про ваше здоров’я. Якщо у вас виникли запитання ми з вам перетелефонуємо неодмінно у зручний для вас час[…]</p>
								<a class="detail-btn" href="">Узнать больше</a>
							</div>
							<div class="img bg-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/price-2.png" alt="">
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="price-slide">
							<div class="text">
								<h2>ШЕЙКА МАТКИ</h2>
								<p>Клініку було засновано 2019 року. Усі кабінети обладнано за новітніми технологіями з дотриманням всіх європейських норм. Всі фахівці клініки безперечні професіонали своєї справи. Ми отримали декілька сертифікацій та знаходимось у топ 10 клінік Києва за рейтингом “Найсучасніше обладнання”. Для нас дуже важливий кожен клієнт та ми дбаємо про ваше здоров’я. Якщо у вас виникли запитання ми з вам перетелефонуємо неодмінно у зручний для вас час[…]</p>
								<a class="detail-btn" href="">Узнать больше</a>
							</div>
							<div class="img bg-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/price-2.png" alt="">
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="price-slide">
							<div class="text">
								<h2>ШЕЙКА МАТКИ</h2>
								<p>Клініку було засновано 2019 року. Усі кабінети обладнано за новітніми технологіями з дотриманням всіх європейських норм. Всі фахівці клініки безперечні професіонали своєї справи. Ми отримали декілька сертифікацій та знаходимось у топ 10 клінік Києва за рейтингом “Найсучасніше обладнання”. Для нас дуже важливий кожен клієнт та ми дбаємо про ваше здоров’я. Якщо у вас виникли запитання ми з вам перетелефонуємо неодмінно у зручний для вас час[…]</p>
								<a class="detail-btn" href="">Узнать больше</a>
							</div>
							<div class="img bg-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/price-2.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-pagination"></div>
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


