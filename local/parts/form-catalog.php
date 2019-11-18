	<section class="section-catalog section-order" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/tabs--bg.jpg">
		<div class="container">
			
			<form class="section-order__form section-catalog__form form">
				<div class="section-order__block">
					<h3>Форма на запрос каталога</h3>
					<div class="section-order__input">
						<input type="text" name="name" placeholder="Ваше имя" required>
					</div>
					<div class="section-order__input">
						<input type="email" name="mail" placeholder="Ваша почта" required>
					</div>
					<div class="section-order__input">
						<button class="btn btn--accent">Отправить форму</button>
					</div>
					<div class="section-order__input">
						<input type="checkbox" id="ok2">
						<label for="ok2">Выражаю свое согласие<br> на обработку персональных<br> данных.</label>
					</div>
				</div>
				<img class="section-catalog__img lazy" src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog--img.jpg" data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog--img.jpg 1x" alt="alt">
			</form>

		</div>
	</section>