<?php
	require "variable/title.php";
	$title = "$producteSectionTitle_4_1";
	$description = "$producteSectiomDescription_4_1"; 
	require 'header.php';
	require 'variable/data-info-finish-5.php';
	require 'variable/data-description.php';

	$data = require('variable/data-info-finish-5.php');
	$burnersModal = $data['gazodizelnye-gorelki-gm-x'];
?>

<main class="main pb25">
	<section class="bread-crumbs-section">
	 	<div class="container">
	 		<div class="bread-crumbs-content">
	 			<ul class="bread-crumbs-list">
					<li class="bread-crumbs-item"><a href="catalog" class="bread-crumbs-link bread-crumbs-link-next">Каталог</a></li>
					<li class="bread-crumbs-item">
						<a href="gazodizelnye-gorelki" class="bread-crumbs-link bread-crumbs-link-next">Газодизельные горелки F.B.R.</a>
					</li>
					<li class="bread-crumbs-item"><a href="#" class="bread-crumbs-link bread-crumbs-link-now">F.B.R.  GM X</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </section> 
	 
	 		 <section class="section section-one section-one-text-center">
	 		 	<div class="container">
	 		 		<h1>Купить газодизельные горелки F.B.R. GM X (Ф.Б.Р.)</h1>
	 		 		<div class="text-title-category">
	 		 			<div class="left">
	 		 				<p>F.B.R GM X – это газодизельная горелка. Тип регулирования – одноступенчатая. Степень нагрева регулируется внешней автоматикой. Наддувная горелка используется специальный вентилятор с минимальными шумами во время работы. </p>
						</div>
			 		 	<div class="right">
			 		 		<p>Горелка характеризуется высоким КПД при минимальном выбросе вредных веществ. Устройство работает при диапазоне 34 до 232 кВт. </p>
			 		 		<p>Если вы не смогли найти нужную модель, звоните по телефону  <b>+7 (495)-131-57-49</b> или напишите на почту <b>gtksnab@mail.ru</b>.</p>
	 		 			</div>
	 		 		</div>
	 		 	</div>

	 		 	<div class="container">
	 		 		<div class="section-one-content">
						<? foreach ($burnersModal as $key) { ?>
							<a href="<?= $key['burnersModalLink'] ?>" class="catalog-item">
								<span class="catalog-item-top"><img src="img/images/gazodizelnye-gorelki-gm-x.jpg" alt="Газовые горелки F.B.R. GAS X"></span>
								<span class="catalog-item-bottom"><span><?= $key['burnersModalName'] ?></span></span>
								<span class="go-over-page">Перейти</span>
							</a>
						<? } ?>
	 		 		</div>
	 		 	</div>
	 		 </section>
	 	</main>

<?php 
	require 'footer.php';
?>