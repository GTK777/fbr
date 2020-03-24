<?php
	require "variable/title.php";
	$title = "$producteTitle_3";
	$description = "$producteDesc_3"; 
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
        <h1>Купить мазутные горелки F.B.R. (Ф.Б.Р.)</h1>
        <div class="text-title-category">
            <div class="left">
                <p>Мазутные горелки F.B.R.обеспечивают максимально эффективное сжигание мазутного топлива. Для регулировки параметра получаемой воздушно-топливное смести и системы подогрева топлива предусмотрено специальное устройство. </p>
                <p>Горелки работают на устройствах топливе различной вязкости. Так, исполнение FNL – предназначено для мазута с вязкостью 5 °E, FNP - 7 °E, FNDL/FNDP -  20 °E.  </p>
            </div>
            <div class="right">
                <p>В зависимости от представленной модели,  горелка может работать в диапазоне от 57 до 13372 кВт.  Способ регулирования: одноступенчатые, двухступенчатые, трехступенчатые и модулируемые.  Мазутные горелки отличаются пониженным уровнем шума, за счет специального вентилятора.</p>
                
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