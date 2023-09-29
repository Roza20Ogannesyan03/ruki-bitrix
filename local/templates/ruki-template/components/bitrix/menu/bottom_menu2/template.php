<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<?php if (!empty($arResult)) : ?>


	<ul class="menu__column">
		<?php foreach ($arResult as $arItem) : ?>

			<? if ($arItem["SELECTED"]) : ?>
				<li class="menu__item" style="text-decoration: underline; text-underline-offset: 6px; text-decoration-color:#cfb595;">
					<a href="<?php echo $arItem['LINK'] ?>"><?= $arItem['TEXT']; ?></a>
				</li>
			<? else : ?>
				<li class="menu__item"><a href="<?php echo $arItem['LINK'] ?>"><?= $arItem['TEXT']; ?></a></li>
			<? endif ?>


		<? endforeach; ?>
	</ul>

<?php endif; ?>