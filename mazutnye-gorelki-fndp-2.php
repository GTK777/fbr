<?php
    require "variable/title.php";
    $title = "$producteSectionTitle_3_4";
    $description = "$producteSectiomDescription_3_4"; 
    require "header.php";
    require "variable/data-info-finish-3.php";
    require "variable/data-description.php";

    $data = require("variable/data-info-finish-3.php");
    $burnersModal = $data["mazutnye-gorelki-fndp-2"];
    $burnersModal2 = $data["mazutnye-gorelki-fndp-2-2"];
    
    $nameBurnsPage = "F.B.R. FNDP /2";
?>

<main class="main pb25">
    <section class="bread-crumbs-section">
         <div class="container">
             <div class="bread-crumbs-content">
                 <ul class="bread-crumbs-list">
                    <li class="bread-crumbs-item"><a href="catalog" class="bread-crumbs-link bread-crumbs-link-next">Каталог</a></li>
                    <li class="bread-crumbs-item">
                        <a href="mazutnye-gorelki" class="bread-crumbs-link bread-crumbs-link-next">Мазутные горелки F.B.R.</a>
                    </li>
                    <li class="bread-crumbs-item"><a href="#" class="bread-crumbs-link bread-crumbs-link-now"><?= $nameBurnsPage ?></a></li>
                 </ul>
             </div>
         </div>
     </section> 
     
              <section class="section section-one section-one-text-center">
                  <div class="container">
                      <h1>Купить мазутные горелки <?= $nameBurnsPage ?> (Ф.Б.Р.)</h1>
                      <div class="text-title-category">
                          <div class="left">
                              <p>F.B.R  FNDP /2 – это мазутные двухступенчатые наддувные горелки. Горелка предназначена для работы с густым мазутом. Низкий шум вентилятора обеспечивается за счет специального вентилятора и защитного кожуха. Устройство работает при диапазоне 137 до 1705 кВт.</p>
                        </div>
                          <div class="right">
                              <p>Горелка может быть установлена практически на любой вид котлов, водонагревателей и парогенераторов.</p>
                              <p>Если вы не смогли найти нужную модель, звоните по телефону  <b>+7 (495)-131-57-49</b> или напишите на почту <b>gtksnab@mail.ru</b>.</p>
                          </div>
                      </div>
                  </div>

                  <div class="container">
                      <div class="section-one-content">
                        <? foreach ($burnersModal as $key) { ?>
                            <a href="<?= $key["burnersModalLink"] ?>" class="catalog-item">
                                <span class="catalog-item-top"><img src="img/images/<?= $key["burnersModalLink"] ?>.png" alt="Газовые горелки F.B.R. GAS X"></span>
                                <span class="catalog-item-bottom"><span><?= $key["burnersModalName"] ?></span></span>
                                <span class="go-over-page">Перейти</span>
                            </a>
                        <? } ?>
                        <? foreach ($burnersModal2 as $key) { ?>
                            <a href="<?= $key["burnersModalLink"] ?>" class="catalog-item">
                                <span class="catalog-item-top"><img src="img/images/<?= $key["burnersModalLink"] ?>.jpg" alt="Газовые горелки F.B.R. GAS X"></span>
                                <span class="catalog-item-bottom"><span><?= $key["burnersModalName"] ?></span></span>
                                <span class="go-over-page">Перейти</span>
                            </a>
                        <? } ?>
                      </div>
                  </div>
              </section>
         </main>

<?php 
    require "footer.php";
?>