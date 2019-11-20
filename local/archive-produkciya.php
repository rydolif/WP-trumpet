
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
				<li><a href="#one" class="tabs__link"><?php the_field('tabs1-name', 'option'); ?></a></li>
				<li><a href="#two" class="tabs__link"><?php the_field('tabs2-name', 'option'); ?></a></li>
				<li><a href="#three" class="tabs__link"><?php the_field('tabs3-name', 'option'); ?></a></li>
			</ul>

			<?php if( have_rows('tabs1', 'option') ): ?>
				<div id="one" class="tabs__wrap">
					<?php while( have_rows('tabs1', 'option') ): the_row(); 
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

			<?php if( have_rows('tabs2', 'option') ): ?>
				<div id="two" class="tabs__wrap">
					<?php while( have_rows('tabs2', 'option') ): the_row(); 
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

			<?php if( have_rows('tabs3', 'option') ): ?>
				<div id="three" class="tabs__wrap">
					<?php while( have_rows('tabs3', 'option') ): the_row(); 
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
							
						<?php
							$args = array(
							'post_type' => 'produkciya',
							'posts_per_page' => -1,
							);

							$query = new WP_Query( $args );

							while ( $query->have_posts() ): $query->the_post();

							?>

							<a href="<?php the_permalink(); ?>" class="product--catalog__item">
								<img src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" 
									data-src="<?php the_post_thumbnail_url(); ?>" 
									data-srcset="<?php the_post_thumbnail_url(); ?> 1x"
									class="lazy" 
									alt="alt">
								<p>
									<?php the_title(); ?>
								</p>
								<span class="product--catalog__item_arrow"></span>
							</a>

							<?php
							endwhile; wp_reset_postdata();
						?>


					</div>
				</div>

			</div>
		</section>

		<?php get_template_part( 'parts/form-catalog' ); ?>

		<?php get_template_part( 'parts/delivery' ); ?>

	</main>

<?php get_footer(); ?>
