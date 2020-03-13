<?php
	require "variable/title.php";
	$title = "$sparePartsTitle";
	$description = "$sparePartsDesc"; 
	require 'header.php';

	$data1 = require('variable/spare-parts/1.php');

?>
	<main class="main pb25">
		<div class="black-bg"></div>
		<div class="bread-crumbs-section bg-none">
		 	<div class="container">
		 		<div class="bread-crumbs-content">
		 			<ul class="bread-crumbs-list">
						<li class="bread-crumbs-item"><a href="catalog" class="bread-crumbs-link bread-crumbs-link-next bread-crumbs-link-spare-parts">Каталог</a></li>
						<li class="bread-crumbs-item"><a href="spare-parts" class="bread-crumbs-link bread-crumbs-link-now ">Запчасти</a></li>
		 			</ul>
		 		</div>
		 	</div>
		 </div> 
		<section class="spare-parts">
			<div class="container">
				<div class="spare-parts-content">
					<div class="spare-parts-content-header"  id="spare-parts-content-header">
						<div class="word-block">	
							<h1>Закажите запчасть. 
							  <span
							     class="txt-rotate"
							     data-period="2000"
							     data-rotate='[ "В один клик.", "По телефону.", "Через почту."]'></span>
							</h1>
						</div>
					</div>
					<div class="search-block">
						<div class="search-form">
							<input type="text" class="search-input" id="elastic">
							<button class="search-btn"></button>
						</div>
						<div class="basket-block">
							<span class="basket"></span>
							<span class="basket-number">0</span>
						</div>
					</div>
			
					<p class="text-under-search-block">Если вы не смогли найти необходимую вам запчасть, пожалуйста, обратитесь к нам по телефону +7 (495)-131-57-49 или напишите в форму обратной связи.</p>
					
					<div class="catecory-tab">
						<div class="table-block">
							<div class="section-one-content">
								<? foreach ($data1['Запчасти'] as $key) { ?>
									<div class="catalog-item">
										<span class="catalog-item-top"><img src="img/zapchasti/<?= $key['vender_code_spare_parts'] ?>.jpg" alt="Оборудование Busch" class="catalog-item-name-m-0"></span>
										<span class="catalog-item-bottom name-producte"><span><?= $key['name_spare_parts'] ?></span></span>
										<span class="go-over-page order-in-one-click">Заказать</span>
									</div>
								<? } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
 	</main>

		
 		<div class="order-in-one-click-block close-window">
 			<div class="container">
 				<div class="order-in-one-click-content">
 					<form action="" class="order-in-one-click-form">
	 					<div class="order-in-one-click-content-right">
	 						<span class="content-right-title">Ваш заказ:</span>
	 						<span class="content-right-description">Прожалуйста, проверьте правильность введенных данных.</span>

	 						<div class="check-list">
	 							<div class="check-list-one">
	 							<span class="check-list__name-producte-title">Наименование товара:</span>
	 							<input class="check-list__name-producte-des" name="name-producte" value="">
	 								
	 							</div>
	 						</div>
	 					</div>
	 					<div class="order-in-one-click-content-left">
	 						<span>Введите контактную информауию:</span>
	 						<span class="content-right-description">* Поля обязательные для заполнения</span>
	 						<span class="title-input">*Имя:</span>
							<input type="text" class="order-in-one-click-input order-in-one-click-name" name="name" required>
							<span class="title-input">*Телефон:</span>	
							<input type="text" class="order-in-one-click-input order-in-one-click-phone" name="phone" required>	
							<span class="title-input">*Email:</span>
							<input type="text" class="order-in-one-click-input order-in-one-click-email" name="email" required>
							<span class="title-input">Примечание:</span>
							<textarea class="order-in-one-click-input order-in-one-click-text" name="note"></textarea>		
	 					</div>
	 					<input type="submit" class="order-in-one-click-submit" value="Заказать">
	 					<span class="processing-consent">**Нажимая на кнопку, вы даете согласие на обработку своих персональных данных.</span>
 					</form>
 					<span class="close-window-btn"></span>
 				</div>
 			</div>
 		</div>
		<script src="js/oninput.js" defer></script>
<?php 
	require 'footer.php';
?>