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

	<!--Section 2-->
	<section class = "two">
		<div class="arrow">
		</div>
		<div class="container">
			<div class="row">	
				<ul class="grid">
					<div class="col-md-4">
						<li>
	    				<img src="<?php bloginfo("template_directory"); ?>/images/home-page/circle1.png" alt="vintage">
		        	<div class="content">
			        	<p>
			        		Дизайн
			        	</p>
		        	</div>
	    			</li>
				    <p>
				      В нашей линейке велосипедов даже сумасшедший фрик наверняка найдет "свой" стиль. 
				      Байк подчеркнет Вашу индивидуальность и Вы никогда не сольетесь с толпой. 
				    </p>
					</div>
					<div class="col-md-4">
						<li>
	    				<img src="<?php bloginfo("template_directory"); ?>/images/home-page/circle2.png" alt="vintage">
		        	<div class="content">
			        	<p>
			        		эргономика
			        	</p>
		        	</div>
	    			</li>
				    <p>
						Вы станете единым целым со своим байком.
						Идеальное ощущение дороги и контроля Вам обеспечено, при этом никаких вибраций, которые отлично поглощает рама из высокопрочной стали.
				    </p>
					</div>
					<div class="col-md-4">
						<li>
	    				<img src="<?php bloginfo("template_directory"); ?>/images/home-page/circle3.png" alt="vintage">
		        	<div class="content">
			        	<p>
			        		Качество 
			        	</p>
		        	</div>
	    			</li>
				    <p>
				      У фиксед байков меньше деталей чем у обычных велосипедов, здесь просто нечему ломаться.
				      Они просты и не прихотливы, на этом велосипеде еще покатаются Ваши внуки.
				    </p>
					</div>
				</ul>
			</div>
		</div>
	</section>

<!--Footer-->
<?php get_footer();?>