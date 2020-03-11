<?php
	require "variable/title.php";
	$title = "$pumpMainTitle_11";
	$description = "$pumpMainDesc_11"; 
	require 'header.php';
	require 'variable/data-info-finish.php';
	require 'variable/data-description.php';
?>

<main class="main pb25">
	<section class="bread-crumbs-section">
	 	<div class="container">
	 		<div class="bread-crumbs-content">
	 			<ul class="bread-crumbs-list">
					<li class="bread-crumbs-item"><a href="catalog" class="bread-crumbs-link bread-crumbs-link-next">Каталог</a></li>
					<li class="bread-crumbs-item"><a href="boilers" class="bread-crumbs-link bread-crumbs-link-now">Спиральные вакуумные насосы</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </section> 
	  
	 		 <section class="section section-one section-one-text-center">
 	 		 	<div class="container">
 	 		 		<h1>Спиральные вакуумные насосы</h1>
 	 		 		<div class="text-title-category">
 	 		 			<div class="left">
 	 		 				<p>Принцип действия спиральных вакуумных насосов строится на взаимодействии закрепленной и орбитальной спирали. Орбитальная спираль движется внутри неподвижной. Это приводит к созданию вращающего перекачивающего движения, в результате которого газ перемещается от периферии спирали, затем сжимается между спиралями и движется к центру спирали. Такой метод не требует никакой смазки, что в результате дает сухое сжатие. </p>
 						</div>
 			 		 	<div class="right">
 			 		 		<p>Так как подшипники отделены от компрессионной камеры, то перекачиваемый газ не может быть загрязнен смазкой подшипников, оставаясь чистым. Герметичная конструкция (≤ 1x10-6 мбар л/с) предотвращает загрязнение перекачиваемого газа воздухом. Техническое обслуживание ограничивается лишь заменой концевых уплотнений спиралей.</p>
 			 		 		<p>Если вы не смогли найти нужную модель, звоните по телефону  <b>+7 (495)-131-57-49</b> или напишите на почту <b>gtksnab@mail.ru</b>.</p>
 	 		 			</div>
 	 		 		</div>
 	 		 	</div>	
	 		 	<div class="container">
	 		 		<h6 class="title-for-block">FOSSA FO</h6>
	 		 		<div class="section-one-content">
	 		 			<a href="<?= $pump_1_name_9 ?>" class="catalog-item">
	 		 				<span class="catalog-item-top"><img src="img/images/<?= $pump_1_name_9 ?>.png" alt="Оборудование Busch"></span>
	 		 				<span class="catalog-item-bottom"><span>FOSSA FO 0015 / 0035 A</span></span>
	 		 				<span class="catalog-item-bottom-des"><span><?= $modalPump_9_UnderDesc_1 ?></span></span>
	 		 				<span class="go-over-page">Перейти</span>
	 		 			</a>
	 		 		</div>
	 		 	</div>
	 		 </section>
	 	</main>

<?php 
	require 'footer.php';
?>