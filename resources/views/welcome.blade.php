<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Create Burger &amp; Food Delivery with Canvas Template. Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700&family=Open+Sans:wght@400;600;700&family=Dancing+Script&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- Font Icons -->
<link rel="stylesheet" href="css/font-icons.css">

<!-- Niche Demos -->
<link rel="stylesheet" href="{{ asset('burger/burger.css') }}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="css/font-icons.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Burger Document Title
	============================================= -->
	<title>Burger | Canvas</title>

</head>

<body class="stretched">

	<div class="body-overlay"></div>

	<div id="side-panel" class="dark" style="background: #101010 url('burger/images/icon-bg-white.png') repeat center center;">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="bi-x-lg"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget">

				<h4 class="fw-bold">Download App</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<a href="#"><img src="demos/articles/images/appstore.png" alt="App Link" height="60"></a>
				<a href="#"><img src="demos/articles/images/googleplay.png" alt="App Link" class="mt-2" height="60"></a>

			</div>

			<div id="q-contact" class="widget quick-contact-widget form-widget">

				<h4>Quick Contact</h4>
				<div class="form-result"></div>
				<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form nomb-5">
					<div class="form-process"></div>

					<input type="text" class="required not-dark mb-2 form-control mb-2" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name">
					<input type="text" class="required not-dark mb-2 form-control email mb-2" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address">
					<textarea class="required not-dark mb-2 form-control mb-2 short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
					<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="">
					<input type="hidden" name="prefix" value="quick-contact-form-">
					<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d m-0" value="submit">Send Email</button>
				</form>

			</div>

		</div>

	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark" data-sticky-class="dark-color" data-sticky-shrink-offset="0">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="demo-burger.html">
								<img class="logo-default" srcset="burger/images/logo.png, burger/images/logo@2x.png 2x" src="burger/images/logo@2x.png" alt="Canvas Logo">
								<img class="logo-dark" srcset="burger/images/logo-dark.png, burger/images/logo-dark@2x.png 2x" src="burger/images/logo-dark@2x.png" alt="Canvas Logo">
							</a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="bi-three-dots-vertical"></i></a></div>

						</div>

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
								<li class="current menu-item"><a class="menu-link" href="#" data-href="#slider"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#story"><div>Story</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#menu"><div>Menu</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#contact" data-offset="20"><div>Contact</div></a></li>
								<li class="noborder menu-item"><a class="menu-link" href="tel:+112223333"><div>+11 222 3333</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element min-vh-100 page-section slide-img include-header" data-animate="img-to-right" style="background: url('burger/images/hero.jpg') center center no-repeat; background-size: cover;">
			<div class="slider-inner">

				<div class="vertical-middle">
					<div class="container dark">
						<div class="row">
							<div class="col-lg-6 col-md-8 dotted-bg parallax" data-start="top: 0px; opacity: 1" data-400="top: 50px; opacity: 0.3">
								<div class="emphasis-title" data-animate="fadeInUp">
									<div class="before-heading font-secondary color">Delight your Best</div>
									<h1 class="font-border">Burgerrrr!</h1>
								</div>
								<p class="lead text-white-50" data-animate="fadeInUp" data-delay="100">Competently revolutionize real-time deliverables via quality vortals. Compellingly create worldwide functionalities without robust interfaces.</p>
								<a data-scrollto="#menu" data-easing="easeInOutExpo" data-speed="1250" class="button button-large button-rounded px-4 button-border button-light button-white fw-semibold" data-animate="fadeInUp" data-delay="200">See Menu</a>
								<a href="tel:+112223333" class="button button-large button-rounded px-4 button-reveal d-inline-flex tright fw-semibold" data-animate="fadeInUp" data-delay="300"><i class="bi-arrow-right"></i><span>Book a Table</span></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content" class="dark-color">
			<div style="position: absolute; top: -11px; left: 0; width: 100%;height: 30px; background: url('burger/images/svg/brush.svg') no-repeat top center / 110% auto; z-index: 2;"></div>
			<div class="content-wrap p-0">

				<div id="story" class="page-section">

					<div class="section my-0" style="background: #F0ECE7 url('burger/images/icon-bg.png') repeat center center;">
						<div class="container">
							<div class="text-center mb-5 mx-auto" style="max-width: 700px">
								<div class="before-heading font-primary color">Our Story</div>
								<h1 class="font-secondary display-4 fw-bold">Burgers! You won't Find Anywhere Else</h1>
								<p class="lead">Holisticly initiate distinctive growth strategies without efficient scenarios. Enthusiastically restore effective infomediaries through one-to-one applications. Assertively build cross-platform core competencies through resource-leveling process improvements. Objectively actualize intermandated strategic theme areas and real-time e-services.</p>

								<a href="https://www.freepik.com" class="d-block op-05">Designed by Freepik</a>

								<div class="card mx-auto my-5 slide-img border-0" style="max-width: 450px" data-animate="img-to-left">
									<img src="burger/images/others/chef.jpg" class="card-img" alt="...">
									<div class="card-img-overlay dotted-bg dotted-bg-light d-flex align-items-center justify-content-center">
										<a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="stretched-link display-3 text-white image_fade"><i class="fa-solid fa-circle-play"></i></a>
									</div>
								</div>

								<img src="burger/images/svg/items.svg" alt="All Items">
							</div>
						</div>
					</div>

					<div class="section m-0 p-0">
						<div class="row align-items-stretch">

							<div class="item-categories overflow-hidden col-md-4 dark col-padding position-relative" style="background-color: #0A0A0A;">
								<div class="cat-img"><img  data-animate="fadeInRight" src="burger/images/cat/1.png" alt="Category Image"></div>
								<div class="cat-text">
									<h2 class="fw-bold ls-1 text-uppercase mb-5">Burgers</h2>
									<p class="mb-5">Credibly exploit one-to-one markets before enabled innovation. Synergistically incubate integrated communities whereas highly efficient alignments.</p>
									<a href="#" data-scrollto="#menu" data-easing="easeInOutExpo" data-speed="1250" class="button button-rounded px-4 button-border button-light button-white fw-semibold ms-0">View All</a>
								</div>
							</div>

							<div class="item-categories overflow-hidden col-md-4 dark col-padding position-relative" style="background-color: #1B1B1B;">
								<div class="cat-img"><img  data-animate="fadeInRight" src="burger/images/cat/3.png" alt="Category Image"></div>
								<div class="cat-text">
									<h2 class="fw-bold ls-1 text-uppercase mb-5">Snacks</h2>
									<p class="mb-5">Authoritatively envisioneer 24/365 benefits via bricks-and-clicks outsourcing. Phosfluorescently redefine real-time relationships with interoperable sources. Efficiently.</p>
									<a href="#" data-scrollto="#menu-snacks" data-easing="easeInOutExpo" data-speed="1250" class="button button-rounded px-4 button-border button-light button-white fw-semibold ms-0">View All</a>
								</div>
							</div>

							<div class="item-categories overflow-hidden col-md-4 dark col-padding position-relative" style="background-color: #262626;">
								<div class="cat-img"><img  data-animate="fadeInRight" src="burger/images/cat/4.png" alt="Category Image"></div>
								<div class="cat-text">
									<h2 class="fw-bold ls-1 text-uppercase mb-5">Beverages</h2>
									<p class="mb-5">Dramatically promote collaborative networks via client-based quality vectors. Appropriately transform seamless applications after leading-edge models.</p>
									<a href="#" data-scrollto="#menu-beverages" data-easing="easeInOutExpo" data-speed="1250" class="button button-rounded px-4 button-border button-light button-white fw-semibold ms-0">View All</a>
								</div>
							</div>

						</div>
					</div>

					<div class="section dark-color m-0 p-0">
						<img src="burger/images/others/section-1.jpg" alt="Section Image">
						<div class="container dark">
							<div class="text-center mb-6">
								<div class="before-heading font-secondary color">Best Quality</div>
								<h1 class="font-border display-4 ls-1 fw-bold">Ingredients</h1>
							</div>

							<div class="clear"></div>

							<div class="row align-items-center">

								<div class="col-lg-4 col-md-6">

									<div class="feature-box px-0" data-animate="fadeInLeft">
										<div class="fbox-content">
											<h3 class="color"><i class="fa-solid fa-check-circle"></i> Burger Buns</h3>
											<p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
										</div>
									</div>

									<div class="feature-box ps-5 pe-0 mt-6" data-animate="fadeInLeft" data-delay="
									100">
										<div class="fbox-content">
											<h3 class="color"><i class="fa-solid fa-check-circle"></i> Fresh Vegetables</h3>
											<p>We have covered each &amp; everything in our Docs including Videos &amp; Screenshots.</p>
										</div>
									</div>

									<div class="feature-box ps-2 pe-0 mt-6" data-animate="fadeInLeft" data-delay="
									200">
										<div class="fbox-content">
											<h3 class="color"><i class="fa-solid fa-check-circle"></i> Ground Beef</h3>
											<p>Display your Content attractively using Parallax Sections with HTML5 Videos.</p>
										</div>
									</div>

								</div>

								<div class="col-lg-4 d-md-none d-lg-block text-center slide-img" data-animate="img-to-bottom">
									<img src="burger/images/others/section-3.jpg" alt="iphone 2">
								</div>

								<div class="col-lg-4 col-md-6">

									<div class="feature-box ps-5 pe-0" data-animate="fadeInRight">
										<div class="fbox-content">
											<h3 class="color"><i class="fa-solid fa-check-circle"></i> Fresh Meat</h3>
											<p>Canvas provides support for Native HTML5 Videos that can be added to a Background.</p>
										</div>
									</div>

									<div class="feature-box px-0 mt-6" data-animate="fadeInRight" data-delay="
									100">
										<div class="fbox-content">
											<h3 class="color"><i class="fa-solid fa-check-circle"></i> Gluten-Free Buns</h3>
											<p>Complete control on each &amp; every element that provides endless customization.</p>
										</div>
									</div>

									<div class="feature-box ps-3 pe-0 mt-6" data-animate="fadeInRight" data-delay="
									200">
										<div class="fbox-content">
											<h3 class="color"><i class="fa-solid fa-check-circle"></i> Low Fat</h3>
											<p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="clear"></div>

				<div id="menu" class="page-section">
					<div class="section mb-0" style="background: linear-gradient(to bottom, #101010, transparent, #101010), url('burger/images/others/section-2.jpg') no-repeat center top / cover;">

						<div class="container">
							<div class="row align-items-center">
								<div class="col-md-5 dark order-2 order-md-1">
									<div class="mb-5">
										<div class="before-heading font-secondary color mb-2">Our Menu</div>
										<div class="d-flex align-items-center dotted-bg">
											<img src="burger/images/svg/burger.svg" alt="" width="60">
											<h1 class="font-border display-4 ls-1 fw-bold mb-0  ms-3">Burgers</h1>
										</div>
									</div>

									<div class="clear"></div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/burgers/mini.jpg">
										<div class="price-header">
											<div class="price-name color">Mini Burger</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$9.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/burgers/double.jpg">
										<div class="price-header">
											<div class="price-name color">Double Size Burger</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$13.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/burgers/turkish.jpg">
										<div class="price-header">
											<div class="price-name color">Turkish Burger</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$15.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/burgers/veggie.jpg">
										<div class="price-header">
											<div class="price-name color">Garden Veg Burger</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$11.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>
								</div>

								<div class="col-md-6 text-center order-1 order-md-2" data-animate="zoomIn faster">
									<img src="burger/images/others/burger.png" alt="Image" class="parallax price-img mb-5 mb-md-0" data-top-bottom="transform:translateY(-30px)" data-bottom-top="transform:translateY(140px)">
								</div>
							</div>
						</div>

					</div>

					<div id="menu-snacks" class="section m-0" style="background: linear-gradient(to bottom, #101010, rgba(16,16,16,0.3),#101010), url('burger/images/others/section-5.jpg') no-repeat center top / cover;">

						<div class="container">
							<div class="row align-items-center">
								<div class="col-md-6 offset-md-1" data-animate="zoomIn faster">
									<img src="burger/images/others/snacks.png" alt="" class="parallax price-img mb-5 mb-md-0" data-top-bottom="transform:translateY(-30px)" data-bottom-top="transform:translateY(140px)">
								</div>

								<div class="col-md-5 dark">
									<div class="mb-5">
										<div class="before-heading font-secondary color mb-3">Our Menu</div>
										<div class="d-flex align-items-center dotted-bg">
											<img src="burger/images/svg/snacks.svg" alt="" width="70">
											<h1 class="font-border display-4 ls-1 fw-bold mb-0 ms-3">Snacks</h1>
										</div>
									</div>

									<div class="clear"></div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/snacks/hot-dog.jpg">
										<div class="price-header">
											<div class="price-name color">Hot Dog</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$9.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/snacks/chicken-wrap.jpeg">
										<div class="price-header">
											<div class="price-name color">Chicken Wrap</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$13.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/snacks/rice-bowl.jpg">
										<div class="price-header">
											<div class="price-name color">Rice Bowl</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$15.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/snacks/salad.jpg">
										<div class="price-header">
											<div class="price-name color">House Salad</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$11.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div id="menu-beverages" class="section mt-0" style="background: linear-gradient(to bottom, #101010, rgba(16,16,16,0.3),#101010), url('burger/images/others/section-4.jpg') no-repeat center top / cover;">

						<div class="container">
							<div class="row align-items-center">

								<div class="col-md-5 dark order-2 order-md-1">
									<div class="d-flex align-items-center mb-5 dotted-bg">
										<img src="burger/images/svg/drinks.svg" alt="" width="50">
										<div class="ms-3">
											<div class="before-heading font-secondary color">Our Menu</div>
											<h1 class="font-border display-4 ls-1 fw-bold mb-0">Beverages</h1>
										</div>
									</div>

									<div class="clear"></div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/beverages/americano.jpg">
										<div class="price-header">
											<div class="price-name color">Americano</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$9.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/beverages/cold-coffee.jpg">
										<div class="price-header">
											<div class="price-name color">Cold Coffee with Ice-cream</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$13.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/beverages/cafe-latte.jpg">
										<div class="price-header">
											<div class="price-name color">Cafe Latte</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$15.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>

									<div class="price-menu-warp img-hover-block" data-img="burger/images/menu-items/beverages/juice.jpg">
										<div class="price-header">
											<div class="price-name color">Fresh Juice</div>
											<div class="price-dots">
												<span class="separator-dots"></span>
											</div>
											<div class="price-price">$13.00</div>
										</div>
										<p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
									</div>
								</div>

								<div class="col-md-6 offset-md-1 text-center order-1 order-md-2" data-animate="zoomIn faster">
									<img src="burger/images/others/beverage-2.png" alt="" class="parallax price-img mb-5 mb-md-0" data-top-bottom="transform:translateY(-30px)" data-bottom-top="transform:translateY(140px)">
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="section dark my-0" style="padding: 60px 0 120px; background: linear-gradient(to bottom, #101010, transparent), url('burger/images/icon-bg-white.png') repeat center center;">
					<div class="container mx-auto" style="max-width: 1000px">
						<div class="row align-items-center">
							<div class="col-md-6 text-center text-md-start">
								<h2 class="display-4 fw-bold text-uppercase ls-1" data-animate="fadeInUp">Very Faaaaast Delivery!</h2>
								<h4 class="font-secondary text-white-50" data-animate="fadeInUp" data-delay="100"> Food Taste Better when you eat it with your Family</h4>
								<a href="tel:+112223333" class="button button-large button-rounded button-reveal px-4 tright fw-semibold"><i class="bi-arrow-right"></i><span>Call us Now</span></a>
							</div>
							<div class="col-md-6">
								 <div class="slide-img" data-animate="img-to-left">
									<img src="burger/images/svg/delivery.svg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="contact" class="section page-section dark m-0 pb-0 pb-md-5 slide-img" data-animate="img-to-left" style="background: #101010 url('burger/images/icon-bg-white.png') repeat center center;">
					<div class="container pt-3 pb-4">
						<div class="row">
							<div class="col-sm-5"  style="line-height: 1.7; z-index: 1">
								<address class="d-block mb-5">
									<div class="font-secondary h5 mb-2 color">Address:</div>
									<span class="h6 text-white ls-1 fw-normal font-primary">
										North America<br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107.
									</span>
								</address>
								<div class="font-secondary h5 mb-2 color">Phone Number:</div>
								<a href="tel:(91)(8547)632521" class="d-block h6 text-white ls-1 fw-normal font-primary mb-5">(00) 8547 632521</a>

								<div class="font-secondary h5 mb-2 color">Email:</div>
								<a href="mailto:no-reply@semicolonweb.com?Subject=Hello%20again" class="d-block h6 text-white ls-1 fw-normal font-primary mb-5">no-reply@semicolonweb.com</a>

								<div class="font-secondary h5 mb-2 color">Time:</div>
								<div class="h6 text-white ls-1 fw-normal font-primary">11:00am - 06:00pm</div>
								<span class="text-uppercase text-white ls-1 fw-normal font-primary">Sunday Closed</span>
							</div>
						</div>
					</div>
					<div id="map" class="gmap mt-5 mt-md-0" data-address="Melbourne, Australia" data-styles='[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#666666"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":10}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]' data-zoom="14" data-icon='{image: "burger/images/svg/hamburger-marker.svg",iconsize: [40, 36],iconanchor: [40,36]}' data-maptype="ROADMAP" data-content='<div class="text-dark" style="width: 300px;"><h4 class="text-dark" style="margin-bottom: 8px;">Hi, we are <span>Envato</span></h4><p class="nomb-5">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>'></div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark noborder parallax scroll-detect pt-3">
			<img src="burger/images/others/footer.jpg" class="parallax-bg">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="widget">

								<img src="burger/images/footer-logo.png" alt="" height="40" class="alignleft" style=" padding-right: 18px; border-right: 1px solid #4A4A4A;">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

								<div class="line" style="margin: 30px 0;"></div>

								<div class="row col-mb-30">
									<div class="col-lg-6">
										<div class="widget">

											<div class="d-none d-lg-block"><div class="clear" style="padding-top: 10px;"></div></div>

											<div class="row col-mb-30">
												<div class="col-sm-6">
													<div class="counter counter-small color"><span data-from="50" data-to="15065425" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
													<h5 class="nomb-5">Total Downloads</h5>
												</div>

												<div class="col-sm-6">
													<div class="counter counter-small color"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
													<h5 class="nomb-5">Orders Served</h5>
												</div>
											</div>

										</div>
									</div>

									<div class="col-lg-6">
										<div class="widget subscribe-widget">
											<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
											<div class="widget-subscribe-form-result"></div>
											<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nomb-5">
												<div class="input-group mx-auto">
													<div class="input-group-text bg-white"><i class="bi-send"></i></div>
													<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email not-dark border-0" placeholder="Enter your Email">
													<button class="btn text-white bgcolor" type="submit">Subscribe</button>
												</div>
											</form>
										</div>
									</div>
								</div>

							</div>

							<div class="line" style="margin: 30px 0;"></div>

							<div class="row col-mb-30">
								<div class="col-6 col-lg-4">
									<div class="widget">

										<h4 class="fw-bold">Sitemap</h4>

										<ul class="list-unstyled ms-0">
											<li class="mb-2"><a class="text-white-50" href="#">Home</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">About Us</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Menu</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Store</a></li>
										</ul>

									</div>
								</div>
								<div class="col-6 col-lg-4">
									<div class="widget">

										<h4 class="fw-bold">Categories</h4>

										<ul class="list-unstyled ms-0">
											<li class="mb-2"><a class="text-white-50" href="#">Burgers</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Appetizers</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Wraps</a></li>
											<li class="mb-2"><a class="text-white-50" href="#">Beverages</a></li>
										</ul>

									</div>
								</div>
								<div class="col-md-12 col-lg-4">
									<div class="widget">

										<h4 class="fw-bold">Download App</h4>
										<a href="#"><img src="demos/articles/images/appstore.png" alt="App Link" height="50"></a>
										<a href="#"><img src="demos/articles/images/googleplay.png" alt="App Link" class="mt-2" height="50"></a>

									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="widget">
								<h4>Instagram Photos</h4>
								<div id="instagram-photos" class="instagram-photos masonry-thumbs row row-cols-4 row-cols-sm-6 row-cols-lg-4" data-user="blog.canvastemplate"></div>
							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">
						<div class="col-md-6 text-center text-md-start">
							Copyrights &copy; 2023 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="d-flex justify-content-center justify-content-md-end">
								<a href="#" class="social-icon si-small mb-0 border-0 bg-facebook">
									<i class="fa-brands fa-facebook-f"></i>
									<i class="fa-brands fa-facebook-f"></i>
								</a>

								<a href="#" class="social-icon si-small mb-0 border-0 bg-x-twitter">
									<i class="fa-brands fa-x-twitter"></i>
									<i class="fa-brands fa-x-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small mb-0 border-0 bg-google">
									<i class="fa-brands fa-google"></i>
									<i class="fa-brands fa-google"></i>
								</a>

								<a href="#" class="social-icon si-small mb-0 border-0 bg-pinterest">
									<i class="fa-brands fa-pinterest-p"></i>
									<i class="fa-brands fa-pinterest-p"></i>
								</a>

								<a href="#" class="social-icon si-small mb-0 border-0 bg-instagram">
									<i class="bi-instagram"></i>
									<i class="bi-instagram"></i>
								</a>

								<a href="#" class="social-icon si-small mb-0 border-0 bg-youtube">
									<i class="fa-brands fa-youtube"></i>
									<i class="fa-brands fa-youtube"></i>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- Javascripts
	============================================= -->
	<script src="{{ asset('js/plugins.min.js') }}" ></script>
<script src="{{ asset('js/functions.bundle.js') }}" ></script>


	<!-- Parallax Script
	============================================= -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
	<script>!SEMICOLON.Mobile.any() && skrollr.init({forceHeight: false});</script>

	<!-- Hover Animate -->
	<script src="burger/js/hover-animate.js"></script>

</body>
</html>
