<?php get_header(); ?>

	<section class="article--hero contacts--hero page--hero">
		<div class="container">

			<div class="product--grums">
				<?php get_template_part( 'parts/grums' ); ?>
			</div>

			<div class="hero__title--page hero__title">
				<h1><?php the_title(); ?></h1>
			</div>

		</div>
	</section>

	<section class="article">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="article__title">
							<h3><?php the_title(); ?></h3>
						</div>
						<div class="article__content">
							<?php the_content(); ?>
						</div>

					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</section>


<?php get_footer(); ?>
