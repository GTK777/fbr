var fs = require("fs");

var ds33 =  ['gas-p-70-m-ce-tc-r-ce-d11-2-fs50','gas-p-70-m-ce-tl-r-ce-d11-2-fs50','gas-p-70-m-ce-tc-r-ce-d2-fs50','gas-p-70-m-ce-tl-r-ce-d2-fs50','gas-p-70-m-ce-tc-r-ce-ct-d11-2-fs50','gas-p-70-m-ce-tl-r-ce-ct-d11-2-fs50','gas-p-70-m-ce-tc-r-ce-ct-d2-fs50','gas-p-70-m-ce-tl-r-ce-ct-d2-fs50','gas-p-100-m-ce-tc-r-ce-d1-1-2-fs50','gas-p-100-m-ce-tl-r-ce-d1-1-2-fs50','gas-p-100-m-ce-tl-r-ce-d2-fs50','gas-p-100-m-ce-tc-r-ce-ct-d1-1-2-fs50','gas-p-100-m-ce-tl-r-ce-ct-d1-1-2-fs50','gas-p-100-m-ce-tc-r-ce-dn65-fs65','gas-p-100-m-ce-tl-r-ce-dn65-fs65','gas-p-100-m-ce-tc-r-ce-ct-d2-fs50','gas-p-100-m-ce-tl-r-ce-ct-d2-fs50','gas-p-100-m-ce-tl-r-ce-ct-dn65-fs65','gas-p-100-m-ce-tc-r-ce-ct-dn65-fs65','gas-p-100-m-ce-tc-r-ce-d2-fs50','gas-p-150-m-ce-03-tc-r-n-d2','gas-p-150-m-ce-03-tl-r-n-d2','gas-p-150-m-ce-tc-r-n-d2','gas-p-150-m-ce-tl-r-n-d2','gas-p-150-m-ce-03-tc-r-n-dn65','gas-p-150-m-ce-03-tl-r-n-dn65','gas-p-150-m-ce-03-tc-r-ce-ct-d2-fs50','gas-p-150-m-ce-03-tl-r-ce-ct-d2-fs50','gas-p-150-m-ce-tc-r-n-dn65','gas-p-150-m-ce-tl-r-n-dn65','gas-p-150-m-ce-tc-r-ce-ct-d2-fs50','gas-p-150-m-ce-tl-r-ce-ct-d2-fs50','gas-p-150-m-ce-03-tc-r-n-dn80','gas-p-150-m-ce-03-tl-r-n-dn80','gas-p-150-m-ce-tc-r-n-dn80','gas-p-150-m-ce-tl-r-n-dn80','gas-p-150-m-ce-03-tc-r-ce-ct-dn65-fs65','gas-p-150-m-ce-03-tl-r-ce-ct-dn65-fs65','gas-p-150-m-ce-tc-r-ce-ct-dn65-fs65','gas-p-150-m-ce-tl-r-ce-ct-dn65-fs65','gas-p-150-m-ce-03-tc-r-ce-ct-dn80-fs80','gas-p-150-m-ce-03-tl-r-ce-ct-dn80-fs80','gas-p-150-m-ce-tc-r-ce-ct-dn80-fs80','gas-p-150-m-ce-tl-r-ce-ct-dn80-fs80','gas-p-350-m-ce-mec-r-ce-ct-d2','gas-p-350-m-ce-mec-r-n-dn65','gas-p-350-m-ce-mec-r-ce-ct-d65-fs65','gas-p-350-m-ce-mec-r-n-dn80','gas-p-350-m-ce-mec-r-ce-ct-dn80-fs80','gas-p-350-m-ce-mec-r-n-dn100','gas-p-350-m-ce-mec-r-ce-ct-dn100-f100-s100','gas-p-450-m-ce-mec-r-ce-ct-d2','gas-p-450-m-ce-mec-r-n-dn65','gas-p-450-m-ce-mec-r-ce-ct-dn65-fs65','gas-p-450-m-ce-mec-r-n-dn80','gas-p-450-m-ce-mec-r-ce-ct-dn80-fs80','gas-p-450-m-ce-mec-r-n-dn100','gas-p-450-m-ce-mec-r-ce-ct-dn100-f100-s100','gas-p-550-m-ce-mec-r-ce-ct-d2','gas-p-550-m-ce-mec-r-n-dn65','gas-p-550-m-ce-mec-r-ce-ct-dn65-fs65','gas-p-550-m-ce-mec-r-n-dn80','gas-p-550-m-ce-mec-r-ce-ct-dn80-fs80','gas-p-550-m-ce-mec-r-n-dn100','gas-p-550-m-ce-mec-r-ce-ct-dn100-f100-s100','gas-p-650-m-ce-mec-r-ce-ct-dn65-fs65','gas-p-650-m-ce-mec-r-ce-ct-dn80-fs80','gas-p-650-m-ce-mec-r-ce-ct-dn100-f100-s100'];

for(var i = 0, b = 1; ds33.length > i; i++, b++) {
    fs.writeFile(ds33[i], '<?php' +
    ' require ' + '"variable/title.php";' +  
    '$title = "$producteTitle_11_' + b + '";' +  // меняем цифру
    '$description = "$producteDesc_11_' + b + '";' +  // меняем цифру
    'require "header.php";' +
    'require "variable/data-description.php";' +

    'require "variable/data-info-finish.php";' +
    '$data = require "variable/data-info-finish.php";' +
    
    '$dataLink = require "variable/data-info.php";' +
    '$dataLinkAll = $dataLink["gazovye-gorelki"];' +

    '$modification = require("variable/data-info-finish.php");' +
    '$dataDesc = require("variable/data-description.php");' +
    '$modificationModal = $modification["gazovye-gorelki-gas-p-m"][' + i + '];' + // меняем серию
    '$modalPumpDesc = $modalPumpDesc_11_' + b + ';' + // меняем цифру
    '$modalPumpTable = $modalPumpTable_11_' + b + ';' + // меняем цифру
'?>' +
'<!-- main block start -->' + 
		'<main class="main">' +
			'<div class="black-bg-about-us"></div>' +
			'<!-- Main block - bread crumbs-block start -->' +
			'<section class="bread-crumbs-section bg-none">' +
				'<div class="container">' +
					'<div class="bread-crumbs-content">' +
						'<ul class="bread-crumbs-list">' +
							'<li class="bread-crumbs-item">' +
								'<a href="catalog" class="bread-crumbs-link bread-crumbs-link-next bread-crumbs-link-spare-parts">Каталог</a>' +
							'</li>' +
							'<li class="bread-crumbs-item">' +
								'<a href="gazovye-gorelki" class="bread-crumbs-link bread-crumbs-link-next bread-crumbs-link-spare-parts">Газовые горелки F.B.R.</a>' +
							'</li>' +
							'</li>' +
							'<li class="bread-crumbs-item">' +
								'<a href="gazovye-gorelki-gas-p-m" class="bread-crumbs-link bread-crumbs-link-next bread-crumbs-link-spare-parts">F.B.R. GAS P /M</a>' + // меняем ссылку и название
							'</li>' +
							'<li class="bread-crumbs-item">' +
								'<a href="" class="bread-crumbs-link bread-crumbs-link-now">' +
								'<?= $modificationModal["burnersModalName"] ?></a>' +
							'</li>' +
						'</ul> ' +
					'</div>' +
				'</div>' +
			'</section>' +
			'<!-- Main block - bread crumbs-block finish -->   ' +
			'<section class="burners-modal">' +
				'<div class="container">' +
					'<!-- Main block - about product-block start -->' +
					'<div class="burners-modal-info__content">' +
						'<div class="burners-modal-info__content-left">' +
							'<img src="img/images/<?= $modificationModal["burnersModalLink"] ?>.png" alt="Горелки FBR">' +
						'</div>' +
						'<div class="burners-modal-info__content-right">' +
							'<h1 class="burners-modal-info__content-right_title"><?= $modificationModal["burnersModalName"] ?></h1>' +
							'<?= $modalPumpDesc ?>' +
							'<span class="name-producte name-producte-page-p"><?= $modificationModal["burnersModalName"] ?></span>' +
							'<span class="vendor-code-producte vendor-code-producte-page-p">-</span>' +
							'<div class="to-order-block to-order-block-sp">' +
								'<button class="to-order">Заказать в один клик</button>' +
								'<span class="quantity-of-goods all-quantity-of-goods">' +
									'<span class="minus">-</span>' +
									'<span class="number">0</span>' +
									'<span class="plus">+</span>' +
								'</span>' +
								'<span class="add-to-shopping-сart to-order-block-sp-stop"></span>' +
							'</div>' +
						'</div>' +
					'</div>' +
					'<!-- Main block - about product-block finish -->' +
					'<!-- Main block - Сharacteristics - Start --> ' +
					'<div class="specifications burners-modal-info__content-right_block-list" id="specification" role="tabpanel" aria-labelledby="specification-tab">' +
						'<h5 class="burners-modal-info__content-right_description title-desc">Xарактеристики:</h5><?= $modalPumpTable ?>' +
					'</div>' +
					'<!-- Main block - Сharacteristics - Finish --> ' +
					'<!-- Main block - Link on other pumps - Start --> ' +
					'<div class="section-link-on-o-p">' +
						'<div class="content-main-line">' +
							'<div class="main-block-link main-block-link-first"> ' +
								'<span class="main-line-block main-line-block-first">' +
									'<span class="main-block-link-title"><a href="gazovye-gorelki">Газовые горелки:</a></span>' +
										'<? foreach ($dataLinkAll as $key) { ?>' +
											'<a href="<?= $key["pumpModalLink"] ?>" class="main-line-link"><?= $key["pumpModalName"] ?></a>' +
											'<span class="main-line-space"> , </span>' +
										'<? } ?>' +
								'</span>' +
							'</div>' +
							'<div class="main-block-link-last">' +
								'<span class="main-line-block main-line-block-last">' +
									'<span class="main-line-link-title main-block-link-title">Другие разделы:</span>' +
									'<a href="gazovye-gorelki" class="main-line-link">Газовые горелки</a>' +
									'<span class="main-line-space"> , </span>' +
									'<a href="dizelnye-gorelki" class="main-line-link">Дизельные горелки</a>' +
									'<span class="main-line-space"> , </span>' +
									'<a href="mazutnye-gorelki" class="main-line-link">Мазутные горелки</a>' +
									'<span class="main-line-space"> , </span>' +
									'<a href="gazodizelnye-gorelki" class="main-line-link">Газодизельные горелки</a>' +
									'<span class="main-line-space"> , </span>' +
									'<a href="gazomazutnye-gorelki" class="main-line-link">Газомазутные горелки</a>' +
									'<span class="main-line-space"> , </span>' +
									'<a href="spare-parts" class="main-line-link">Запчасти</a>' +
								'</span>' +
							'</div>' +
						'</div>' +
					'</div>' +
					'<!-- Main block - Link on other pumps - Finish --> ' +
				'</div>' +
			'</section>' +
		'</main>' +
    '<!-- main block finish -->' +
    '<?php ' +
    ' require ' +  '"footer.php";' +
'?>',  function(err){
        if (err) {
            console.log(err);
        } else {
            console.log("Файл создан");
        }
    });
}



