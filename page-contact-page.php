
<?php get_header(); ?>

	<!--Section grey-string-->
	<section class="grey-string">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2> Связатся с нами </h2>
				</div>
			</div>
		</div>
	</section>

	<!--Section contact-->
	<section class="contact">

		<!--Data-->
		<div class="container">
			<div class="container-back data">
				<div class="row">
					<div class="col-md-12">
						<div class="content-box">
							<div class="container-text left">
								<h2>
									Адрес:
								</h2>
								<p>
									FIXED CLUB: Городские Велосипеды
									<br>
									<br>
									г. Ровно, ул. Дубенская БОС, 8
									<br>
									<br>
									fixedclub.com.ua
								</p>
							</div>
							<div class="container-text right">
								<h2>
									Телефон:
								</h2>
								<p>
									+38(063)-305-23-86
									<br>
									<br>
									+38(067)-912-45-67
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--Form-->
		<div class="container">
			<div class="container-back">
				<div class="row">
					<div class="col-md-12">
						<div class="content-box">
							<div class="container-text left">
								<form class="callback contact-form">
									<h3>
										Оставьте ваши данные и мы с вами свяжемся
									</h3>
									
									<!-- Hidden Required Fields -->
									<input type="hidden" name="project_name" value="Fixed club">
									<input type="hidden" name="admin_email" value="fixed-club@rambler.ru">
									<input type="hidden" name="form_subject" value="Callback">
			
									<!-- END Hidden Required Fields -->
									<input type="text" name="name" placeholder=" Ваше имя" required/>
									<input type="text" name="mail" placeholder=" Ваш почтовый ящик" required/>
									<input type="text" name="phone" placeholder=" Ваш телефон"required/>
									<button class="but" type="submit">
										Отправить
									</button>
								</form>
							</div>
							<div class="container-bg form">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>