<footer>
	<div id="footer">

		<div class="content">

			<div class="about">
				<h5>ABOUT US</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
					laoreet
					dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam ... <a href="#">Read More</a></p>
			</div>

			<div class="contact-info">
				<h5>CONTACT INFO</h5>
				<p style="letter-spacing: 2px;">Business Name Here</p>
				<div class="fa fa-phone"><span> 909 999-9898</span></div> <br>
				<div class="fa fa-envelope"><span> info@mybusiness.co</span></div> <br>
				<div class="fa fa-map-marker"><span> Manhattan, NY</span></div>
			</div>

			<div class="follow-us">
				<h5>FOLLOW US</h5>
				<div class="socials">
					<a href="#"><img src="images/icons/facebook-footer.png" alt="facebook"></a>
					<a href="#"><img src="images/icons/instagram.fw.png" alt="instagram"></a>
					<a href="#"><img src="images/icons/linkedin-footer.fw.png" alt="linkedin"></a>
					<a href="#"><img src="images/icons/twitter-footer.fw.png" alt="twitter"></a>
					<a href="#"><img src="images/icons/youtube.fw.png" alt="youtube"></a>
				</div>
			</div>

			<div class="newsletter">
				<h5>NEWSLETTER</h5>
				<p>Sign Up to our Newsletter to Recieve Updates, News, Events and Discounts</p>

				<form action="#" method="post">
					<div class="input-group">
						<i class="fa fa-envelope"></i>
						<input type="email" name="email" name="email" placeholder="Your Email Here:">
						<button type="submit" class="email-btn" disabled>SEND</button>
					</div>
				</form>

			</div>
		</div>

		<div class="copyrights">
			<p class="copy">
				©
				<?php echo date("Y"); ?>.
				<?php $this->info("company_name"); ?> All Rights Reserved.
				<?php if ($this->siteInfo['policy_link']): ?>
					<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>.
				<?php endif ?>
			</p>
			<p class="techno">
				<img class="lazy loaded" src="public/images/hd-logo.png" alt=""><a
					href="http://technodreamoutsourcing.com/">Web Design</a> Done by <a
					href="http://technodreamoutsourcing.com/"> TechnoDream LLC</a>
			</p>
		</div>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if ($this->siteInfo['cookie']): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function () {
			$('.g-recaptcha').each(function (index, el) {
				var recaptcha = grecaptcha.render(el, { 'sitekey': '<?php $this->info("site_key"); ?>' });
				$('.destroy-on-load').remove();
			})
		};


		$('.consentBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.termsBox').length) {
					if ($('.termsBox').is(':checked')) {
						$('.ctcBtn').removeAttr('disabled');
					}
				} else {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

		$('.termsBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.consentBox').is(':checked')) {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

	</script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
	<script src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
	<script>
		$('#gall1').pajinate({ num_page_links_to_display: 3, items_per_page: 10 });
		$('.fancy').fancybox({
			helpers: {
				title: {
					type: 'over'
				}
			}
		});
	</script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span
		style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>