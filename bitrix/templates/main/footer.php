			</main>
			<!-- .content -->

		</div>
		<!-- .wrapper -->
		<?if($_SERVER[ 'REQUEST_URI'] !='/404.php' ){?>
			<?if($_SERVER[ 'REQUEST_URI']=='/detail_item.php' ){?>
				<section class="technology_module">
					<h2>Технологии</h2>
					<ul>
						<li>
							<a href="#"><img src="/upload/tech1.jpg"><span>Офсетная печать</span></a>
						</li>
						<li>
							<a href="#"><img src="/upload/tech2.jpg"><span>Цифровая печать</span></a>
						</li>
						<li>
							<a href="#"><img src="/upload/tech3.jpg"><span>Трафаретная печать</span></a>
						</li>
						<li>
							<a href="#"><img src="/upload/tech4.jpg"><span>Ламинирование</span></a>
						</li>
						<li>
						<a href="#"><img src="/upload/tech5.jpg"><span>Лакирование</span>
						</a>
						</li>
						<li>
						<a href="#"><img src="/upload/tech6.jpg"><span>Тиснение</span>
						</a>
						</li>
						<li>
						<a href="#"><img src="/upload/tech7.jpg"><span>Высечка</span>
						</a>
						</li>
					</ul>
				</section>
			<?}?>
			<section id="make-order" <?if($_SERVER[ 'REQUEST_URI']=='/detail_item.php' ){?>class="product-order"
			<?}?>>
			<a href="#"><span>Оформить заказ</span></a>
			</section>
			<?if($_SERVER[ 'REQUEST_URI']=='/detail_item.php' ){?>
			<section class="diferent-product">
			<ul>
			<li>
			<a href="#"><img class="svg" src="/upload/svg/calendar.svg">Календари настенные
			<p>Бумажные пакеты из дизайнерских и мелованных бумаг, крафта</p>
			</a>
			</li>
			<li>
			<a href="#"><img class="svg" src="/upload/svg/table-calendar.svg">Календари карманные
			<p>Бумажные пакеты из дизайнерских и мелованных бумаг, крафта</p>
			</a>
			</li>
			</ul>
			<a href="#" class="all-product"><span>Вся Продукция</span></a>
			</section>
			<?}?>
		<?}?>
		<footer class="footer">
		<section id="footer-bottom">
		<?if($_SERVER[ 'REQUEST_URI'] !='/404.php' ){?><a href="#up"><span>Наверх</span></a>
		<?}?>
		<a id="developer" href="http://web-izmerenie.ru/">Сделано в <span></span></a>
		</section>
		</footer>
		<!-- .footer -->

	</body>

</html>