
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

	<?php

		// Check value exists.
		if( have_rows('content') ):

		    // Loop through rows.
		    while ( have_rows('content') ) : the_row();

		        // Текст на зеленом фоне 2 колонки
		        if( get_row_layout() == 'green-col2' ):
		            $text1 = get_sub_field('text1');
		            $text2 = get_sub_field('text2');
		        ?> 
					<section class="page--green">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-xl-5 col-lg-6">
									<?php echo $text1; ?>
								</div>
								<div class="col-xl-5 col-lg-6">
									<?php echo $text2; ?>
								</div>
							</div>
						</div>
					</section>
		        <?php  

		        // Текст на оранжевом фоне 2 колонки
		        elseif( get_row_layout() == 'accent-col2' ): 
		            $text1 = get_sub_field('text1');
		            $text2 = get_sub_field('text2');
		        	?> 
					<section class="page--accent">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-xl-5 col-lg-6">
									<?php echo $text1; ?>
								</div>
								<div class="col-xl-5 col-lg-6">
									<?php echo $text2; ?>
								</div>
							</div>
						</div>
					</section>
		        <?php

		        // Текст на зеленом фоне 1 колонки
		        elseif( get_row_layout() == 'accent-col1' ): 
		            $text = get_sub_field('text');
		        	?> 
					<section class="page--accent">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-xl-7 col-lg-10">
									<?php echo $text; ?>
								</div>
							</div>
						</div>
					</section>
		        <?php  

		        // Текст на оранжевом фоне 1 колонки
		        elseif( get_row_layout() == 'green-col1' ):
		            $text = get_sub_field('text');
		        	?> 
					<section class="page--green">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-xl-7 col-lg-10">
									<?php echo $text; ?>
								</div>
							</div>
						</div>
					</section>
		        <?php  

		        // Текст 2 колонки
		        elseif( get_row_layout() == 'text-col2' ):
		            $title = get_sub_field('title');
		            $text1 = get_sub_field('text1');
		            $text2 = get_sub_field('text2');
		        	?> 
					<section class="page--white">
						<div class="container">

							<h2><?php echo $title; ?></h2>

							<div class="row justify-content-center">
								<div class="col-xl-5 col-lg-6">
									<?php echo $text1; ?>
								</div>
								<div class="col-xl-5 col-lg-6">
									<?php echo $text2; ?>
								</div>
							</div>

						</div>
					</section>
		        <?php  

		        // Текст 1 колонка
		        elseif( get_row_layout() == 'text-col1' ):
		            $title = get_sub_field('title');
		            $text = get_sub_field('text');
		        	?> 

		        	<section class="page--white">
						<div class="container">
							<h2><?php echo $title; ?></h2>

							<div class="row justify-content-center">
								<div class="col-xl-7 col-lg-10">
									<?php echo $text; ?>
								</div>
							</div>
						</div>
					</section>
		        <?php  

		        // Список с иконками
		        elseif( get_row_layout() == 'list-icon' ):
		            $title = get_sub_field('title');
		            $sub_title = get_sub_field('sub_title');
		        	?> 
					<section class="page--denefits">
						<div class="container">
							
							<h2><?php echo $title; ?></h2>
							<h3><?php echo $sub_title; ?></h3>

							<?php if( have_rows('list') ): ?>
								<div class="page--denefits__list">
								<?php while( have_rows('list') ): the_row(); 
									$title = get_sub_field('title');
									$text = get_sub_field('text');
									$img = get_sub_field('img');
									?>

									<div class="page--denefits__item">
										<div class="page--denefits__img">
											<img src="<?php echo $img; ?>" alt="">
										</div>
										<span></span>
										<p><?php echo $title; ?></p>
										<p class="page--denefits__item_min">
											<?php echo $text; ?>
										</p>
									</div>

								<?php endwhile; ?>
								</div>
							<?php endif; ?>

						</div>
					</section>
		        <?php  

		        // Таблица
		        elseif( get_row_layout() == 'table' ):
		            $title = get_sub_field('title');
		            $sub_title = get_sub_field('sub_title');
		        	?>

					<section class="table">
						<div class="container">

							<div class="row justify-content-center">
								<div class="col-xl-10">
									<table>
										<tr>
											<th colspan="22"><b><?php echo $title; ?></b></th>
										</tr>
										<tr>
											<td rowspan="20"><b><?php echo $sub_title; ?></b></td>
										</tr>
										<tr>
											<td>1</td>
											<td>2</td>
											<td>3</td>
											<td>4</td>
											<td>5</td>
											<td>6</td>
											<td>7</td>
											<td>8</td>
											<td>9</td>
											<td>10</td>
											<td>11</td>
											<td>12</td>
											<td>13</td>
											<td>14</td>
											<td>15</td>
											<td>16</td>
											<td>17</td>
											<td>18</td>
											<td>19</td>
											<td>20</td>
											<td>21</td>
										</tr>
									</table>
								</div>
							</div>

						</div>
					</section>

		        <?php  

		        endif;

		    // End loop.
		    endwhile;

		// No value.
		else :
		    // Do something...
		endif;
	?>


	<?php get_template_part( 'parts/delivery' ); ?>

	<section class="page--info">
		<div class="container">

			<h3>СМОТРЕТЬ ОСТАЛЬНУЮ ПРОДУКЦИЮ ИЗОЛЯЦИЯ ТРУБ И ДЕТАЛЕЙ ДЛЯ ЖКХ</h3>
			
			<?php if( have_rows('still', 'option') ): ?>
				<div class="page--info__list">
					<?php while( have_rows('still', 'option') ): the_row(); 
						$img = get_sub_field('img');
						$text = get_sub_field('text');
						$link = get_sub_field('link');
						?>

						<a href="<?php echo $link; ?>" class="page--info__item">
							<img 
								src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
								data-src="<?php echo $img; ?>"
								data-srcset="<?php echo $img; ?> 1x"
								class="lazy"
								alt="alt">
							<span></span>
							<p><?php echo $text; ?></p>
						</a>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>