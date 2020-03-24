<?php
	require "variable/title.php";
	$title = "$sparePartsTitle";
	$description = "$sparePartsDesc"; 
	require 'header.php';

	$data1 = require('variable/spare-parts/1.php');
	$data2 = require('variable/spare-parts/2.php');
	$data3 = require('variable/spare-parts/3.php');
	$data4 = require('variable/spare-parts/4.php');
	$data5 = require('variable/spare-parts/5.php');
	$data6 = require('variable/spare-parts/6.php');
	$data7 = require('variable/spare-parts/7.php');
	$data8 = require('variable/spare-parts/8.php');
	$data9 = require('variable/spare-parts/9.php');
	$data10 = require('variable/spare-parts/10.php');
	$data11 = require('variable/spare-parts/11.php');
	$data12 = require('variable/spare-parts/12.php');
	$data13 = require('variable/spare-parts/13.php');
	$data14 = require('variable/spare-parts/14.php');
	$data15 = require('variable/spare-parts/15.php');
	$data16 = require('variable/spare-parts/16.php');
	$data17 = require('variable/spare-parts/17.php');
	$data18 = require('variable/spare-parts/18.php');
	$data19 = require('variable/spare-parts/19.php');
	$data20 = require('variable/spare-parts/20.php');
	$data21 = require('variable/spare-parts/21.php');
	$data22 = require('variable/spare-parts/22.php');
	$data23 = require('variable/spare-parts/23.php');
	$data24 = require('variable/spare-parts/24.php');
	$data25 = require('variable/spare-parts/25.php');
	$data26 = require('variable/spare-parts/26.php');
	$data27 = require('variable/spare-parts/27.php');
	$data28 = require('variable/spare-parts/28.php');
	$data29 = require('variable/spare-parts/29.php');
	$data30 = require('variable/spare-parts/30.php');
	$data31 = require('variable/spare-parts/31.php');
	$data32 = require('variable/spare-parts/32.php');
	$data33 = require('variable/spare-parts/33.php');


?>
	<main class="main pb25">
		<div class="black-bg"></div>
		<div class="bread-crumbs-section bg-none">
		 	<div class="container">
		 		<div class="bread-crumbs-content">
		 			<ul class="bread-crumbs-list">
						<li class="bread-crumbs-item"><a href="catalog" class="bread-crumbs-link bread-crumbs-link-next bread-crumbs-link-spare-parts">Каталог</a></li>
						<li class="bread-crumbs-item"><a href="burners" class="bread-crumbs-link bread-crumbs-link-now ">Запчасти</a></li>
		 			</ul>
		 		</div>
		 	</div>
		 </div> 
		<section class="spare-parts">
			<div class="container">
				<div class="spare-parts-content">
					<div class="category-container">
						<div class="category">
							<span class="category-text"> Выберите категорию: </span>
							<ul class="category-list">
						  <li class="category-item active" id="1">Блоки управления</li>
								 <li class="category-item" id="2">Вентиляторы</li>
								 <li class="category-item" id="3">Втулки</li>
							 	 <li class="category-item" id="4">Датчики</li>
							 	 <li class="category-item" id="5">Двигатели</li>
								 <li class="category-item" id="6">Дефлекторы</li>
								 <li class="category-item" id="7">Диски</li>
								 <li class="category-item" id="8">Кабели</li>
								 <li class="category-item" id="9">Катушки</li>
								<li class="category-item" id="10">Клапаны</li>
								<li class="category-item" id="11">Комплекты</li>
								<li class="category-item" id="12">Конденсаторы</li>
								<li class="category-item" id="13">Крестовины</li>
								<li class="category-item" id="14">Крышки</li>
								<li class="category-item" id="15">Миниконтакторы и контакторы</li>
								<li class="category-item" id="16">Муфты</li>
								<li class="category-item" id="17">Нагреватели</li>
								<li class="category-item" id="18">Подшипник</li>
								<li class="category-item" id="19">Прокладки</li>
								<li class="category-item" id="20">Пружины</li>
								<li class="category-item" id="21">Реле</li>
								<li class="category-item" id="22">Соединения</li>
								<li class="category-item" id="23">Термореле</li>
								<li class="category-item" id="24">Трансформаторы</li>
								<li class="category-item" id="25">Трубы и трубки</li>
								<li class="category-item" id="26">Фильтры</li>
								<li class="category-item" id="27">Фланцы</li>
								<li class="category-item" id="28">Цоколь</li>
								<li class="category-item" id="29">Шланги</li>
								<li class="category-item" id="30">Штекеры</li>
								<li class="category-item" id="31">Электродвигатели</li>
								<li class="category-item" id="32">Электроды</li>
								<li class="category-item" id="33">Разное</li>
							</ul>
						</div>
					</div>
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
			
					<p class="text-under-search-block">Для поиска необходимой запчасти, пожалуйста введите артикул</p>
					
					<div class="catecory-tab">
						<div class="table-block">
							<table>
								<thead>
									<tr>
										<th>Наименование</th>
										<th>Артукул</th>
										<th>Заказать</th>
									</tr>
								</thead>
						
								<tbody class="tbody-tab-category tbody-tab-category-actice"  data-catecory="1">
									<? foreach ($data1['Блок_управления'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="2">
									<? foreach ($data2['Вентилятор'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="3">
									<? foreach ($data3['Втулка'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="4">
									<? foreach ($data4['Датчики'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="5">
									<? foreach ($data5['Двигатель'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="6">
									<? foreach ($data6['Дефлектор'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="7">
									<? foreach ($data7['Диск'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="8">
									<? foreach ($data8['Кабель'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="9">
									<? foreach ($data9['Катушка'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="10">
									<? foreach ($data10['Клапан'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="11">
									<? foreach ($data11['Комплект'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="12">
									<? foreach ($data12['Конденсатор'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="13">
									<? foreach ($data13['Крестовина'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="14">
									<? foreach ($data14['Крышка'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="15">
									<? foreach ($data15['Миниконтактор'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="16">
									<? foreach ($data16['Муфта'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="17">
									<? foreach ($data17['Нагреватель'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="18">
									<? foreach ($data18['Подшипник'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="19">
									<? foreach ($data19['Прокладка'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="20">
									<? foreach ($data20['Пружина'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="21">
									<? foreach ($data21['Реле'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="22">
									<? foreach ($data22['Соединение'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="23">
									<? foreach ($data23['Термореле'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="24">
									<? foreach ($data24['Трансформатор'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="25">
									<? foreach ($data25['Труба'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="26">
									<? foreach ($data26['Фильтр'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="27">
									<? foreach ($data27['Фланец'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="28">
									<? foreach ($data28['Цоколь'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="29">
									<? foreach ($data29['Шланг'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="30">
									<? foreach ($data30['Штекер'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="31">
									<? foreach ($data31['Электрод'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="32">
									<? foreach ($data32['Электродвигатель'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
								<tbody class="tbody-tab-category"  data-catecory="33">
									<? foreach ($data33['Остальное'] as $key) { ?>
										<tr class="item-product-list">
											<td class="name-producte"><?= $key['name_spare_parts'] ?></td>
											<td class="vendor-code-producte"><?= $key['vender_code_spare_parts'] ?></td> 
											<td class="to-order-block-sp">
												<span class="quantity-of-goods all-quantity-of-goods">
													<span class="minus">-</span>
													<span class="number">0</span>
													<span class="plus">+</span>
												</span>
												<span class="add-to-shopping-сart to-order-block-sp-stop"></span>
											</td>
										</tr>
									<? } ?>
								</tbody>
							</table>
						</div>
					</div>


				</div>
			</div>
		</section>
 	</main>
		

<!--  		<div class="order-in-one-click-block close-window">
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
	 							<div class="check-list-two">
	 							<span class="check-list__vender-codetitle">Артикул товара:</span> 
	 							<input class="check-list__vender-code-des" name="vender-code-producte" value="">
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
 		</div> -->
 		
	<script src="js/onimput.js"></script>
<?php 
	require 'footer.php';
?>