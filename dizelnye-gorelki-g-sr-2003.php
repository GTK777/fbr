<?php
	require "variable/title.php";
	$title = "$producteSectionTitle_2_3";
	$description = "$producteSectiomDescription_2_3"; 
	require 'header.php';
	require 'variable/data-info-finish-2.php';
	require 'variable/data-description.php';

	$data = require('variable/data-info-finish-2.php');
    $burnersModal = $data['dizelnye-gorelki-g-sr-2003'];
    $burnersModal2 = $data['dizelnye-gorelki-g-sr-2003-2'];
    
    $nameBurnsPage = "F.B.R. G SR 2003";
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
					<li class="bread-crumbs-item"><a href="dizelnye-gorelki-g-s-2003" class="bread-crumbs-link bread-crumbs-link-now"><?= $nameBurnsPage ?></a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </section> 
	
	 		 <section class="section section-one section-one-text-center">
	 		 	<div class="container">
	 		 		<h1>Купить жидкотопливные горелки малой мощности <?= $nameBurnsPage ?> (Ф.Б.Р.)</h1>
	 		 		<div class="text-title-category">
	 		 			<div class="left">
	 		 				<p> F.B.R. G SR 2003  -  Дизельная горелка предназначенная для работы с чугунными котлами.  Оснащена короткой пламенной трубой. Эргономичная конструкция позволит получить доступ к основным узлам и механизмам для проведения сервисных работ.</p>
						</div>
			 		 	<div class="right">
			 		 		<p>Горелка работает при диапазоне от 14,2 до 59,2 кВт. </p>
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
						<? foreach ($burnersModal2 as $key) { ?>
							<a href="<?= $key['burnersModalLink'] ?>" class="catalog-item">
								<span class="catalog-item-top"><img src="img/images/<?= $key['burnersModalLink'] ?>.jpg" alt="Газовые горелки F.B.R. GAS X"></span>
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