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
	<section  class="about-us">
		<div class="bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/about.png" alt=""></div>
		<div class="container">
			<span class="page-name">About Us</span>
			<h2 class="heading">Excelling in Everything We Do</h2>
			<div class="row flex-center">
				<div class="col-lg-7 col-md-12">
					<div class="about-placeholder">
						<div class="about-text">
							<p>IT WatchDog Inc also known as ITWD is your dedicated Managed Service Partner in the IT Sector</p>
							<p>We have created a reliable, verified network of Independent Software Development Houses and Application Service Providers across Europe and beyond who are strategically global members of ITWD . We have carefully hand-picked, assessed and qualified them to fit our highest standards</p>
							<p>We are <span>100% responsible</span> for the quality delivery of your project managing and monitoring it from A to Z </p>
							<p>We provide <span>IT consultancy and technical documentation</span> along with development services</p>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-12">
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
				<div class="col-md-6 col-lg-4 col-sm-6">
					<div class="proposition-box">
						<div class="heading">
							<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/clipboard.svg" alt=""></div>
							<h3>Quality Сontrol</h3></div>
						<div class="text">
							<p>Your personal account manager is responsible for every aspect of client care and ensures that the development process is swift, smooth and binding</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-sm-6">
					<div class="proposition-box">
						<div class="heading">
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/list.svg" alt="">
							</div>
							<h3>Guarantee</h3></div>
						<div class="text">
							<p>We eliminate risks of developer behavior and miscommunication and take full responsibility for successful completion</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-sm-6">
					<div class="proposition-box">
						<div class="heading">
							<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/money-bag.svg" alt=""></div>
							<h3>Budget Optimized</h3></div>
						<div class="text">
							<p>You save on withholdings and pay for development work only</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-sm-6">
					<div class="proposition-box">
						<div class="heading">
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/suitcase.svg" alt="">
							</div>
							<h3>Business Transparency</h3></div>
						<div class="text">
							<p>You know what you get, when and who is in charge. No hidden costs</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-sm-6">
					<div class="proposition-box">
						<div class="heading">
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/user.svg" alt="">
							</div>
							<h3>Regulatory Compliance</h3></div>
						<div class="text">
							<p>We are compliant to security regulations such as HIPAA, PCI-DSS, and others</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-sm-6">
					<div class="proposition-box">
						<div class="heading">
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/passage-of-time.svg" alt="">
							</div>
							<h3>Time Saved</h3></div>
						<div class="text">
							<p>Onboarding time is close to zero (teams are pre-contracted); seamless workflow with time zone overlap</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-sm-6">
					<div class="proposition-box">
						<div class="heading">
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/hand-shake.svg" alt="">
							</div>
							<h3>Flexibility</h3></div>
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
				<div class="col-lg-8 col-md-12">
					<h2 class="heading">Down to Zero Risks by Taking Quality Control Over Your Project </h2>	
				</div>
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="control-ico"><img src="<?php echo get_template_directory_uri(); ?>/images/bars.svg" alt=""></div>
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
						<div class="col-md-6 col-sm-6">
							<div class="control-ico"><img src="<?php echo get_template_directory_uri(); ?>/images/ban.svg" alt=""></div>
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
				<div class="col-lg-10 col-md-12 align-end">
					<button class="support-btn">24/7 Support</button>
				</div>
			</div>
		</div>
		<div class="bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/control.png" alt=""></div>
	</section>
	<section class="services">
		<div class="bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/services.png" alt=""></div>
		<div class="container">
			<span class="page-name">services</span>
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<h2 class="heading">Optimality of Budget</h2>	
				</div>
				<div class="col-md-12 col-lg-8">
					<div class="row">
						<div class="col-md-6">
							<div class="services-box">
								<h3>You save on</h3>
								<ul class="services-list">
									<li class="services-list-item">
										<div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/pay.svg" alt=""></div>
										<span class="text">Payroll company taxes</span>
									</li>
									<li class="services-list-item">
										<div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/wallet.svg" alt=""></div>
										<span class="text">Workplace and soft/hardware costs</span>
									</li>
									<li class="services-list-item">
										<div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/health-insurance.svg" alt=""></div>
										<span class="text">Health insurance, vacation, and sick days</span>
									</li>
									<li class="services-list-item">
										<div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/contract.svg" alt=""></div>
										<span class="text">Teams are already pre-contracted</span>
									</li>
									<li class="services-list-item">
										<div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/clock.svg" alt=""></div>
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
										<div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/money-bag-2.svg" alt=""></div>
										<span class="text">Development</span>
									</li>
									<li class="services-list-item">
										<div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/presentation-board-with-graph.svg" alt=""></div>
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
				<span class="page-name tac">WORK TIME</span>
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
	<section class="our-process">
		<div class="container">
			<span class="page-name">Our Process</span>
			<div class="row">
				<div class="col-md-7">
					<h2 class="heading">Navigating Safe From Idea to Reality</h2>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="process-step">
								<div class="process-step-head">
									<div class="process-step-number">1</div>
									<h3>Enquiry</h3>
								</div>
								<div class="process-step-body">
									<p>You give us a scope and requirements for tour project: stack, budget, timeframe, etc</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="process-step">
								<div class="process-step-head">
									<div class="process-step-number">2</div>
									<h3>72hrs</h3>
								</div>
								<div class="process-step-body">
									<p>We provide you the best estimate from several IT Watchdog partners that fits YOUR objectives</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="process-step">
								<div class="process-step-head">
									<div class="process-step-number">3</div>
									<h3>Guarantee</h3>
								</div>
								<div class="process-step-body">
									<p>We sign an agreement that ensures IT Watchdog is fully responsible for quality devivery of your product. We set milestones and expectations to help your project stay on track</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="process-step">
								<div class="process-step-head">
									<div class="process-step-number">4</div>
									<h3>Safety</h3>
								</div>
								<div class="process-step-body">
									<p>Using proven custom methodology that eliminate risks of delays or errors, we manage and monitor your project till the end to ensure delivery excellence. Dedicated account manager is there for you at all times</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="process-step">
								<div class="process-step-head">
									<div class="process-step-number">5</div>
									<h3>Support</h3>
								</div>
								<div class="process-step-body">
									<p>IT Watchdog provides product support whenever you need it to ensure it works indefectible</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="our-services">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2 class="heading">Our Services</h2>
				</div>
				<div class="col-md-7">
					<div class="head-text">
						<p>Key to our succes has been the ability to undestand the business requirements of complex and diverse business system and to map these into user friendly but effective systems and interfaces</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="services-item">
						<span>Team onboarding</span>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="services-item">
						<span>Plugin &amp; Scale Up resources in 72 hours</span>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="services-item">
						<span>Develop your Concept and SOW with our experts in 3-7days workshop with complete documentation</span>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="services-item">
						<span>Our support while developing MVP in 1-3months at a fraction of the cost, and during further stages of development</span>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="services-item">
						<span>Preparing legal and financial feasibility report for your project</span>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="services-item">
						<span>Hire Team of СТО + Business Analyst as a Service</span>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="services-item">
						<span>Your Personal Account Manager is responsible for quality control, communication, and on-time delivery</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="reviews">
		<div class="container">
			<span class="page-name">Reviews</span>
			<h2 class="heading">What Сlients Say About Us</h2>

			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="review-text">
							<p>We were impressed by fast sourcing and fast on-boarding of Angular developers. They fully integrated into our core processes. The quality of work is outstanding!</p>
						</div>
						<div class="review-autor">
							<div class="review-autor-img bg-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/control.png" alt="Logo">
							</div>
							<div class="review-autor-desc">
								<strong class="name">Hannes Kleist</strong>
								<span>STANWOOD, Managing Director</span>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="review-text">
							<p>We built a software solution to automate legal document and report creation. The solution saves us 2 months of time per year on routine tasks. Team delivers high-quality products on time and at a great value. Quick response times, regular progress updates, and clear task organization make for a consistently smooth workflow.</p>
						</div>
						<div class="review-autor">
							<div class="review-autor-img bg-img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/control.png" alt="Logo">
							</div>
							<div class="review-autor-desc">
								<strong class="name">Hannes Kleist</strong>
								<span>STANWOOD, Managing Director</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>


