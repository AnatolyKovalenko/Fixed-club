<!--Footer-->
	<footer>
		<div class="footer-up">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="f-item">
							<span>
								<i class="fa fa-phone fa-3x">
								</i>
							</span>
							<p>
								+38(063)-546-74-33
								<br>
								+38(097)-177-58-96
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="wheel">
							<img id='bic' src="<?php bloginfo("template_directory"); ?>/images/2.png" alt="whell">
						</div>
					</div>
					<div class="col-md-4">
						<div class="f-item">
							<span>
								<i class="fa fa-envelope-o fa-3x">	
								</i>
							</span>
							<a href="mailto:fixed-club@gmail.com">
								<p id="mail">
									fixed-club@gmail.com
								</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="footer-down">
			<h6>
				©Fixed club 2015-2016
			</h6>
		</div>
	</footer>
	
	<!--Up button-->
	<a href="#" class="scrollToTop">
		<i class="fa fa-arrow-circle-o-up fa-4x">
		</i>
	</a>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="<?php bloginfo("template_directory"); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/common.js"></script>

	<!--Preloader JS-->
	<script type="text/javascript">
		$(window).on('load', function () {
	    var $preloader = $('#page-preloader'),
	        $spinner   = $preloader.find('.spinner');
	    $spinner.fadeOut();
	    $preloader.delay(350).fadeOut('slow');
		});
	</script>
</body>
</html>
