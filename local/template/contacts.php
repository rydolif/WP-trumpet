<?php
	/**
		* Template name: Контакты
	*/
 ?>

<?php get_header(); ?>

	<section class="grums">
		<div class="container">
			<?php get_template_part( 'parts/grums' ); ?>
		</div>
	</section>
	
	<section class="contacts--hero">
		<div class="container">

			<div class="hero__title--page hero__title">
				<h1><?php the_title(); ?></h1>
			</div>

		</div>
	</section>

	<section class="contacts--contacts">
		<div class="contacts--contacts__container container">
			
			<div class="contacts--contacts__list">
				
				<div class="contacts--contacts__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--place.svg" alt="">
					<span>офис</span>
					<p><?php the_field('office'); ?></p>
				</div>
				
				<div class="contacts--contacts__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--tel.svg" alt="">
					<span><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></span>
					<p>Многоканальный</p>
				</div>

				<div class="contacts--contacts__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--place.svg" alt="">
					<span>производство</span>
					<p><?php the_field('production'); ?></p>
				</div>

				<div class="contacts--contacts__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--time.svg" alt="">
					<span><?php the_field('time'); ?></span>
					<div class="contacts--contacts__soc">
						<a href="<?php the_field('facebook'); ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="">
						</a>
						<a href="<?php the_field('instagram'); ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
						</a>
						<a href="<?php the_field('vk'); ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt="">
						</a>
					</div>
				</div>

			</div>

			<div class="contacts--contacts__list">

				<div class="contacts--contacts__item">
					<p>
						<?php the_field('info'); ?>
					</p>
				</div>

				<div class="contacts--contacts__item">
					<p>
						<?php the_field('info-bank'); ?>
					</p>
				</div>

			</div>

		</div>
	</section>

	<section class="contacts--position certifications" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/certifications--bg.jpg">
		<div class="container">
			
			<h2>Связь с руководством</h2>

			<?php if( have_rows('guide') ): ?>
				<div class="contacts--position__list">
					<?php while( have_rows('guide') ): the_row(); 
						$name = get_sub_field('name');
						$tel = get_sub_field('tel');
						$mail = get_sub_field('mail');
						$position = get_sub_field('position');
					?>

					<div class="contacts--position__item">

						<a href="tel:<?php echo $tel; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--tel.svg" alt=""> <?php echo $tel; ?></a>
						<a href="mailto:<?php echo $mail; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--mail.svg" alt=""><?php echo $mail; ?></a>
						<br>
						<p><b><?php echo $name; ?></b></p>
						<p><?php echo $position; ?></p>
					</div>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>
				
		</div>
	</section>

	<section class="map">
		<?php the_field('map'); ?>
	</section>

	<section class="contacts--call" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--form.jpg">
		<div class="container">

			<div class="contacts--call__form form">
				<h3>Заказ обратного звонка</h3>
				<p>
					Если Вам неудобно звонить нам, оставьте
					<br>заявку, и мы сами Вам перезвоним для
					<br>консультации. 
					<br>Услуга бесплатна.
				</p>
				<?php echo do_shortcode( '[contact-form-7 id="282" title="ЗАКАЗАТЬ ЗВОНОК (Контакты)"]' ); ?>
			</div>
			
		</div>
	</section>

<?php get_footer(); ?>