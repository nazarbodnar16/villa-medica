<?php
/*
Template Name: soon
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
?>

<main id="main">
<div class="conteiner">
			<h1>Coming soon</h1>
			<h2>Our website is under construction</h2>
		</div>
</main>

<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap');
	.page-template-soon #header{
		display: none;
	}
body{
	background: rgba(92,119,255,1);
	background: -moz-linear-gradient(45deg, rgba(92,119,255,1) 0%, rgba(255,46,255,1) 100%);
	background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(92,119,255,1)), color-stop(100%, rgba(255,46,255,1)));
	background: -webkit-linear-gradient(45deg, rgba(92,119,255,1) 0%, rgba(255,46,255,1) 100%);
	background: -o-linear-gradient(45deg, rgba(92,119,255,1) 0%, rgba(255,46,255,1) 100%);
	background: -ms-linear-gradient(45deg, rgba(92,119,255,1) 0%, rgba(255,46,255,1) 100%);
	background: linear-gradient(45deg, rgba(92,119,255,1) 0%, rgba(255,46,255,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5c77ff', endColorstr='#ff2eff', GradientType=1 );
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: inherit;
	overflow: hidden;
}
.conteiner h1{
	font-family: 'Roboto', sans-serif;
	font-weight: 900;
	text-align: center;
	font-size: 5em;
	color: #fff;
	text-transform: uppercase;
}
.conteiner h2 {
    color: #fff;
    font-family: "Roboto", sans-serif;
    font-size: 2.63em;
    font-weight: 200;
    text-align: center;
    text-transform: uppercase;
}
</style>

