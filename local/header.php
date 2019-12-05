<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">

	<meta name="theme-color" content="#000">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/preview.jpg">

</head>

	<?php wp_head(); ?>

<body>

	<a href="#" class="fixed call_open">
		<img class="lazy" src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/fixed.png" data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fixed.png 1x" alt="alt">
	</a>

	<div class="up click">
		<a href="#header"><span></span></a>
	</div>

	<?php get_template_part( 'parts/header' ); ?>

	<?php get_template_part( 'parts/nav' ); ?>

