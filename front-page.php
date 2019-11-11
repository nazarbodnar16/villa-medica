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
	<section class="visual">
		<div class="container">
			<div class="cell">
				<div class="visual-text">
					<h1>IT WatchDog Inc.</h1>
					<h2>Your Dedicated Service Partner</h2>
				</div>
			</div>
		</div>
	</section>
	<section class="about-us">
		<div class="bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/about.png" alt="Logo"></div>
		<div class="container">
			<span class="page-name">About Us</span>
			<h2 class="heading">Excelling in Everything We Do</h2>
			<div class="row flex-center">
				<div class="col-md-7">
					<div class="about-placeholder">
						<div class="about-text">
							<p>IT WatchDog Inc also known as ITWD is your dedicated Managed Service Partner in the IT Sector</p>
							<p>We have created a reliable, verified network of Independent Software Development Houses and Application Service Providers across Europe and beyond who are strategically global members of ITWD . We have carefully hand-picked, assessed and qualified them to fit our highest standards</p>
							<p>We are <span>100% responsible</span> for the quality delivery of your project managing and monitoring it from A to Z </p>
							<p>We provide <span>IT consultancy and technical documentation</span> along with development services</p>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="list-box">
						<ul class="default-list big-list has-mark">
							<li class="default-list-item">
								<span>60K+</span>
								<p>hrs of projects managed successfully</p>
							</li>
							<li class="default-list-item">
								<span>70K+</span>
								<p>completed projects in total</p>
							</li>
						</ul>
						<div class="founded-in"><i class="fa fa-map-marker" aria-hidden="true"></i> Based in San Jose, CA</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="our-proposition">
		<div class="container">
			<span class="page-name tac">Our Value Proposition</span>
			<h2 class="heading tac">Exceeding Your Expectations</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="proposition-box">
						<div class="heading"><i class="fa fa-list-alt" aria-hidden="true"></i><h3>Quality Сontrol</h3></div>
						<div class="text">
							<p>Your personal account manager is responsible for every aspect of client care and ensures that the development process is swift, smooth and binding</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="proposition-box">
						<div class="heading"><i class="fa fa-file-text-o" aria-hidden="true"></i><h3>Guarantee</h3></div>
						<div class="text">
							<p>We eliminate risks of developer behavior and miscommunication and take full responsibility for successful completion</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="proposition-box">
						<div class="heading"><i class="fa fa-shopping-bag" aria-hidden="true"></i><h3>Budget Optimized</h3></div>
						<div class="text">
							<p>You save on withholdings and pay for development work only</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="proposition-box">
						<div class="heading"><i class="fa fa-briefcase" aria-hidden="true"></i><h3>Business Transparency</h3></div>
						<div class="text">
							<p>You know what you get, when and who is in charge. No hidden costs</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="proposition-box">
						<div class="heading"><i class="fa fa-desktop" aria-hidden="true"></i><h3>Regulatory Compliance</h3></div>
						<div class="text">
							<p>We are compliant to security regulations such as HIPAA, PCI-DSS, and others</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="proposition-box">
						<div class="heading"><i class="fa fa-clock-o" aria-hidden="true"></i><h3>Time Saved</h3></div>
						<div class="text">
							<p>Onboarding time is close to zero (teams are pre-contracted); seamless workflow with time zone overlap</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="proposition-box">
						<div class="heading"><i class="fa fa-handshake-o" aria-hidden="true"></i><h3>Flexibility</h3></div>
						<div class="text">
							<p>Need to meet us in your office? We can fly over to you to discuss your project personally</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="quality-control">
		<div class="container">
			<span class="page-name">Quality Control</span>
			<div class="row">
				<div class="col-md-8">
					<h2 class="heading">Down to Zero Risks by Taking Quality Control Over Your Project </h2>	
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6">
							<div class="control-ico"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
							<ul class="default-list has-mark">
								<li class="default-list-item">
									<span>Developer turnover</span>
								</li>
								<li class="default-list-item">
									<span>Budget raise</span>
								</li>
								<li class="default-list-item">
									<span>Miscommunication</span>
								</li>
								<li class="default-list-item">
									<span>Duration raise</span>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="control-ico"><i class="fa fa-ban" aria-hidden="true"></i></div>
							<ul class="default-list has-mark">
								<li class="default-list-item">
									<span>Overbilling</span>
								</li>
								<li class="default-list-item">
									<span>Unreliable estimation</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-10 align-end">
					<button class="support-btn">24/7 Support</button>
				</div>
			</div>
		</div>
		<div class="bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/control.png" alt="Logo"></div>
	</section>
	<section class="services">
		<div class="bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/services.png" alt="Logo"></div>
		<div class="container">
			<span class="page-name">services</span>
			<div class="row">
				<div class="col-md-6">
					<h2 class="heading">Optimality of Budget</h2>	
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6">
							<div class="services-box">
								<h3>You save on</h3>
								<ul class="services-list">
									<li class="services-list-item">
										<div class="ico"><i class="fa fa-money" aria-hidden="true"></i></div>
										<span class="text">Payroll company taxes</span>
									</li>
									<li class="services-list-item">
										<div class="ico"><i class="fa fa-google-wallet" aria-hidden="true"></i></div>
										<span class="text">Workplace and soft/hardware costs</span>
									</li>
									<li class="services-list-item">
										<div class="ico"><i class="fa fa-file-code-o" aria-hidden="true"></i></div>
										<span class="text">Health insurance, vacation, and sick days</span>
									</li>
									<li class="services-list-item">
										<div class="ico"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
										<span class="text">Teams are already pre-contracted</span>
									</li>
									<li class="services-list-item">
										<div class="ico"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
										<span class="text">Onboarding time</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="services-box">
								<h3>You pay for</h3>
								<ul class="services-list">
									<li class="services-list-item">
										<div class="ico"><i class="fa fa-desktop" aria-hidden="true"></i></div>
										<span class="text">Development</span>
									</li>
									<li class="services-list-item">
										<div class="ico"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
										<span class="text">ITWD management at a fraction of the cost</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="worktime">
		<div class="container">
			<div class="cell">
				<span class="page-name tac">services</span>
				<h2 class="heading tac">ITWD Works While You Sleep</h2>
				<ul class="worktime-list">
					<li class="worktime-list-item">
						<span class="number">1</span>
						<div class="sapn description">
							<strong>We discuss the project</strong>
							<span>set up milestones and tasks</span>
						</div>
					</li>
					<li class="worktime-list-item">
						<span class="number">2</span>
						<div class="sapn description">
							<strong>Work in Progress</strong>
							<span>you sleep while we work</span>
						</div>
					</li>
					<li class="worktime-list-item">
						<span class="number">3</span>
						<div class="sapn description">
							<strong>You wake up</strong>
							<span>the iteration is done</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>


