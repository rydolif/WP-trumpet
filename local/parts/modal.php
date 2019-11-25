
	<div class="modal" id="order">

		<button class="modal__close order_close" type="button">
			<span></span>
			<span></span>
		</button>

		<div class="modal__container">

			<div class="modal__form">
				<?php the_field('modal_product', 'option'); ?>
			</div>

			<div class="modal__content">
				<p>В поле "Сообщение" необходимо указать:</p>

				<ol>
					<li>Сорт стали трубы-носителя (10, 20, 17Г2С, 09Г2С и т.д.) Труба Ст 20 159х4,5-2-ППУ-ПЭ.</li>
					<li>Тип изоляции 1 или 2 (по ГОСТ 30732-2006) (для Западной Сибири рекомендуется тип 2) Труба Ст 20 159х4,5-2-ППУ-ПЭ.</li>
					<li>Толщину стенки стальной трубы в мм. Труба Ст 20 159х4,5-2-ППУ-ПЭ.</li>
					<li>Тип стальной трубы: сварная прямошовная, бесшовная и т.д. Труба (бесшовная) Ст 20 159х4,5-2-ППУ-ПЭ.</li>
					<li>Тип оболочки: спиральновитая из оцинкованной стали (ОЦ) или полиэтиленовая (ПЭ). Труба Ст 20 159х4,5-2-ППУ-ПЭ.</li>
					<li>Наличие или отсутствие системы ОДК.</li>
				</ol>
			</div>

		</div>
	</div>

	<div class="modal" id="call">

		<button class="modal__close call_close" type="button">
			<span></span>
			<span></span>
		</button>

		<div class="modal__container--call modal__container">
			
			<?php the_field('modal_call', 'option'); ?>

		</div>
	</div>