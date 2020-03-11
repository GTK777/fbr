<?php
	require "variable/title.php"; // title and description
	$title = "$producteTitle_1_2";
	$description = "$producteDesc_1_2"; 

	require 'header.php';
	require 'variable/data-description.php';

	require 'variable/data-info-finish.php';
	$data = require 'variable/data-info-finish.php';

	$dataLink = require 'variable/data-info.php';
	$dataLinkAll = $dataLink['pumpModal_r_5_data'];
	
	$modalPump = $data['pumpModal_r_5'][0];

	$modification = require('variable/data-info-finish-2.php');
	$dataDesc = require('variable/data-description.php');
	$modificationModal = $modification['pumpModal-mod_1_1'];
?>
	<main class="main">
		<div class="black-bg-about-us"></div>
		<section class="bread-crumbs-section bg-none">
			<div class="container">
				<div class="bread-crumbs-content">
					<ul class="bread-crumbs-list">
						<li class="bread-crumbs-item">
							<a href="catalog" class="bread-crumbs-link bread-crumbs-link-next bread-crumbs-link-spare-parts">Каталог</a>
						</li>
						<li class="bread-crumbs-item">
							<a href="maslyanye-plastinchato-rotornye-vakuumnye-nasosy" class="bread-crumbs-link bread-crumbs-link-next bread-crumbs-link-spare-parts">Масляные пластинчато-роторные вакуумные насосы</a>
						</li>
						<li class="bread-crumbs-item">
							<a href="" class="bread-crumbs-link bread-crumbs-link-now">
							Busch <?= $modalPump['pumpModalName_2'] ?></a>
						</li>
					</ul> 
				</div>
			</div>
		</section>
		<section class="burners-modal">
			<div class="container">
				<div class="burners-modal-info__content">
					<div class="burners-modal-info__content-left">
						<img src="img/images/<?= $pump_2_name ?>.png" alt="Оборудование Busch">
					</div>
					<div class="burners-modal-info__content-right">
						<h1 class="burners-modal-info__content-right_title">Вакуумный насос Busch <?= $modalPump['pumpModalName_2'] ?></h1>
						<span class="burners-modal-info__content-right_description under-title under-title-r"><?= $modalPumpUnderDesc_2 ?></span>
						<?= $modalPumpDesc_2 ?>
						 
					  <div class="to-order-block">
							<button class="to-order">Заказать</button>
					  </div>
					</div>
				</div>

				<!-- Main block - Link on other pumps - Start --> 
					<div class="section-link-on-o-p">
						<div class="content-main-line">
							<div class="main-block-link main-block-link-first"> 
								<span class="main-line-block main-line-block-first">
									<span class="main-block-link-title"><a href="http://nasosy-vakuumnye.ru/maslyanye-plastinchato-rotornye-vakuumnye-nasosy">Масляные пластинчато-роторные вакуумные насосы:</a></span>
										<? foreach ($dataLinkAll as $key) { ?>
											<a href="<?= $key['pumpModalLink'] ?>" class="main-line-link"><?= $key['pumpModalName'] ?></a>
											<span class="main-line-space"> , </span>
										<? } ?>
								</span>
							</div>
							<div class="main-block-link-last">
								<span class="main-line-block main-line-block-last">
									<span class="main-line-link-title main-block-link-title">Другие разделы:</span>
									<a href="http://nasosy-vakuumnye.ru/maslyanye-plastinchato-rotornye-vakuumnye-nasosy" class="main-line-link">Масляные пластинчато-роторные вакуумные насосы</a>
									<span class="main-line-space"> , </span>
									<a href="http://nasosy-vakuumnye.ru/suhie-kulachkovye-vakuumnye-nasosy-i-kompressory" class="main-line-link">Сухие кулачковые вакуумные насосы и компрессоры</a>
									<span class="main-line-space"> , </span>
									<a href="http://nasosy-vakuumnye.ru/suhie-vintovye-vakuumnye-nasosy" class="main-line-link">Сухие винтовые вакуумные насосы</a>
									<span class="main-line-space"> , </span>
									<a href="http://nasosy-vakuumnye.ru/dvuhrotornye-busternye-vakuumnye-nasosy-rutsa" class="main-line-link">Двухроторные бустерные вакуумные насосы Рутса</a>
									<span class="main-line-space"> , </span>
									<a href="http://nasosy-vakuumnye.ru/suhie-plastinchato-rotornye-vakuumnye-nasosy-i-kompressory" class="main-line-link">Сухие пластинчато-роторные вакуумные насосы и компрессоры</a>
									<span class="main-line-space"> , </span>
									<a href="http://nasosy-vakuumnye.ru/dvuhrotornye-vozduhoduvki" class="main-line-link">Двухроторные воздуходувки</a>
									<span class="main-line-space"> , </span>
									<a href="http://nasosy-vakuumnye.ru/zhidkostno-koltsevye-nasosy-i-kompressory" class="main-line-link">Жидкостно-кольцевые вакуумные насосы и компрессоры</a>
									<span class="main-line-space"> , </span>
									<a href="http://nasosy-vakuumnye.ru/vihrevye-vozduhoduvki" class="main-line-link">Вихревые воздуходувки</a>
									<span class="main-line-space"> , </span>
									<a href="http://nasosy-vakuumnye.ru/spiralnye-vakuumnye-nasosy" class="main-line-link">Спиральные вакуумные насосы</a>
									<span class="main-line-space"> , </span>
									<a href="http://nasosy-vakuumnye.ru/turbomolekulyarnye-vakuumnye-nasosy" class="main-line-link">Турбомолекулярные вакуумные насосы</a>
									<span class="main-line-space"> , </span>
									<a href="http://nasosy-vakuumnye.ru/diffuzionnye-vakuumnye-nasosy" class="main-line-link">Диффузионные вакуумные насосы</a>
									<span class="main-line-space"> , </span>
								</span>
							</div>
						</div>
					</div>
				<!-- Main block - Link on other pumps - Finish --> 

				<div class="photo-block">
					<div class="picture-performance-block picture-block">
						<img src="img/picture/<?= $pump_2_name ?>.jpg" alt="Оборудование Busch">
						<p><?= $modalPump['pumpModalName_2'] ?></p>
					</div>
					<div class="picture-performance-block performance-block">
						<img src="img/performance/<?= $pump_2_name ?>.jpg" alt="Оборудование Busch">
						<p>Производительность: Воздух при 20 °C. Погрешность ± 10% 50 Hz 60 Hz</p>
					</div>
				</div>

				<div class="specifications burners-modal-info__content-right_block-list" id="specification" role="tabpanel" aria-labelledby="specification-tab">

						<div class="burners-modal__content-title">
							<h2>Выберите модификацию:</h2>
						</div>
						<div class="burners-modal__content">
							<? foreach ($modificationModal as $key) { ?>
					 			<div class="burners-modal__content_link">
									<h6><?= $key['pumpModalName'] ?></h6>
									<span class="circle-burners-modal"></span>
								</div>
							<? } ?>
						</div>
<h5 class="burners-modal-info__content-right_description title-desc">Технические характеристики:</h5><?= $modalPumpTable_2 ?>

				</div>
			</div>
		</section> 
	</main>


<?php 
	require 'footer.php';
?>