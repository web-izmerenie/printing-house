			</main>
			<!-- .content -->

		</div>
		<!-- .wrapper -->
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
			)
		);?>
		<footer class="footer">
		<section id="footer-bottom">
		<?if($_SERVER[ 'REQUEST_URI'] !='/404.php' ){?><a href="#up"><span>Наверх</span></a>
		<?}?>
		<a id="developer" href="http://web-izmerenie.ru/">Сделано в <span></span></a>
		</section>
		</footer>
		<!-- .footer -->
		<div class="overlay"></div>
	</body>

</html>
