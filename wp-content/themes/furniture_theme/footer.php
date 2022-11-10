<!-- ================== Footer  ================== -->




</div>
<footer>

	<div class="container-fluid">

		<div class="footer-wrap">

			<div class="container">

				<!--footer showroom-->
				<div class="footer-showroom">
					<div class="text-center">
						<!-- <a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/divano-logo.svg" alt="" width="130" height="55" /></a> -->
					</div>
				</div>

				<!--footer links-->
				<div class="footer-links">
					<div class="row">
						<div class="col-md-4">
							<h5>COMPANY</h5>
							<ul>
								<li><a href="about">About</a></li>
								<li><a href="contact">Contact Us</a></li>
								<li><a href="#">Videos</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h5>FOLLOW US ON</h5>
							<ul>
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Instagram</a></li>
								<li><a href="#">Twitter</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h5>SUBSCRIBE</h5>
							<p><i>Add your email address to sign up for our monthly emails and to receive promotional offers.</i></p>
							<div class="form-group form-newsletter">
								<input class="form-control" type="text" name="email" value="" placeholder="Email address" />
								<input type="submit" class="btn btn-secondary btn-sm" value="Subscribe" />
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</footer>
<!--/wrapper-->
<a href="tel:+918048657909" class="float">
	<i class="fa fa-phone my-float"></i>
</a>
<!--Scripts -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/ion.rangeSlider.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/magnific-popup.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/tilt.jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easypiechart.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bigtext.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<style>
	@media only screen and (min-width:768px) {
		.nav-bar-fixed {
			position: fixed;
			top: 0;
			left: 0;
		}

		.nvb {
			padding: 0;
		}

		.nvb .navbar-brand {
			padding-top: 0;
		}
	}

	.float {
		position: fixed;
		width: 60px;
		height: 60px;
		bottom: 40px;
		right: 40px;
		background-color: #0C9;
		color: #FFF;
		border-radius: 50px;
		text-align: center;
		box-shadow: 2px 2px 3px #999;
		z-index: 60000000000;
		transform: rotate(90deg);
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 25px;
	}
</style>
<script>
	$(document).ready(function() {

		$(".navbar").addClass("nvb");
		$(".witho-fix").addClass('d-image');
		$(".with-fix").removeClass('d-image');
		$(window).scroll(function() {
			var scroll = $(this).scrollTop();
			if (scroll > 50) {
				$(".navbar").addClass("nav-bar-fixed");
				$(".navbar-nav").addClass("ml-auto");
				$(".navbar").removeClass("nvb");
				$(".with-fix").addClass('d-image');
				$(".witho-fix").removeClass('d-image');
			} else {
				$(".navbar").removeClass("nav-bar-fixed");
				$(".navbar").addClass("nvb");
				$(".navbar").css('bcakground', 'transparent');
				$(".witho-fix").addClass('d-image');
				$(".with-fix").removeClass('d-image');
			}
		});
	});
</script>
</body>

</html>