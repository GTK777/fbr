<?php
	require "variable/title.php";
	$title = "$producteSectionTitle_5_2";
	$description = "$producteSectiomDescription_5_2"; 
	require 'header.php';
	require 'variable/data-info-finish-4.php';
	require 'variable/data-description.php';

	$data = require('variable/data-info-finish-4.php');
    $burnersModal = $data['gazomazutnye-gorelki-kn-m-el'];
    
    $nameSectionPage = "F.B.R. KN /M EL";
?>

<main class="main pb25">
	<section class="bread-crumbs-section">
	 	<div class="container">
	 		<div class="bread-crumbs-content">
	 			<ul class="bread-crumbs-list">
					<li class="bread-crumbs-item"><a href="catalog" class="bread-crumbs-link bread-crumbs-link-next">Каталог</a></li>
					<li class="bread-crumbs-item">
						<a href="gazomazutnye-gorelki" class="bread-crumbs-link bread-crumbs-link-next">Газомазутные горелки F.B.R.</a>
					</li>
					<li class="bread-crumbs-item"><a href="#" class="bread-crumbs-link bread-crumbs-link-now"><?= $nameSectionPage ?></a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </section> 
	 
	 		 <section class="section section-one section-one-text-center">
	 		 	<div class="container">
	 		 		<h1>Купить газомазутные горелки <?= $nameSectionPage ?></h1>
	 		 		<div class="text-title-category">
	 		 			<div class="left">
	 		 				<p>F.B.R KN /M EL -  это комбинированные горелки с электронной модуляцией для работы с газом и мазутом. Представленные модели относятся к двухступенчатым и модулируемым. Горелки оснащены возможностью механического управления выходной мощностью. </p>
						</div>
			 		 	<div class="right">
			 		 		<p>Горелка характеризуется высоким КПД при минимальном выбросе вредных веществ. Конструкция горелки позволит быстро получить доступ к основным узлам и механизмам при проведении сервисных работ.</p>
			 		 		<p>Если вы не смогли найти нужную модель, звоните по телефону  <b>+7 (495)-131-57-49</b> или напишите на почту <b>gtksnab@mail.ru</b>.</p>
	 		 			</div>
	 		 		</div>
	 		 	</div>

	 		 	<div class="container">
	 		 		<div class="section-one-content">
						<? foreach ($burnersModal as $key) { ?>
							<a href="<?= $key['burnersModalLink'] ?>" class="catalog-item">
								<span class="catalog-item-top"><img src="img/images/<?= $key['burnersModalLink'] ?>.jpg" alt="Горелки "></span>
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