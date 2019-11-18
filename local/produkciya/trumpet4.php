<?php
	/**
		* Template name: Отвод стальной
	*/
 ?>


<?php get_header(); ?>

	<section class="grums">
		<div class="container">
			<?php get_template_part( 'parts/grums' ); ?>
		</div>
	</section>

	<section class="page--hero contacts--hero">
		<div class="container">

			<div class="hero__title--page hero__title">
				<h1><?php the_title(); ?></h1>
			</div>

			<img src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
				class="lazy" 
				data-src="<?php the_post_thumbnail_url(); ?>" 
				data-srcset="<?php the_post_thumbnail_url(); ?> 1x" 
				alt="alt">

		</div>
	</section>

	<section class="page--denefits">
		<div class="container">
			
			<h2>Преимущества и сфера применения</h2>
			<h3>Ряд преимуществ полиэтиленовой рубашки, по сравнению с другими материалами:</h3>

			<div class="page--denefits__list">
				
				<div class="page--denefits__item">
					<div class="page--denefits__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/denefits1.svg" alt="">
					</div>
					<span></span>
					<p>Низкие теплопотери</p>
				</div>

				<div class="page--denefits__item">
					<div class="page--denefits__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/denefits2.svg" alt="">
					</div>
					<span></span>
					<p>Переносимость <br>температуры <br>от -80° до +130° С</p>
				</div>

				<div class="page--denefits__item">
					<div class="page--denefits__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/denefits3.svg" alt="">
					</div>
					<span></span>
					<p>Водонепроницаемость</p>
				</div>

				<div class="page--denefits__item">
					<div class="page--denefits__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/denefits4.svg" alt="">
					</div>
					<span></span>
					<p>Отличные <br>антикоррозийные <br>характеристики</p>
				</div>

				<div class="page--denefits__item">
					<div class="page--denefits__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/denefits5.svg" alt="">
					</div>
					<span></span>
					<p>Экологическая безопасность</p>
				</div>
				
				<div class="page--denefits__item">
					<div class="page--denefits__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/denefits6.svg" alt="">
					</div>
					<span></span>
					<p>Неспособность к гниению</p>
				</div>
				
				<div class="page--denefits__item">
					<div class="page--denefits__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/denefits7.svg" alt="">
					</div>
					<span></span>
					<p>Долгий срок службы</p>
				</div>
				
			</div>

		</div>
	</section>

	<section class="page--accent">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-5 col-lg-6">
					<p>
						В основном стальные отводы с ППУ изоляцией в 
						полиэтиленовой оболочке применяют для теплосетей в 
						промышленных и бытовых магистралях (горячее 
						водоснабжение и отопление). Но также используют, и в 
						газовых трубопроводах, и в нефтяных.
					</p>
				</div>
				<div class="col-xl-5 col-lg-6">
					<p>
						Учитывая то, что их эксплуатация рассчитана на срок от 
						30 лет и выше, применение этого материала находят не 
						только удобным, но и выгодным. А если брать в расчет, 
						что расходы на строительство, обслуживание и ремонт 
						снижаются в разы, то в выигрыше оказываются все.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="page--white">
		<div class="container">

			<h2>Что такое отвод с ППУ изоляцией?</h2>

			<div class="row justify-content-center">
				<div class="col-xl-5 col-lg-6">
					<p>
						Отвод применяется в местах соединения труб, где 
						нужно провести поворот магистрали. Деталь имеет 
						изгиб с уже заданным углом. И, как обычный прямой 
						кусок трубы, уже имеет изоляцию из 
						пенополиуретана. Но этот отличный теплоизолятор 
						нуждается в собственной защите от внешних 
						воздействий. Поэтому его покрывают сверху 
						защитным слоем. 
					</p>
					<p>
						Как правило изделия с защитой из полиэтиленовой 
						пленки применяют в коммуникациях, которые 
						расположены под землей. Причиной выступают 
						повышенные гидроизоляционные свойства материала 
						и невозможность нанесения механических 
						повреждений.
					</p>
					<p>
						Тогда как трубы в оболочке из оцинковки располагают 
						над поверхностью земли.
					</p>					
				</div>
				<div class="col-xl-5 col-lg-6">
					<p>
						Применяются два вида покрытия:
					</p>
					<p class="page__decor">
						Полиэтилен. Синтетический полимер, который 
						хорошо переносит нагрузки, связанные с химическим 
						и температурным воздействием. Также является 
						отличным диэлектриком.
					</p>
					<p class="page__decor">
						Оцинковка. Пенополиуретан закрывают тонким 
						листом из металла. А его, в свою очередь, покрывают 
						слоем, который обеспечивает защиту от коррозии.
					</p>
				</div>
			</div>

		</div>
	</section>

	<section class="page--green">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-5 col-lg-6">
					<p>
						До недавнего времени потери тепла в трубопроводах 
						имели катастрофические цифры. Конечный 
						потребитель не получал необходимой ему температуры 
						из-за плохой теплоизоляции магистрали. Проблема в 
						общем решалась. Была внедрена технология утепления 
						магистрали с помощью пенополиуретана. Потери 
						ощутимо снизились, но вопрос все же оставался 
						открытым.
					</p>
				</div>
				<div class="col-xl-5 col-lg-6">
					<p>
						Из-за того, что места изгибов труб утеплялись кустарно 
						или часто оставались вовсе без изоляции, остывание всей 
						системы происходило быстро. Но с тех пор, как стал 
						применяться отвод стальной с ППУ изоляцией в 
						защитной оболочке из ПЭ полиэтилена, ситуация в корне 
						изменилась. <br>
						Потери минимизировались. Потребитель получает свой 
						продукт в полном объеме, согласно оплаты.
					</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'parts/delivery' ); ?>

	<?php get_template_part( 'parts/still' ); ?>

<?php get_footer(); ?>