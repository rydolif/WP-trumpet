<?php
	/**
		* Template name: О нас
	*/
 ?>


<?php get_header(); ?>

	<section class="grums">
		<div class="container">
			<?php get_template_part( 'parts/grums' ); ?>
		</div>
	</section>
	
 	<section class="about--hero contacts--hero">
		<div class="about--hero__container container">

			<div class="hero__title--page hero__title">
				<h1><?php the_title(); ?></h1>
			</div>

			<img class="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/about--hero.png" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about--hero.png" data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about--hero.png 1x" alt="alt">

			<p>
				ООО «Новосибирский завод предизолированных труб» с 1998 года специализируется на 
				<br>выпуске теплогидроизолированных пенополиуретаном труб и фасонных изделий 
				<br>трубопроводов различного назначения диаметром от 32 до 1020 мм по стальной трубе в
				<br>полиэтиленовой и оцинкованной оболочке с системой СОДК (оперативного дистанционного 
				<br>контроля) методом «труба в трубе» по ГОСТ 30732-2006. 
			</p>

		</div>
	</section>

	<section class="about--content">
		<div class="container">
			
			<h3>
				Завод оснащен современным высокотехнологичным оборудованием, обеспечивающим 
				<br>выпуск 150 км трубопроводов в год для различных областей применения:
			</h3>

			<div class="about--content__list">
				
				<div class="about--content__item">
					<div class="about--content__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about--icon1.svg" alt="">
					</div>
					<span></span>
					<p>Теплоснабжения <br>и горячего <br>водоснабжения</p>
				</div>

				<div class="about--content__item">
					<div class="about--content__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about--icon2.svg" alt="">
					</div>
					<span></span>
					<p>Газопроводы низкого <br>давления <br>и внутрипромыслове<br> шлейфы</p>
				</div>

				<div class="about--content__item">
					<div class="about--content__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about--icon3.svg" alt="">
					</div>
					<span></span>
					<p>Подачи воды и водоотведения <br>с устройством для греющего <br>электрического кабеля</p>
				</div>

				<div class="about--content__item">
					<div class="about--content__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about--icon4.svg" alt="">
					</div>
					<span></span>
					<p>Пульпопроводы и <br>модульные системы <br>шахтного дренажа</p>
				</div>

				<div class="about--content__item">
					<div class="about--content__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about--icon5.svg" alt="">
					</div>
					<span></span>
					<p>Нефтепроводы</p>
				</div>
				
			</div>

		</div>
	</section>

	<section class="about--text">
		<div class="container">
			<p>
				Трубопроводы рассчитаны на долговременную транспортировку теплоносителей с 
				<br>температурой до 150°С (сертификат института МРА Ганновер подтверждает функционирование 
				<br>ПУ системы в течение 30 лет – 157°С). По специальному заказу может быть выполнена 
				<br>теплоизоляция труб, рассчитанная на температуру эксплуатации до 170°С и конструктивно 
				<br>подразделяются:
			</p>
		</div>
	</section>

	<section class="about--catalog">
		<div class="container">

			<div class="about--catalog__content">

				<div class="about--catalog__content_text">
					<p>для подземной прокладки в <br>полиэтиленовой оболочке</p>
					<p>для надземной прокладки в <br>оцинкованной оболочке</p>
					<p>для подводной прокладки в <br>обетонированной оболочке</p>
				</div>

				<img class="about--catalog__content_img lazy" 
					src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" 
					data-src="<?php echo get_template_directory_uri(); ?>/assets/img/about--catalog.jpg" 
					data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about--catalog.jpg 1x" 
					alt="alt">
				
			</div>
			
			<div class="about--catalog__btn">
				<a href="#" class="btn btn--text">перейти в каталог</a>
			</div>
			
		</div>
	</section>

	<section class="about--supply certifications" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/certifications--bg.jpg">
		<div class="container">
			
			<h3>Поставка осуществляется как отдельными элементами трубопроводов, так и полнокомплектная:</h3>

			<div class="about--supply__list">
				
				<div class="about--supply__item">Трубы</div>
				<div class="about--supply__item">Сильфонные И П-Образные Rомпенсаторы</div>
				<div class="about--supply__item">Элементы Изоляции Стыков</div>
				<div class="about--supply__item">Отводы</div>
				<div class="about--supply__item">Неподвижные и скользящие опоры</div>
				<div class="about--supply__item">Запорная Арматура</div>
				<div class="about--supply__item">Тройники</div>
				<div class="about--supply__item">Переходы</div>

			</div>

		</div>
	</section>

	<section class="about--text-before about--text">
		<div class="container">
			<p>
				Все изделия сертифицированы соответствующими органами Российской Федерации.
			</p>
			<p>
				Современное оборудование, прогрессивные технологии и материалы, квалифицированный персонал, а также многолетний опыт работы позволяет предприятию выпускать продукцию, отвечающую самым строгим требованиям  по надежности, долговечности и экологической безопасности.
			</p>
			<p>
				На продукцию завода установлена 5-летняя гарантия.
			</p>			
		</div>
	</section>

<?php get_footer(); ?>

