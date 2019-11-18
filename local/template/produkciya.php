<?php
	/**
		* Template name: Продукция
	*/
 ?>


<?php get_header(); ?>

	<main class="product">

		<section class="product--hero page--hero" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/product--hero.jpg">
			<div class="container">

				<div class="product--grums grums">
					<?php get_template_part( 'parts/grums' ); ?>
				</div>

				<div class="hero__title--sub-title hero__title--page hero__title">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
					<?php endwhile; ?>
					<?php endif; ?>

				</div>

			</div>
		</section>

		<section class="product--tabs tabs lazy-background">
			<div class="container">

			<ul>
				<li><a href="#one" class="tabs__link"><?php the_field('tabs1-name'); ?></a></li>
				<li><a href="#two" class="tabs__link"><?php the_field('tabs2-name'); ?></a></li>
				<li><a href="#three" class="tabs__link"><?php the_field('tabs3-name'); ?></a></li>
			</ul>

			<?php if( have_rows('tabs1') ): ?>
				<div id="one" class="tabs__wrap">
					<?php while( have_rows('tabs1') ): the_row(); 
						$img = get_sub_field('img');
						$text = get_sub_field('text');
					?>

						<div class="tabs__item">
							<img class="lazy" 
								src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" 
								data-src="<?php echo $img; ?>" 
								data-srcset="<?php echo $img; ?> 1x" 
								alt="alt">
							<span></span>
							<p><?php echo $text; ?></p>
						</div>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>

			<?php if( have_rows('tabs2') ): ?>
				<div id="two" class="tabs__wrap">
					<?php while( have_rows('tabs2') ): the_row(); 
						$img = get_sub_field('img');
						$text = get_sub_field('text');
					?>

						<div class="tabs__item">
							<img class="lazy" 
								src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" 
								data-src="<?php echo $img; ?>" 
								data-srcset="<?php echo $img; ?> 1x" 
								alt="alt">
							<span></span>
							<p><?php echo $text; ?></p>
						</div>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>

			<?php if( have_rows('tabs3') ): ?>
				<div id="three" class="tabs__wrap">
					<?php while( have_rows('tabs3') ): the_row(); 
						$img = get_sub_field('img');
						$text = get_sub_field('text');
					?>

						<div class="tabs__item">
							<img class="lazy" 
								src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" 
								data-src="<?php echo $img; ?>" 
								data-srcset="<?php echo $img; ?> 1x" 
								alt="alt">
							<span></span>
							<p><?php echo $text; ?></p>
						</div>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>

			</div>
		</section>

		<section class="product--catalog">
			<div class="container">
				
				<h2>Каталог</h2>

				<div class="row justify-content-center">
					<div class="col-xl-10">
							
						<?php if( have_rows('list') ): ?>
							<div class="product--catalog__wrap">
								<?php while( have_rows('list') ): the_row(); 
									$text = get_sub_field('text');
									$img = get_sub_field('img');
									$link = get_sub_field('link');
									?>

									<a href="<?php echo $link; ?>" class="product--catalog__item">
										<img src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" 
											data-src="<?php echo $img; ?>" 
											data-srcset="<?php echo $img; ?> 1x"
											class="lazy" 
											alt="alt">
										<p>
											<?php echo $text; ?>
										</p>
										<span class="product--catalog__item_arrow"></span>
									</a>

								<?php endwhile; ?>
							</div>
						<?php endif; ?>


					</div>
				</div>

			</div>
		</section>

		<?php get_template_part( 'parts/form-catalog' ); ?>

		<?php get_template_part( 'parts/delivery' ); ?>

	</main>

<?php get_footer(); ?>
