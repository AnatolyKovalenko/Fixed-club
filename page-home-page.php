<!--Header-->
<?php get_header();?>

	<!--Section 1-->
	<section class = "one">
		<div class="header">
		  <div class="header__video-wrapp">
		    <div class="header__video-box">
		      <video loop muted autoplay class="header__video" id='headerVideo'>
		        <source src="<?php bloginfo("template_directory");?>/video/cutter.mp4" type="video/mp4">
		        <source src="<?php bloginfo("template_directory");?>/video/cutter.mp4" type="video/webm">
		      </video>
		     </div>
		   </div>
		  	<div class='header__video-title'>
			  	<h1>
						- На велосипеде меня удерживают
						<br>
						не гоночные рекорды,
						<br>
						а ощущение счастья.
						<p>
							Лэнс Армстронг
						</p>
				</h1>
			</div>
			<i id="pause" class="fa fa-pause fa-4x">
			</i>
		</div>
	</section>

<!--Footer-->
<?php get_footer();?>