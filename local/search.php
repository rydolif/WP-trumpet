<?php get_header(); ?>

	<section class="search product--hero page--hero" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/product--hero.jpg">
		<div class="container">
			<h2><?php echo 'Результат поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h2>
			<?php
				if (have_posts()) :
				while (have_posts()) : the_post();
			?>
				<div class="search__post">
					<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
					<p><?php the_excerpt() ?></p>
					<div>Дата добавления: <?php the_date() ?></div>
				</div>
			<?php endwhile; ?>
			<?php
				else :
				echo "Извините по Вашему результату ничего не найдено";
				endif;
			?>

		</div>
	</section>


<?php get_footer(); ?>
