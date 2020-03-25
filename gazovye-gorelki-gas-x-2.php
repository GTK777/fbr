<?php
	require "variable/title.php";
	$title = "$producteSectionTitle_1_6";
	$description = "$producteSectiomDescription_1_6"; 
	require 'header.php';
	require 'variable/data-info-finish.php';
	require 'variable/data-description.php';

	$data = require('variable/data-info-finish.php');
	$burnersModal = $data['gazovye-gorelki-gas-x-2'];
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
					<li class="bread-crumbs-item"><a href="boilers" class="bread-crumbs-link bread-crumbs-link-now">F.B.R. GAS X /2</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </section> 
	  
	 		 <section class="section section-one section-one-text-center">
	 		 	<div class="container">
	 		 		<h1>Купить газовые горелки F.B.R. GAS X /2 (Ф.Б.Р.)</h1>
	 		 		<div class="text-title-category">
	 		 			<div class="left">
	 		 				<p>Газовая горелка F.B.R.  GAS X /2  производиться в Италии. Устройство предназначено для работы с печами, темплогенераторами, котлами и системами подачи воздуха.  Горелка используется для работы с магистральным, сжиженным и каменноугольном биогазе. </p>
			 				<p>Значительно снизить шум даже в условиях предела мощности  помогает высокоэффективный вентилятор, а также защитный кожух. </p>
						</div>
			 		 	<div class="right">
							<p>Степень регулировки модели делится на одноступенчатую и двухступенчатую версии. GAS X/2  способна работать в диапазоне от 58 до 349 кВт. </p>
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