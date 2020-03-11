<?php
	require "variable/title.php";
	$title = "$catalogPartsTitle";
	$description = "$catalogPartsDesc"; 
	require 'header.php';
?>

	<main class="main catalog-page pb25">
		<section class="bread-crumbs-section">
		 	<div class="container">
		 		<div class="bread-crumbs-content">
		 			<ul class="bread-crumbs-list">
		 				<li class="bread-crumbs-item"><a href="catalog" class="bread-crumbs-link bread-crumbs-link-now">Каталог</a></li>
		 			</ul>
		 		</div>
		 	</div>
		 </section> 

		 <section class="section section-one section-one-text-center">
		 	<div class="container">
		 		<h1>Каталог</h1>
		 		<p> Если вы не смогли найти необходимую вам модель или запчасть, пожалуйста, обратитесь к нам по телефону  +7 (495)-131-57-49 или напишите в форму обратной связи.</p>
		 		<div class="section-one-content">
				 <a href="gazovye-gorelki" class="catalog-item">
							<span class="catalog-item-top"><img src="img/images/gas-x0-ce-tc.png" alt="Оборудование F.B.R."></span>
							<span class="catalog-item-bottom"><span>Газовые горелки</span></span>
							<span class="go-over-page">Перейти</span>
						</a>
						<a href="dizelnye-gorelki" class="catalog-item">
							<span class="catalog-item-top"><img src="img/images/g-0s-2001.png" alt="Оборудование F.B.R."></span>
							<span class="catalog-item-bottom"><span>Дизельные горелки</span></span>
							<span class="go-over-page">Перейти</span>
						</a>
						<a href="mazutnye-gorelki" class="catalog-item">
							<span class="catalog-item-top"><img src="img/images/fndl-8-tc.png" alt="Оборудование F.B.R."></span>
							<span class="catalog-item-bottom"><span>Мазутные горелки</span></span>
							<span class="go-over-page">Перейти</span>
						</a>
						<a href="gazodizelnye-gorelki" class="catalog-item">
							<span class="catalog-item-top"><img src="img/images/gm-x-0-tc.png" alt="Оборудование F.B.R."></span>
							<span class="catalog-item-bottom"><span>Газодизельные горелки</span></span>
							<span class="go-over-page">Перейти</span>
						</a>
						<a href="gazomazutnye-gorelki" class="catalog-item">
							<span class="catalog-item-top"><img src="img/images/kn-190-m.png" alt="Оборудование F.B.R."></span>
							<span class="catalog-item-bottom"><span>Газомазутные горелки</span></span>
							<span class="go-over-page">Перейти</span>
						</a>
						<a href="spare-parts" class="catalog-item">
							<span class="catalog-item-top"><img src="img/images/zapchasti.png" alt="Оборудование F.B.R."></span>
							<span class="catalog-item-bottom"><span>Запчасти</span></span>
							<span class="go-over-page">Перейти</span>
						</a>
				</div>	
		 	</div>
		 </section>
	</main>

	<?php 
		require 'footer.php';
	?>