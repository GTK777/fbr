<?php
	require "variable/title.php";
	$title = "$pumpMainTitle_1";
	$description = "$pumpMainDesc_1"; 
	require 'header.php';
	require 'variable/data-info-finish-3.php';
	require 'variable/data-description.php';
?>

<main class="main pb25">
	<section class="bread-crumbs-section">
	 	<div class="container">
	 		<div class="bread-crumbs-content">
	 			<ul class="bread-crumbs-list">
					<li class="bread-crumbs-item">
						<a href="catalog" class="bread-crumbs-link bread-crumbs-link-next">Каталог</a>
					</li>
					<li class="bread-crumbs-item">
						<a href="mazutnye-gorelki" class="bread-crumbs-link bread-crumbs-link-now">Мазутные горелки F.B.R.</a>
					</li>
	 			</ul>
	 		</div>
	 	</div>
	 </section> 

    <section class="section section-one section-one-text-center">
    <div class="container">
        <h1>Мазутные горелки F.B.R.</h1>
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
            <a href="<?= $pump_1_name ?>" class="catalog-item">
                <span class="catalog-item-top"><img src="img/images/<?= $pump_1_name ?>.png" alt="горелки для котлов F.B.R."></span>
                <span class="catalog-item-bottom"><span>Мазутные горелки FNL</span></span>
                <span class="go-over-page">Перейти</span>
            </a>
            <a href="<?= $pump_2_name ?>" class="catalog-item">
                <span class="catalog-item-top"><img src="img/images/<?= $pump_2_name ?>.png" alt="горелки для котлов F.B.R."></span>
                <span class="catalog-item-bottom"><span>Мазутные горелки FNDL</span></span>
                <span class="go-over-page">Перейти</span>
            </a>
            <a href="<?= $pump_3_name ?>" class="catalog-item">
                <span class="catalog-item-top"><img src="img/images/<?= $pump_3_name ?>.png" alt="горелки для котлов F.B.R."></span>
                <span class="catalog-item-bottom"><span>Мазутные горелки FNP /2</span></span>
                <span class="go-over-page">Перейти</span>
            </a>
            <a href="<?= $pump_4_name ?>" class="catalog-item">
                <span class="catalog-item-top"><img src="img/images/<?= $pump_4_name ?>.png" alt="горелки для котлов F.B.R."></span>
                <span class="catalog-item-bottom"><span>Мазутные горелки FNDP /2</span></span>
                <span class="go-over-page">Перейти</span>
            </a>
            <a href="<?= $pump_5_name ?>" class="catalog-item">
                <span class="catalog-item-top"><img src="img/images/<?= $pump_5_name ?>.png" alt="горелки для котлов F.B.R."></span>
                <span class="catalog-item-bottom"><span>Мазутные горелки FNDP /3</span></span>
                <span class="go-over-page">Перейти</span>
            </a>
            <a href="<?= $pump_6_name ?>" class="catalog-item">
                <span class="catalog-item-top"><img src="img/images/<?= $pump_6_name ?>.png" alt="горелки для котлов F.B.R."></span>
                <span class="catalog-item-bottom"><span>Мазутные горелки FNDP /M</span></span>
                <span class="go-over-page">Перейти</span>
            </a>
            <a href="<?= $pump_7_name ?>" class="catalog-item">
                <span class="catalog-item-top"><img src="img/images/<?= $pump_7_name ?>.jpg" alt="горелки для котлов F.B.R."></span>
                <span class="catalog-item-bottom"><span>Мазутные горелки FNDP /M EL</span></span>
                <span class="go-over-page">Перейти</span>
            </a>
            <a href="<?= $pump_8_name ?>" class="catalog-item">
                <span class="catalog-item-top"><img src="img/images/<?= $pump_8_name ?>.jpg" alt="горелки для котлов F.B.R."></span>
                <span class="catalog-item-bottom"><span>Мазутные горелки HI</span></span>
                <span class="go-over-page">Перейти</span>
            </a>
        </div>
    </div>
    </section>
</main>

<?php 
	require 'footer.php';
?>