
	<footer class="footer">
		<div class="footer__nav container">

			<a href="#" class="footer__logo">
				<img class="lazy"src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/footer--logo.png" data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/footer--logo.png 1x" alt="alt">
			</a>

			<?php 
				wp_nav_menu( array(
					'menu'=>'menu',
				    'theme_location'=>'menu',
				) );
			?>

		</div>

		<div class="footer__container container">
			<div class="footer__content">

				<a href="#" class="footer__content_logo footer__logo">
					<img class="lazy"src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/footer--logo.png" data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/footer--logo.png 1x" alt="alt">
				</a>

				<p class="footer__place">
					<?php the_field('place', 'option'); ?>
				</p>
				<p class="footer__link">
					<a href="tel:<?php the_field('phone', 'option'); ?>" ><b><?php the_field('phone', 'option'); ?></b></a>
					<a href="mailto:<?php the_field('email', 'option'); ?>"><b><?php the_field('email', 'option'); ?></b></a>
				</p>
				<p>
					<?php the_field('copyright', 'option'); ?>
				</p>
			</div>
			<div class="footer__btn">
				<a href="<?php echo get_home_url(); ?>/produkciya/" class="btn btn--text"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer--catalog.png" alt="">каталог</a>
				<a href="#" class="btn btn--text call_open"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header--tel.png" alt="">заказать звонок</a>
			</div>
		</div>
	</footer>
