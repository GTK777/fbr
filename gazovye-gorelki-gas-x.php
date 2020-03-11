<?php
	require "variable/title.php";
	$title = "$pumpMainTitle_1";
	$description = "$pumpMainDesc_1"; 
	require 'header.php';
	require 'variable/data-info-finish.php';
	require 'variable/data-description.php';

	$data = require('variable/data-info-finish.php');
	$burnersModal = $data['gazovye-gorelki-gas-x'];
?>

<main class="main pb25">
	<section class="bread-crumbs-section">
	 	<div class="container">
	 		<div class="bread-crumbs-content">
	 			<ul class="bread-crumbs-list">
					<li class="bread-crumbs-item"><a href="catalog" class="bread-crumbs-link bread-crumbs-link-next">Каталог</a></li>
					<li class="bread-crumbs-item">
						<a href="gazovye-gorelki" class="bread-crumbs-link bread-crumbs-link-next">Газовые горелки для котлов FBR</a>
					</li>
					<li class="bread-crumbs-item"><a href="boilers" class="bread-crumbs-link bread-crumbs-link-now">Газовые горелки F.B.R. GAS X</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </section> 

	 		 <section class="section section-one section-one-text-center">
	 		 	<div class="container">
	 		 		<h1>Газовые горелки F.B.R. GAS X</h1>
	 		 		<div class="text-title-category">
	 		 			<div class="left">
	 		 				<p>Являются широко востребованными во всех отраслях, предусматривающих откачку газов, воздуха и смесей. Используются в качестве насосов предварительного разряжения в вакуумных установках. Производительность обеспечивается в области низкого и среднего вакуума.</p>
			 				<p>Пластинчато-роторная технология значительно упрощает структуру насосов.</p>
							<p>Высокий КПД вакуумирования в условиях постоянной эксплуатации осуществляется за счет циркулирующей жидкой смазки, взаимодействующих материалов и точного исполнения.</p>
						</div>
			 		 	<div class="right">
			 		 		<p>Очиститель масла современной технологии очистки со встроенным возвратом обеспечивает чистую работу и не содержащий масла выпуск газов. В случае, если насос оснащается газобалластным клапаном, можно увеличить откачиваемое количество пара.</p>
							<p>Обратный клапан на впускном фланце не допускает стекания воздуха обратно в вакуумную камеру после выключения оборудования.</p>
			 		 		<p>Если вы не смогли найти нужную модель, звоните по телефону  <b>+7 (495)-131-57-49</b> или напишите на почту <b>gtksnab@mail.ru</b>.</p>
	 		 			</div>
	 		 		</div>
	 		 	</div>

	 		 	<div class="container">
	 		 		<div class="section-one-content">
						<? foreach ($burnersModal as $key) { ?>
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