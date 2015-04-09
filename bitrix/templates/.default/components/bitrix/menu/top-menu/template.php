<?if (!defined( "B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult)){?>
	<nav id="top">
		<ul>
			<?foreach($arResult as $arItem){?>
				<li>
					<a href="<?=$arItem['LINK'];?>" <?if(isset($arItem[ 'PARAMS'][ 'ICON_FILE'])){?>
						style="background: url('<?=$arItem['PARAMS']['ICON_FILE']?>') no-repeat 0 0;">
					<?}?>
					<?=$arItem['TEXT'];?>
				</a>
				</li>
				<?}?>
		</ul>
	</nav>
<?}?>
