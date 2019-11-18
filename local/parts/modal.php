
	<div class="modal" id="order">

		<button class="modal__close order_close" type="button">
			<span></span>
			<span></span>
		</button>

		<div class="modal__container">

			<form action="sendmail.php" class="modal__form form" method="post">
				<h3>Отправить заявку на продукцию</h3>
				<input type="hidden" name="subject" value="Узнать подробнее!">

				<div class="modal__form_line">
					<input type="text" name="name" placeholder="Ваше имя" required>
				</div>
				<div class="modal__form_line">
					<input type="email" name="mail" placeholder="E-mail" required>
				</div>
				<div class="modal__form_line">
					<input type="tel" name="phone" placeholder="Ваш телефон" required>
				</div>
				<div class="modal__form_textarea">
					<textarea name="textarea" placeholder="Сообщение" required></textarea>
				</div>
				<div class="modal__form_line">
					<button type="submit" class="btn btn--green" name="submit">Отправить</button>
				</div>
				<div class="modal__form_line">
					<input type="checkbox" id="modal__ok">
					<label for="modal__ok">Выражаю свое согласие<br> на обработку персональных<br> данных.</label>
				</div>
			</form>

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

			<form action="sendmail.php" class="modal__form form" method="post">
				<h3>Отправить заявку на продукцию</h3>
				<input type="hidden" name="subject" value="Узнать подробнее!">

				<div class="modal__form_line">
					<input type="text" name="name" placeholder="Ваше имя" required>
				</div>
				<div class="modal__form_line">
					<input type="email" name="mail" placeholder="E-mail" required>
				</div>
				<div class="modal__form_line">
					<input type="tel" name="phone" placeholder="Ваш телефон" required>
				</div>
				<div class="modal__form_line">
					<input type="checkbox" id="call__ok" required>
					<label for="call__ok">Выражаю свое согласие на <br>обработку персональных данных.</label>
				</div>
				<div class="modal__form_line">
					<button type="submit" class="btn btn--green" name="submit">Отправить</button>
				</div>
			</form>

		</div>
	</div>

	<div class="modal" id="thanks">
		<button class="modal__close thanks_close" type="button">
			<span></span>
			<span></span>
		</button>
		<h3>Спасибо за доверие!</h3>
		<p>Мы обязательно с вами свяжемся!</p>
	</div>