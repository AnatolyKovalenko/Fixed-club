<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php the_title(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/images/2.png" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/main.css"/>
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/media.css"/>
</head>
<body>

	<!--Menu-->
	<header>
		<div class="nav">
			<div class="container-fluid">
				<div class="col-md-12">
					<div class="row">
						<button class="menu-but hidden-lg">
								<i class="fa fa-bars fa-3x">
								</i>
						</button>
						<nav class="menu">
							<img src="<?php bloginfo("template_directory");?>/images/logo/fixed-logo.png" alt="fixed club">
							<?php wp_nav_menu('primary');?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>