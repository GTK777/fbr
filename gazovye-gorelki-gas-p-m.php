<?php
	require "variable/title.php";
	$title = "$producteSectionTitle_1_11";
	$description = "$producteSectiomDescription_1_11"; 
	require 'header.php';
	require 'variable/data-info-finish.php';
	require 'variable/data-description.php';

	$data = require('variable/data-info-finish.php');
	$burnersModal = $data['gazovye-gorelki-gas-p-m'];
	$burnersModalJPG = $data['gazovye-gorelki-gas-p-m-jpg'];
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
					<li class="bread-crumbs-item"><a href="boilers" class="bread-crumbs-link bread-crumbs-link-now">F.B.R. GAS P /M</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </section> 
	  
	 		 <section class="section section-one section-one-text-center">
	 		 	<div class="container">
	 		 		<h1>Купить газовые горелки F.B.R. GAS P /M (Ф.Б.Р.)</h1>
	 		 		<div class="text-title-category">
	 		 			<div class="left">
	 		 				<p>Отличительной особенностью наддувных горелок F.B.R. GAS P /M является возможность плавной регулировки входной/выходной мощности для максимального КПД, а также экономии топлива.</p>
			 				<p>В зависимости от исполнения, горелка может работать на природном , сжиженном, а также биогазе.  Эффективность сгорания топлива обеспечивается вентилятором, а от повышенного шума защищает шумоподавляющий защитный кожух.  </p>
						</div>
			 		 	<div class="right">
			 		 		<p>Горелка оснащена короткой газовой трубой.</p>
							<p>Конструкция горелки позволит быстро получить доступ к основным узлам и механизмам при проведении сервисных работ.  Горелка может быть представлена как с длинной, так и с короткой трубой.</p>
			 		 		<p>Если вы не смогли найти нужную модель, звоните по телефону  <b>+7 (495)-131-57-49</b> или напишите на почту <b>gtksnab@mail.ru</b>.</p>
	 		 			</div>
	 		 		</div>
	 		 	</div>

	 		 	<div class="container">
	 		 		<div class="section-one-content">
						<? foreach ($burnersModal as $key) { ?>
							<a href="<?= $key['burnersModalLink'] ?>" class="catalog-item">
								<span class="catalog-item-top"><img src="img/images/<?= $key['burnersModalLink'] ?>.png" alt="<?= $key['burnersModalName'] ?>"></span>
								<span class="catalog-item-bottom"><span><?= $key['burnersModalName'] ?></span></span>
								<span class="go-over-page">Перейти</span>
							</a>
                        <? } ?>
                        <? foreach ($burnersModalJPG as $key) { ?>
							<a href="<?= $key['burnersModalLink'] ?>" class="catalog-item">
								<span class="catalog-item-top"><img src="img/images/<?= $key['burnersModalLink'] ?>.jpg" alt="<?= $key['burnersModalName'] ?>"></span>
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