<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/styles.css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/media.css" />
	<title><?=the_title();?></title>
	<?php wp_head(); ?>
</head>
<body>

<header>
	<div id="topslider" class="owl-carousel">
		<?php if( have_rows('topslider') )
		while( have_rows('topslider') ): the_row(); ?>
			<div class="item"><img src="<?=get_sub_field('picture')['url']?>" alt=""></div>
		<?php endwhile; ?>
	</div>
</header>
