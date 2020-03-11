<?php
	require "variable/title.php"; // title and description
	$title = "$deliveryPartsTitle";
	$description = "$deliveryPartsDesc"; 

	require 'variable/data-info-finish.php';
	require 'header.php';
?>

	<main class="main pb25 delivery-and-payment-main">
<!-- 		<div class="bread-crumbs-section delivery-and-payment-bc">
		 	<div class="container">
		 		
		 	</div>
		 </div>  -->
		 <section class="delivery-and-payment-section-top">
		 	<div class="container">
 		 		<div class="bread-crumbs-content">
 		 			<ul class="bread-crumbs-list">
 						<li class="bread-crumbs-item"><a href="delivery-and-payment.html" class="bread-crumbs-link bread-crumbs-link-now">Доставка</a></li>
 		 			</ul>
 		 		</div>
		 		<div class="delivery-and-payment-content">
		 			<h1>Доставка</h1>
		 			<p>Доставка запчастей транспортной компанией по всей России и СНГ. Самовывоз осуществляется со склада в Москве. </p>
		 		</div>
		 	</div>
		 </section> 
		 <section class="delivery-section">
		 	<div class="container">
		 		<div class="delivery-content">
		 			<div class="delivery-content-left">
		 				<img src="img/delivery-2.jpg" alt="Оборудование Lamborghini">
		 			</div>
		 			<div class="delivery-content-right">
		 				<p><span class="delivery-span-color">Пункт самовывоза</span> находится по адресу: г. Москва, ул. Новопоселковая, д. 6, корп. 217(м. Сходненская). Вход в здание со стороны ул. Лодочная. Первый подъезд от перекрестка ул. Новопоселковая и ул. Лодочная. Для того чтобы добраться к нам на наземном транспорте необходимо выйти из первого вагона из центра, после стеклянных дверей повернуть налево и затем направо. Сразу перед вами будет трамвайная остановка. Садитесь на любой трамвай в сторону м. Тушинская и едете до остановки "улица Новопоселковая". Наше здание будет через дорогу со стороны ул. Лодочная. <a href="https://www.google.com/maps/dir/%D0%9C%D0%B5%D1%82%D1%80%D0%BE+%22%D0%A1%D1%85%D0%BE%D0%B4%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%22,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+125480/%D0%9D%D0%BE%D0%B2%D0%BE%D0%BF%D0%BE%D1%81%D0%B5%D0%BB%D0%BA%D0%BE%D0%B2%D0%B0%D1%8F+%D1%83%D0%BB.,+6+%D0%BA%D0%BE%D1%80%D0%BF%D1%83%D1%81+217,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+125363/@55.84452,37.440597,14z/data=!4m14!4m13!1m5!1m1!1s0x46b547f4809604d1:0x892e4ddefa1402dc!2m2!1d37.4388361!2d55.851862!1m5!1m1!1s0x46b547e42d11b675:0x9621f2204f271541!2m2!1d37.4433378!2d55.8373961!3e3?hl=ru" class="delivery-link"> Карта проезда.</a></p>
		 				<p><span class="delivery-span-color">Доставка в регионы</span> осуществляется с помощью транспортной компании "Деловые линии". Есть возможность доставки другими компаниями по согласованию с поставщиком. Стоимость услуг транспортной компании оплачивается отдельно при получении заказа в пункте выдачи.</p>
		 			</div>
		 		</div>
		 	</div>
		 </section>
		 
	</main>

	<?php 
		require 'footer.php';
	?>