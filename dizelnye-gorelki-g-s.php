<?php
	require "variable/title.php";
	$title = "$producteSectionTitle_2_1";
	$description = "$producteSectiomDescription_2_1"; 
	require 'header.php';
	require 'variable/data-info-finish-2.php';
	require 'variable/data-description.php';

	$data = require('variable/data-info-finish-2.php');
	$burnersModal = $data['dizelnye-gorelki-g-s'];
?>

<main class="main pb25">
	<section class="bread-crumbs-section">
	 	<div class="container">
	 		<div class="bread-crumbs-content">
	 			<ul class="bread-crumbs-list">
					<li class="bread-crumbs-item"><a href="catalog" class="bread-crumbs-link bread-crumbs-link-next">Каталог</a></li>
					<li class="bread-crumbs-item">
						<a href="dizelnye-gorelki" class="bread-crumbs-link bread-crumbs-link-next">Дизельные горелки F.B.R.</a>
					</li>
					<li class="bread-crumbs-item"><a href="dizelnye-gorelki-g-s" class="bread-crumbs-link bread-crumbs-link-now">F.B.R. G S</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </section> 
	    
	 		 <section class="section section-one section-one-text-center">
	 		 	<div class="container">
	 		 		<h1>Купить дизельные горелки F.B.R. серии G S одноступенчатые (Ф.Б.Р.)</h1>
	 		 		<div class="text-title-category">
	 		 			<div class="left">
	 		 				<p>F.B.R. G S это мощные дизельные одноступенчатые горелки . Устройство работает при диапазоне 39,1 – 355 кВт.  Конструкция горелки позволит быстро получить доступ к основным узлам и механизмам при проведении сервисных работ.</p>
						</div>
			 		 	<div class="right">
			 		 		<p>Горелка отличается низким выбросом вредных отходов, а также низким уровнем шума благодаря эффективному вентилятору и шумопоглощающему кожуху.</p>
			 		 		<p>Если вы не смогли найти нужную модель, звоните по телефону  <b>+7 (495)-131-57-49</b> или напишите на почту <b>gtksnab@mail.ru</b>.</p>
	 		 			</div>
	 		 		</div>
	 		 	</div>

	 		 	<div class="container">
	 		 		<div class="section-one-content">
						<? foreach ($burnersModal as $key) { ?>
							<a href="<?= $key['burnersModalLink'] ?>" class="catalog-item">
								<span class="catalog-item-top"><img src="img/images/<?= $key['burnersModalLink'] ?>.png" alt="Газовые горелки F.B.R. GAS X"></span>
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