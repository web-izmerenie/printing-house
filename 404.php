<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404");?>

<section class="not-found">
	<img src="<?=$tplPath;?>images/404.png">
	<h1>Ошибка 404</h1>
	<p>Введен неверный адрес, или такой страницы больше нет.</p>
	<a href='/' class="button2"><span>Вернться на главную</span></a>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
