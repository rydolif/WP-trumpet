
	<header class="header" id="header">
		<div class="header__container container">

			<div class="header__logo">
				<a href="<?php echo get_home_url(); ?>">
					<img class="lazy" src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" data-src="<?php the_field('logo', 'option'); ?>" data-srcset="<?php the_field('logo', 'option'); ?> 1x" alt="alt">
				</a>
				<span></span>
				<p>
					<?php the_field('logo-text', 'option'); ?>
				</p>
			</div>

			<a href="mailto:<?php the_field('email', 'option'); ?>" class="header__mail">
				<span>
					<img class="lazy"
						src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
						data-src="<?php echo get_template_directory_uri(); ?>/assets/img/header--mail.png"
						data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/header--mail.png 1x"
						alt="alt">
				</span>
				<?php the_field('email', 'option'); ?>
			</a>

			<a href="teL:<?php the_field('phone', 'option'); ?>" class="header__tel">
				<span>
					<img class="lazy"
						src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
						data-src="<?php echo get_template_directory_uri(); ?>/assets/img/header--tel.png"
						data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/header--tel.png 1x"
						alt="alt">
				</span>
				<?php the_field('phone', 'option'); ?>
			</a>

			<div class="header__btn">
				<a href="#" class="btn btn--accent call_open">ЗАКАЗАТЬ ЗВОНОК</a>
				<a href="#" class="btn btn--green order_open">Оформить заявку</a>
			</div>
			
		</div>
	</header>