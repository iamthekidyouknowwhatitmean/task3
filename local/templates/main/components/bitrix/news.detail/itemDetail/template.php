<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php
	$photoId = $arResult['PROPERTIES']['detail_picture']['VALUE'];
?>

<?php if(!empty($arResult['ID'])): ?>
	<div class="article-card">
		<div class="article-card__title"><?=$arResult['PROPERTIES']['detail_title']['VALUE']?></div>
		<div class="article-card__date"><?=$arResult['PROPERTIES']['detail_date']['VALUE']?></div>
		<div class="article-card__content">
			<div class="article-card__image sticky"><img 
														 src="<?=$arResult['PROPERTIES']['photos'][$photoId]['src']?>" alt="" data-object-fit="cover"/>
			</div>
			<div class="article-card__text">
				<div class="block-content" data-anim="anim-3">
					<?php if(!empty($arResult['PROPERTIES']['description']['VALUE'])):?>
							<?php foreach($arResult['PROPERTIES']['description']['VALUE'] as $x):?>
								<?php if(!empty($x)):?>
									<p><?=$x?></p>
								
								<?php endif;?>
							<?php endforeach;?>
					<?php endif;?>
				</div>
				<a class="article-card__button" href="<?=$arResult['LIST_PAGE_URL']?>">Назад к новостям</a></div>
		</div>
	</div>
<?php endif; ?>