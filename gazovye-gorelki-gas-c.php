<?php
	require "variable/title.php";
	$title = "$producteSectionTitle_1_4";
	$description = "$producteSectiomDescription_1_4"; 
	require 'header.php';
	require 'variable/data-info-finish.php';
	require 'variable/data-description.php';

	$data = require('variable/data-info-finish.php');
	$burnersModal = $data['gazovye-gorelki-gas-c'];
?>

<main class="main pb25">
	<section class="bread-crumbs-section">
	 	<div class="container">
	 		<div class="bread-crumbs-content">
	 			<ul class="bread-crumbs-list">
					<li class="bread-crumbs-item"><a href="catalog" class="bread-crumbs-link bread-crumbs-link-next">Каталог</a></li>
					<li class="bread-crumbs-item">
						<a href="gazovye-gorelki" class="bread-crumbs-link bread-crumbs-link-next">Газовые горелки F.B.R.</a>
					</li>
					<li class="bread-crumbs-item"><a href="boilers" class="bread-crumbs-link bread-crumbs-link-now">F.B.R. GAS /C</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </section> 
	   
	 		 <section class="section section-one section-one-text-center">
	 		 	<div class="container">
	 		 		<h1>Купить газовые горелки F.B.R. GAS /C (Ф.Б.Р.)</h1>
	 		 		<div class="text-title-category">
	 		 			<div class="left">
	 		 				<p>Газовые горелки F.B.R. GAS /C предназначены для работы с теплогенераторами, системами подачей воздуха и печами. Устройства работают при диапазоне от 12 до 70 кВт.  Для удобства пользователя предусмотрено как ручное, так и автоматическое управление.</p>
							<p>Нагрев топлива регулируется включением и выключением горелки.</p>
						</div>
			 		 	<div class="right">
			 		 		<p>Точная настройка сгорания топлива значительно повышает КПД горелки и способствует снижению вредных выбросов.</p>
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