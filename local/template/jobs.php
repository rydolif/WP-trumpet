<?php
	/**
		* Template name: Вакансии
	*/
 ?>

<?php get_header(); ?>
	

	<main class="product">

		<section class="product--hero page--hero" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/product--hero.jpg">
			<div class="container">


				<div class="product--grums grums">
					<?php get_template_part( 'parts/grums' ); ?>
				</div>

				<div class="hero__title--page hero__title">
					<h1><?php the_title(); ?></h1>
					<?php the_field('sub-title'); ?>
				</div>

			</div>
		</section>

		
		<?php if( have_rows('jobs') ): ?>
			<section class="jobs">
				<div class="container">
					<div class="jobs__list">
				
					<?php while( have_rows('jobs') ): the_row(); 
						$text = get_sub_field('text');
					?>

						<div class="jobs__item">
							<?php echo $text; ?>
						</div>

					<?php endwhile; ?>

					</div>

				</div>
			</section>

		<?php endif; ?>

		<section class="page--text page--green page__center">
			<div class="container">
				<?php the_field('info'); ?>
			</div>
		</section>

	</main>
	
<?php get_footer(); ?>