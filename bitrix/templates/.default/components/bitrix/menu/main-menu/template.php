<?if (!defined( "B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

	<?if(!empty($arResult)){?>
		<nav id="main">
			<ul>
				<?foreach($arResult as $arItem){?>
					<li>
						<a href="<?=$arItem['LINK'];?>" <?if(!empty($arItem[ 'SELECTED'])){?>class="selected"<?}?>>
					<?=$arItem['TEXT'];?>
				</a>
					</li>
					<?}?>
			</ul>
		</nav>
	<?}?>
