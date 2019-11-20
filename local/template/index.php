<?php
	/**
		* Template name: Главная
	*/
 ?>

<?php get_header(); ?>

			
	<?php if( have_rows('hero') ): ?>
		
		<section class="hero swiper-container">
			<div class="swiper-wrapper">
			
			<?php while( have_rows('hero') ): the_row(); 
				$title = get_sub_field('title');
				$img = get_sub_field('img');
			?>

				<div class="hero__slider swiper-slide">
					<img class="hero__bg lazy"
						src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" 
						data-src="<?php echo $img; ?>" 
						data-srcset="<?php echo $img; ?> 1x" 
						alt="alt">

					<div class="container">
						<div class="hero__title">
							<p class="title"><?php echo $title; ?></p>
						</div>
						<div class="hero__pagination swiper-pagination"></div>
					</div>
				</div>

			<?php endwhile; ?>

			</div>
		</section>

	<?php endif; ?>

	<section class="tabs lazy-background" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--bg.jpg">
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

	<section class="geography">
		<div class="container">

			<h2>География проектов НЗПТ</h2>

			<div class="geography__map">
				<div class="geography__content">
					<p class="geography__text">География <br>Продукция компании <br>представлена в странах Европы, <br>Америки, Азии, России и СНГ.</p>
					<div class="geography__country">
						<img class="geography__country_decor lazy"
							src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
							data-src="<?php echo get_template_directory_uri(); ?>/assets/img/line.jpg"
							data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/line.jpg 1x"
							alt="alt">
						<p>Казахстан</p>
						<p>Украина</p>
						<p>Беларусь</p>
						<p>Молдавия</p>
					</div>
				</div>
				<img class="lazy"
					src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
					data-src="<?php the_field('geography'); ?>"
					data-srcset="<?php the_field('geography'); ?> 1x"
					alt="alt">
			</div>

		</div>
	</section>

	<section class="company">
		<div class="container">

			<h2>Преимущества работы с компанией</h2>

			<div class="company__list">
				
				<div class="company__item">
					<span class="company__num">21</span>
					<p>21 год на рынке</p>
				</div>
				
				<div class="company__item">
					<span class="company__num">7</span>
					<p>Мы разработали десятки<br> технических условий<br> и получили 7 патентов</p>
				</div>

				<div class="company__item">
					<span class="company__num">1000</span>
					<p>У нас более 1000<br> заказчиков в 50<br> городах России</p>
				</div>

				<div class="company__item">
					<span class="company__num">3000</span>
					<p>30000 кв.м.  производственных площадей, оснащенных высокотехнологичным оборудованием</p>
				</div>

			</div>

			<div class="company__content">
				<img class="company__img lazy"
					src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
					data-src="<?php echo get_template_directory_uri(); ?>/assets/img/company--img.jpg"
					data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company--img.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/img/company--img.jpg 2x"
					alt="alt">
				<div class="company__text">
					<p>
						Благодаря чуткому руководству, а так же грамотной и 
						<br>слаженной работе производственного персонала,
						<br> освоено серийное производство энергосберегающих
						<br>труб 920 диаметра.
					</p>
					<p>
						На данный момент мы единственные в Сибири, кто
						<br>производит трубы в ППУ изоляции такого диаметра
						<br> серийно!
					</p>
					<a href="#" class="btn btn--green">О КОМПАНИИ</a>
				</div>
			</div>

		</div>
	</section>

	<section class="section-order" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--bg.jpg">
		<div class="container">
			
			<form class="section-order__form form" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/section--order.jpg">
				<div class="section-order__block">
					<h3>Заказ обратного звонка</h3>
					<p>
						Если Вам неудобно звонить нам, оставьте<br> заявку, и мы сами Вам перезвоним для<br> консультации. Услуга бесплатна.
					</p>
				</div>
				<div class="section-order__block">
					<div class="section-order__input">
						<input type="text" name="name" placeholder="Ваше имя" required>
					</div>
					<div class="section-order__input">
						<input type="email" name="mail" placeholder="Ваша почта" required>
					</div>
					<div class="section-order__input">
						<button class="btn btn--accent">ЗАКАЗАТЬ ЗВОНОК</button>
					</div>
					<div class="section-order__input">
						<input type="checkbox" id="ok">
						<label for="ok">Выражаю свое согласие<br> на обработку персональных<br> данных.</label>
					</div>
				</div>
			</form>

		</div>
	</section>

	<section class="client">
		<div class="container">
			
			<div class="client__title"><p>Клиенты компании</p></div>

			<p>нам доверяют</p>

			<?php if( have_rows('company') ): ?>
				<div class="client__wrap">
					<div class="client__trust swiper-container">
						<div class="swiper-wrapper">
							<?php while( have_rows('company') ): the_row(); 
								$img = get_sub_field('img');
							?>

								<div class="client__trust_slide swiper-slide">
									<img class="lazy"
										src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
										data-src="<?php echo $img; ?>"
										data-srcset="<?php echo $img; ?> 1x"
										alt="alt">
								</div>

							<?php endwhile; ?>
						</div>
						<div class="slider__next client__trust_next swiper-button-next"></div>
						<div class="slider__prev client__trust_prev swiper-button-prev"></div>
					</div>
				</div>
			<?php endif; ?>

			<p>нас рекомендуют</p>

			<?php if( have_rows('recommend') ): ?>
				<div class="client__wrap">
					<div class="client__recommend swiper-container">
						<div class="swiper-wrapper">

						<?php while( have_rows('recommend') ): the_row(); 
							$title = get_sub_field('title');
							$img = get_sub_field('img');
							?>

							<div class="swiper-slide">
								<a data-fancybox="recommend" href="<?php echo $img; ?>">
									<img class="lazy"
										src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
										data-src="<?php echo $img; ?>"
										data-srcset="<?php echo $img; ?> 1x"
										alt="alt">
								</a>
								<p><?php echo $title; ?></p>
							</div>

						<?php endwhile; ?>

						</div>
					</div>
					<div class="slider__next client__recommend_next swiper-button-next"></div>
					<div class="slider__prev client__recommend_prev swiper-button-prev"></div>
				</div>
			<?php endif; ?>

		</div>
	</section>

	<section class="certifications" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/certifications--bg.jpg">
		<div class="container">
			
			<div class="client__title"><p>Сертификаты</p></div>

			<?php if( have_rows('certifications') ): ?>

				<div class="certifications__slider swiper-container">
					<div class="swiper-wrapper">
						
						<?php while( have_rows('certifications') ): the_row(); 
							$img = get_sub_field('img');
							$text = get_sub_field('text');
							?>

							<div class="swiper-slide">
								<a data-fancybox="certifications" href="<?php echo $img; ?>">
									<img class="lazy" 
										src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" 
										data-src="<?php echo $img; ?>" 
										data-srcset="<?php echo $img; ?> 1x" alt="alt">
								</a>
								<p>
									<?php echo $text; ?>
								</p>
							</div>

						<?php endwhile; ?>

					</div>
				</div>
			<?php endif; ?>

		</div>
	</section>

	<?php get_template_part( 'parts/form-catalog' ); ?>

	<section class="last-news">
		<div class="container">
			
			<div class="client__title"><p>Последние новости</p></div>

			<div class="last-news__list">
				<?php
					$args = array(
					'post_type' => 'novosti',
					'posts_per_page' => 3,
					);

					$query = new WP_Query( $args );

					while ( $query->have_posts() ): $query->the_post();

				?>

					<a href="<?php the_permalink(); ?>" class="last-news__item">
						<time datetime="1969-07-16">
							<?php echo get_the_date('Y-m-d'); ?>
						</time>
						<p><?php the_title(); ?></p>
						<span></span>
					</a>


				<?php
					endwhile; wp_reset_postdata();
				?>
								

			</div>

			<div class="last-news__btn">
				<a href="<?php echo get_home_url(); ?>/novosti/" class="btn btn--text">ЕЩЕ НОВОСТИ</a>
			</div>

		</div>
	</section>

<?php get_footer(); ?>