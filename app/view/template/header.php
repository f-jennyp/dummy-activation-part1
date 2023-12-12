<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/ac8dfd2320.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<?php $this->helpers->analytics(); ?>

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CMontserrat:400,700,900%7CLato:700"
		rel="stylesheet">

</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header">
			<div class="row main">
				<a href="home" class="h-logo"><img src="public/images/common/logo.png" alt="Logo"></a>

				<div class="info-holder">
					<a href="tel:<?php $this->info("email"); ?>"><img src="public/images/content/email.fw.png">
						<?php $this->info("email"); ?>
					</a>
					<a href="tel:<?php $this->info("location"); ?>"><img src="public/images/content/location.fw.png">
						<?php $this->info("location"); ?>
					</a>
					<a href="tel:<?php $this->info("phone"); ?>"><img src="public/images/content/phone.fw.png">
						<?php $this->info("phone"); ?>
					</a>
				</div>

				<div class="btn-like">
					<a href="#">Online Appointment</a>
				</div>

			</div>

			<nav class="row">
				<a href="#" id="pull"><strong>MENU</strong></a>
				<ul class="flex dflex">
					<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
					<li <?php $this->helpers->isActiveMenu("services"); ?>><a
							href="<?php echo URL ?>services#content">THE FIRM</a></li>
					<li <?php $this->helpers->isActiveMenu("attorneys"); ?>><a
							href="<?php echo URL ?>attorneys#content">ATTORNEYS</a></li>
					<li <?php $this->helpers->isActiveMenu("practice-area"); ?>><a
							href="<?php echo URL ?>practice-area#content">PRACTICE AREA</a></li>
					<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a
							href="<?php echo URL ?>testimonials#content">TESTIMONIALS</a></li>
					<li <?php $this->helpers->isActiveMenu("contact-us"); ?>><a
							href="<?php echo URL ?>contact-us#content">CONTACT US</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- <?php //if($view == "home"):?> -->
	<div id="banner">
		<div class="img-holder">
			<img src="<?php echo URL ?>public/images/content/banner.png" alt="banner">
		</div>
		<div class="content-holder">
			<div class="row">
				<div class="foreword">Lorem ipsum dolor sit amet</div>
				<div class="title-like">Lorem ipsum dolor sit amet,
					consectetur adipiscing elit,</div>
				<div class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
					tempor
					incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
					ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				<div class="btn-holder">
					<a href="<?php echo URL ?>more#content">Read more</a>
				</div>
			</div>

			<div class="banner-img">
				<img src="<?php echo URL ?>public/images/content/banner1.png" alt="banner-img">
			</div>
		</div>
	</div>
	<!-- <?php //endif; ?> -->