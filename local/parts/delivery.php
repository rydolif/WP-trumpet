	<section class="page--white delivery">
		<div class="container">

			<p class="h2">Доставка и оплата</p>

			<div class="row justify-content-center">

				<?php if( have_rows('delivery', 'option') ): ?>
					<div class="col-xl-5 col-lg-6">
						<ul class="page__list">
							<?php while( have_rows('delivery', 'option') ): the_row(); 
								$img = get_sub_field('img');
								$text = get_sub_field('text');
							?>
								<li>
									<img src="<?php echo $img; ?>" alt=""> 
									<p><?php echo $text; ?></p>
								</li>

							<?php endwhile; ?>
						</ul>
					</div>
				<?php endif; ?>

				<div class="col-xl-5 col-lg-6">
					<?php the_field('delivery_text', 'option'); ?>
				</div>
			</div>

		</div>
	</section>