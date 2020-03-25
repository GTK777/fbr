<?php
    require "variable/title.php";
    $title = "$producteSectionTitle_3_8";
    $description = "$producteSectiomDescription_3_8"; 
    require "header.php";
    require "variable/data-info-finish-3.php";
    require "variable/data-description.php";

    $data = require("variable/data-info-finish-3.php");
    $burnersModal = $data["mazutnye-gorelki-hi"];
    
    $nameBurnsPage = "F.B.R. HI";
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
                    <li class="bread-crumbs-item"><a href="dizelnye-gorelki-g-s-2003" class="bread-crumbs-link bread-crumbs-link-now"><?= $nameBurnsPage ?></a></li>
                 </ul>
             </div>
         </div>
     </section> 

              <section class="section section-one section-one-text-center">
                  <div class="container">
                      <h1>Купить мазутные горелки <?= $nameBurnsPage ?> (Ф.Б.Р.)</h1>
                      <div class="text-title-category">
                          <div class="left">
                              <p>F.B.R  HI – это мазутные горелки мощностью от 2,3 до 17,4 кВТ. Модуляционные горелки предусматривают возможность изменения выходной мощности в широком диапазоне в зависимости от задачи.</p>
                        </div>
                          <div class="right">
                              <p>Конструкция горелки позволит быстро получить доступ к основным узлам и механизмам при проведении сервисных работ.</p>
                              <p>Если вы не смогли найти нужную модель, звоните по телефону  <b>+7 (495)-131-57-49</b> или напишите на почту <b>gtksnab@mail.ru</b>.</p>
                          </div>
                      </div>
                  </div>
                   
                  <div class="container">
                      <div class="section-one-content">
                        <? foreach ($burnersModal as $key) { ?>
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