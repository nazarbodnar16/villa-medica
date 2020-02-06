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
		<div class="header-container flex-center">
			<span class="logo"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/logo_dark.svg" alt="Logo"></a></span>
			<div class="header-center-box">
				<nav class="main-nav flex-center">
					<ul class="main-nav-list">
						<li class="main-nav-item"><a  href="#">О Нас</a></li>
						<li class="main-nav-item">
							<a  href="#">Услуги</a>
							<div class="drop">
								<ul>
									<li><a tabindex="-1" href="#">Гинекология</a></li>
									<li><a tabindex="-1" href="#">Косметология</a></li>
									<li><a tabindex="-1" href="#">Инъекции</a></li>
									<li><a tabindex="-1" href="#">Трихология</a></li>
									<li><a tabindex="-1" href="#">Аппаратные  методики</a></li>
									<li><a tabindex="-1" href="#">Дерматология</a></li>
									<li><a tabindex="-1" href="#">Ендокринологія Anti-Age</a></li>
									<li><a tabindex="-1" href="#">Массаж</a></li>
								</ul>
							</div>
						</li>
						<li class="main-nav-item">
							<a  href="#">Команда</a>
							<div class="drop">
								<ul>
									<li><a tabindex="-1" href="#">Гинекология</a></li>
									<li><a tabindex="-1" href="#">Косметология</a></li>
									<li><a tabindex="-1" href="#">Инъекции</a></li>
									<li><a tabindex="-1" href="#">Трихология</a></li>
									<li><a tabindex="-1" href="#">Аппаратные  методики</a></li>
									<li><a tabindex="-1" href="#">Дерматология</a></li>
									<li><a tabindex="-1" href="#">Ендокринологія Anti-Age</a></li>
									<li><a tabindex="-1" href="#">Массаж</a></li>
								</ul>
							</div>
						</li>
						<li class="main-nav-item"><a  href="#">Отзывы</a></li>
						<li class="main-nav-item"><a  href="#">Контакты</a></li>
					</ul>
				</nav>
				<div class="head-contact">
					<div class="head-contact-desc">
						<span class="city">г. Киев,</span>
						<span class="street">пр-кт Героев Сталинграда 4, кор. 4А</span>
						<span class="tel">+38 (068) 046-44-44 </span>
					</div>
				</div>
			</div>
			<div class="lang-switch">
				<ul class="lang-switch-list">
					<li class="active"><a href="">RU</a></li>
					<li><a href="">UA</a></li>
				</ul>
			</div>
		</div>
		<a href="#" class="open-menu"><span></span>Open Menu</a>
		<span class="fader"></span>
	</header>