<section id="make-order">
	<a class="module-window" href="#make-order-form"><span>Рассчитать заказ</span></a>
</section>
<form id="make-order-form" class="form-order" enctype="multipart/form-data" method="POST" action="/ajax/order.php">
	<h1>Рассчитать заказ</h1>
	<a class="close" href="#close" title="закрыть"></a>
	<div class="form-body">
		<ul class="form-items">
			<li><input name="name" maxlength="50" type="text" placeholder="ИМЯ"></li>
			<li><input name="company" maxlength="50" type="text" placeholder="КОМПАНИЯ"></li>
			<li><input name="email" maxlength="50" type="email" class="require" placeholder="EMAIL*"></li>
			<li><input name="phone" maxlength="15" type="text" class="require" placeholder="ТЕЛЕФОН*"></li>
			<li>
				<p>Поля отмеченные знаком *, обязательны для заполнения</p>
				<p>Выберите изображение или архив</p>
				<p>Вставьте ссылку на файлы</p>
			</li>
		</ul>
		<div id="right-item">
			<textarea name="message" maxlength="300" placeholder="ДЕТАЛИ ЗАКАЗА"></textarea>
			<input name="uploaded_file" id="uploaded_file" type="file" data-browse="Прикрепить файл">
			<input name="link" maxlength="100" type="text" placeholder="ССЫЛКА НА ФАЙЛ">
		</div>
		<input type="submit" value="Отправить">
		<progress id="progressbar" value="0" max="100"></progress>
	</div>
</form>
