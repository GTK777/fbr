<?php
	require "variable/title.php";
	$title = "$producteSectionTitle_1_9";
	$description = "$producteSectiomDescription_1_9"; 
	require 'header.php';
	require 'variable/data-info-finish.php';
	require 'variable/data-description.php';

	$data = require('variable/data-info-finish.php');
	$burnersModal = $data['gazovye-gorelki-gas-x-m'];
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
					<li class="bread-crumbs-item"><a href="boilers" class="bread-crumbs-link bread-crumbs-link-now">F.B.R. GAS X /M</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </section> 
	     
	<section class="section section-one section-one-text-center">
		<div class="container">
			<h1>Купить моделирующие горелки газовые промышленные F.B.R. GAS X /M (Ф.Б.Р.)</h1>
			<div class="text-title-category">
				<div class="left">
					<p>Газовая горелка F.B.R. GAS X /M обеспечивает максимально эффективное сжигание  топлива. Предусмотрена возможность подключения модуляционного комплекта в качестве опции, позволяющее варьировать мощность горелки по всему диапазону для точного управления температурой котла и давления в генераторе.</p>
					<p>В зависимости от исполнения, горелка может работать с природным, сжиженным, бытовом и каменноугольном газе.</p>
				</div>
				<div class="right">
					<p>Быстрый доступ к основным узлам и механизмам обеспечивает продуманная конструкция. Горелки с маркировкой «F» , оснащены специальным металлическим корпусом, для установки в промышленных печах.</p>
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