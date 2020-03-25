/* --------------------------- 1. Spare-parts page > spare-parts section (Анимация с текстом) --------------------------- */

var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};  

/* --------------------------- 2. Поиск по артикулу находится в файле oninput.js --------------------------- */


/* --------------------------- 3. Скролинг до якоря --------------------------- */

$('.category-item').on('click', function() {
  $('.category-item').removeClass('active');
  $(this).addClass('active');
  $(this).attr('id');

  var lol = document.querySelectorAll('.tbody-tab-category')
  $('.tbody-tab-category').removeClass('tbody-tab-category-actice');
  for(var i = 0; i < lol.length; i++) {
    if($(this).attr('id') == lol[i].getAttribute('data-catecory')) {
      lol[i].classList.add('tbody-tab-category-actice')
    }
  }
  $("html, body").animate({scrollTop: $('#spare-parts-content-header').offset().top-145+"px"});
  return false;
})

/* --------------------------- 5. Удаление бегающего текста на мобильных устройствах --------------------------- */

$(window).resize( function() {
  var widthWindow = $(document).width();
  if(widthWindow <= 420) {
    $('.word-block .txt-rotate').css('display', 'none');
  } else {
    $('.word-block .txt-rotate').css('display', 'inline');
  }
})

/* --------------------------- 7. Добавление класса "body-page-spare-parts" к body, если человек зашел на стр: http://lamba/spare-parts --------------------------- */

if(document.location.href == 'http://lamba/spare-parts') {
  $('body').addClass('body-page-spare-parts')
}

/* --------------------------- 8.Корзина: название, артикул, количество товаров --------------------------- */

let cart = [];
var obj = {};

var dataGoodsNStart = localStorage.getItem("dataGoodsNLS");
var dataGoodsVCStart = localStorage.getItem("dataGoodsVCLS");
var dataGoodsNumStart = localStorage.getItem("dataGoodsNumLS");

var dataGoodsN = [];
var dataGoodsVC = [];
var dataGoodsNum = [];

var dataGoodsNGI = localStorage.getItem('dataGoodsNLS');
var dataGoodsVCGI = localStorage.getItem('dataGoodsVCLS');
var dataGoodsNumGI = localStorage.getItem('dataGoodsNumLS');


function setItemLS() {
  localStorage.setItem("dataGoodsNLS", JSON.stringify(dataGoodsN));
  localStorage.setItem("dataGoodsVCLS", JSON.stringify(dataGoodsVC));
  localStorage.setItem("dataGoodsNumLS", JSON.stringify(dataGoodsNum));
}

if(dataGoodsVCGI != null) {
  var DC_1 = JSON.parse(localStorage.getItem("dataGoodsNLS"));
  var DC_2 = JSON.parse(localStorage.getItem("dataGoodsVCLS"));
  var DC_3 = JSON.parse(localStorage.getItem("dataGoodsNumLS"));

  for(var i = 0; i < DC_1.length; i++) {
    dataGoodsN.push(DC_1[i]);
    dataGoodsVC.push(DC_2[i]);
    dataGoodsNum.push(DC_3[i]);
  }
}

var selectedProductsN;
var selectedProductsVC;

function selectedProductsSearch() {
  selectedProductsN = $('.name-producte');
  selectedProductsVC = $('.vendor-code-producte');

  for(var b = 0; b < selectedProductsN.length; b++) {
    var selectedProductsNs = selectedProductsN[b].innerHTML;
    var selectedProductsVCs = selectedProductsVC[b].innerHTML;
   
    if($.inArray(selectedProductsNs, dataGoodsN) != -1 && $.inArray(selectedProductsVCs, dataGoodsVC)!= -1) {
      var elemSelectedSC = selectedProductsN[b].nextElementSibling.nextElementSibling.querySelector('.add-to-shopping-сart');

      if(elemSelectedSC.classList.contains('to-order-block-sp-stop') === true && elemSelectedSC.classList.contains('add-to-shopping-сart-completed') === false) {

        elemSelectedSC.classList.remove('to-order-block-sp-stop');
        elemSelectedSC.classList.add('add-to-shopping-сart-completed');
      } 
    }
  }

  for(var q = 0; q < selectedProductsN.length; q++) {
    var selectedProductsNf = selectedProductsN[q].innerHTML;
    var selectedProductsVCf = selectedProductsVC[q].innerHTML;

    if($.inArray(selectedProductsNf, dataGoodsN) == -1 && $.inArray(selectedProductsVCf, dataGoodsVC) == -1) {
      var elemSelectedSCf = selectedProductsN[q].nextElementSibling.nextElementSibling.querySelector('.add-to-shopping-сart');

      if (elemSelectedSCf.classList.contains('to-order-block-sp-stop') === false && 
          elemSelectedSCf.classList.contains('add-to-shopping-сart-completed') === true) {
        elemSelectedSCf.classList.add('to-order-block-sp-stop');
        elemSelectedSCf.classList.remove('add-to-shopping-сart-completed');
      }
    }
  }
}

selectedProductsSearch();


/* --------------------------- 9. Увеличение и уменьшение количества добавляемого товара --------------------------- */

var quantityOfGoods = document.querySelectorAll('.quantity-of-goods .number');
var quantityOfGoodsMinus = document.querySelectorAll('.quantity-of-goods .minus');
var quantityOfGoodsPlus = document.querySelectorAll('.quantity-of-goods .plus');

function quantityGoods() {
  $('.quantity-of-goods .plus').on('click', function() {
   var val_p_p = $(this).prev().text();
   var val_p_p_f = +val_p_p;
   val_p_p_f = val_p_p_f + 1;
   $(this).prev().text(val_p_p_f);
   if(val_p_p_f > 0)
   $(this).parent().parent().children('.add-to-shopping-сart').removeClass('to-order-block-sp-stop');
 })

 $('.quantity-of-goods .minus').on('click', function() {
   var val_p_m = $(this).next().text();
   var val_p_m_f = +val_p_m;
   if(val_p_m_f != 0) {
       val_p_m_f = val_p_m_f - 1;
       $(this).next().text(val_p_m_f);
   } 
   if ((val_p_m_f == 0)) {
    $(this).parent().parent().children('.add-to-shopping-сart').addClass('to-order-block-sp-stop');
   }
 }); 
}

quantityGoods();

/* --------------------------- 10. Нажатие на кнопку "Добавить в корзину" товара --------------------------- */

$('.add-to-shopping-сart').on('click', function() {

  var quantity = $(this).prev().children('.number').text();
  var nameGoods = $(this).parent().prev().prev().text();
  var vanderCodeGoods = $(this).parent().prev().text();

  /* -----  Если количество товаров в корзине равно 0 то, ----- */
  if(dataGoodsVC.length === 0 && quantity != 0) {

    /* -----  Добавляем товар в корзину ----- */
    dataGoodsN.push(nameGoods);
    dataGoodsVC.push(vanderCodeGoods);
    dataGoodsNum.push(quantity);

    setItemLS();

    /* -----  Вызываем функцию numberOfItemsInTheBasket() ----- */
    numberOfItemsInTheBasket()

    /* -----  Меняем иконку в кнопке "Добавить в корзину" на "Выполнено"(галочка)----- */
    $(this).addClass('add-to-shopping-сart-completed');

    /* -----  Обнуляем количество товара на старнице ----- */
    $(this).prev().children('.number').html('0');

  } else {
      /* -----  Если товар не найден в списке добавленных в корзине то, ----- */

      if(($.inArray(nameGoods, dataGoodsN) === -1 || $.inArray(vanderCodeGoods, dataGoodsVC) === -1) && quantity != 0) {

          /* -----  Добавляем товар в корзину ----- */
          dataGoodsN.push(nameGoods);
          dataGoodsVC.push(vanderCodeGoods);
          dataGoodsNum.push(quantity);

          setItemLS();

          /* -----  Вызываем функцию numberOfItemsInTheBasket() ----- */
          numberOfItemsInTheBasket();

          /* -----  Меняем иконку в кнопке "Добавить в корзину" на "Выполнено"(галочка)----- */
          $(this).addClass('add-to-shopping-сart-completed');

          /* -----  Обнуляем количество товара на старнице ----- */  
          $(this).prev().children('.number').html('0');

        /* -----  Если товар найден в списке добавленных в корзине, то ----- */  
      } else if ($(this).parent('.to-order-block-sp').find('.number').text() != 0) {
          console.log($(this).parent('.to-order-block-sp').find('.number').text());
          /* -----  Показываем ошибку "Данный товар уже добавлен!" ----- */
          $('.text-error-goods').text('Данный товар уже добавлен!');
          $('.error-goods-container').fadeIn(1000);

          /* -----  Вызываем функцию closeErrorGoods() через 2,5 сек. ----- */
          setTimeout(closeErrorGoods, 2500);

          /* -----  Скрываем ошибку "Данный товар уже добавлен!" ----- */
          function closeErrorGoods() {
            $('.error-goods-container').fadeOut(1000);
          }
      } else if ($(this).parent('.to-order-block-sp').find('.number').text() == 0) {
          
          /* -----  Показываем ошибку "Укажите количество товаров!" ----- */
          $('.text-error-goods').text('Укажите количество товаров!');
          $('.error-goods-container').fadeIn(1000);

          /* -----  Вызываем функцию closeErrorGoods() через 2,5 сек. ----- */
          setTimeout(closeErrorGoods, 2500);

          /* -----  Скрываем ошибку "Укажите количество товаров!" ----- */
          function closeErrorGoods() {
            $('.error-goods-container').fadeOut(1000);
          }
      }
  }
});

/* --------------------------- 11. Скрываем ошибку "Данный товар уже добавлен!" по нажатию на кнопку "Закрыть"(крестик) --------------------------- */

$('.close-error-goods').on('click', function() {
  $('.error-goods-container').fadeOut(1000);
});

/* --------------------------- 12. Удаление товара из коризны и БД --------------------------- */

function dataOnModalWindow() {
  /* -----  Кнопка  ----- */
  $('.remove-good').on('click', function() {
    
    /* -----  Получение исходного числа  ----- */
    var removeGoodVC = $(this).parent().prev().text();
    
    /* -----  Созданние массива для всех элементов(артукулы)  ----- */
    var arrayBlock = [];

    /* -----  Переменная со всеми запчастями(элементы) ----- */
    var arrayBlock_1 = $('.tbody-tab-category-actice .vendor-code-producte');

    /* -----  Перебор всех элементов в массиве "arrayBlock_1", получение артикулов и добавление в "arrayBlock" ----- */
    for(var i = 0; i < arrayBlock_1.length; i++) {
      arrayBlock.push(arrayBlock_1[i].innerHTML);
    }

    /* -----  Перебор всех элементов в массиве "arrayBlock", получение индекса с совпавшим ----- */
    var indexOnList = $.inArray(removeGoodVC, arrayBlock);

    /* -----  Перебор всех элементов в массиве "arrayBlock_1", и при соответствии  ----- */
    for(var b = 0; b < arrayBlock_1.length; b++) {

      /* -----  Индекс b соответствует индексу найденного товара(удоляемого) то, ----- */
      if(b === indexOnList) {

        /* -----  Поиск соседнего элемента ----- */
        var statusChange = arrayBlock_1[b].nextElementSibling;
        console.log(statusChange);
        console.log('br');
        /* -----  Поиск нужного элемента и удаление класса у кнопки "Добавить в корзину" ----- */
        statusChange.querySelector('.add-to-shopping-сart').classList.remove('add-to-shopping-сart-completed');
        
      } 
    }

    /* -----  Удаление из всплывающего окна запчасти ----- */
    $(this).parent().parent().remove();

    /* -----  Перебор всех элементов в массиве "dataGoodsVC" м аолучение индекса совпавшего----- */
    var indexRemoveGoodVC = $.inArray(removeGoodVC, dataGoodsVC);

    var indexN = $(this).parent().prev().text();
    var indexR = dataGoodsVC.indexOf(indexN);
    var indexF = dataGoodsVC[indexR];

    if($(this).parent().prev().text() === indexF) {
      /* -----  Удаление из БД(корзина) запчасть ----- */
      dataGoodsN.splice(indexRemoveGoodVC, 1);
      dataGoodsVC.splice(indexRemoveGoodVC, 1);
      dataGoodsNum.splice(indexRemoveGoodVC, 1);

      setItemLS();
    }
  });
}

/* --------------------------- 13. Увеличение единицы товара и корзина --------------------------- */

function numberOfItemsInTheBasket() {
  /* -----  Если кнопка "Корзина" не имеет класс "basket-active" и счетчик элементов в корзине - "basket-number-active" то, ----- */
  if(dataGoodsVC.length != 0) {
    if($('.basket').hasClass('basket-active') != true && $('.basket-number').hasClass('basket-number-active') != true) {
      
       /* -----  Добавляем кнопке "Счетчик элементов в корзине" класс "basket-active" ----- */    
       $('.basket').addClass('basket-active');
  
       /* -----  Добавляем кнопке "Корзина" класс "basket-number-active" ----- */    
       $('.basket-number').addClass('basket-number-active');
  
       /* -----  Кнопка  ----- */
       /* -----  При нажатии на на кнопку "Корзина" с классом "basket-active", то  ----- */  
       $('.basket-active').on('click', function() {
  
          /* -----  Вызываем функцию counterGoods() ----- */ 
          counterGoods();
  
          /* -----  Вызываем функцию dataOnModalWindow() ----- */ 
          dataOnModalWindow();
  
          /* -----  Открываем окно с корзиной ----- */ 
          $('.order-in-one-click-block').fadeIn();
  
          /* -----  Фиксируем body ----- */ 
          $('body').css('overflow', 'hidden');
      });
    }
  
    /* -----  Подсчитываем количество товара в корзине ----- */ 
    var numberInTheBasket = dataGoodsVC.length;
    $('.basket-number').text(numberInTheBasket);
  }
}

numberOfItemsInTheBasket();
/* --------------------------- 14. Закрытие окна с корзиной --------------------------- */

$('.close-window-btn-sp').on('click', function() {

  /* -----  Подсчитываем количество товара в корзине ----- */ 
  var numberInTheBasket = dataGoodsVC.length;
  $('.basket-number').text(numberInTheBasket);

  /* -----  Удаляем все блоки ----- */
  $('.info-order-list .info-order-list-block').remove();

  /* -----  Если количество товаров к корзине равно 0 то, ----- */
  if(dataGoodsVC.length === 0) {

     /* -----  Удаляем кнопке "Счетчик элементов в корзине" класс "basket-active" ----- */    
     $('.basket-number').removeClass('basket-number-active');

     /* -----  Удаляем у кнопки "Корзина" класс "basket-number-active" ----- */  
     $('.basket').removeClass('basket-active');
  }
  selectedProductsSearch();

});

/* --------------------------- 15. Открытие всплывающего окня с ошибкой 'Вы не добавили ни одной запчасти в корзину' --------------------------- */

$('.basket-block').on('click', function() {

  if($('.basket').hasClass('basket-active') === false ) {

    /* -----  Показываем ошибку "Данный товар уже добавлен!" ----- */
    $('.text-error-goods').text('Вы не добавили ни одной запчасти в корзину');
    $('.error-goods-container').fadeIn(500);

    /* -----  Вызываем функцию closeErrorGoods() через 2,5 сек. ----- */
    setTimeout(closeErrorGoods, 2500);

    /* -----  Скрываем ошибку "Данный товар уже добавлен!" ----- */
    function closeErrorGoods() {
      $('.error-goods-container').fadeOut(500);
    }
  }
});

/* --------------------------- 16. Перебор массива и добавление товаров в корзину(модальное окно) --------------------------- */


function counterGoods() {
  dataGoodsVC.forEach(function(item, i, arr) {

    if(dataGoodsVC.length > i && $('.info-order-list .info-order-list-block').length < dataGoodsVC.length) {
      $('.info-order-list').append(
            '<div class="info-order-list-block">' +
              '<span class="info-order-list__name">' + dataGoodsN[i] + '</span>' +
              '<span class="info-order-list__vender-code">' + dataGoodsVC[i] + '</span>' +
              '<span class="info-order-list__number">' +
                '<span class="order-list__number">' +
                  '<span class="minus">-</span>' +
                  '<span class="number">' + dataGoodsNum[i] + '</span>' +
                  '<span class="plus">+</span>' +
                '</span>' +
                '<span class="remove-good"></span>' +
              '</span>' +
            '</div>'
      ); 
    }
  });
}

/* -----  Увеличение количества добавленного товара ----- */ 
 
$(".order-in-one-click-block").on("click", ".order-list__number .plus", function () {

        var val_w_p = $(this).prev().text();

        var val_w_p_f = +val_w_p;
        val_w_p_f = val_w_p_f + 1;
        $(this).prev().text(val_w_p_f);

        var VCChange_start = $(this).parent().parent().parent().children('.info-order-list__vender-code').text();
        var VCChange_middle = dataGoodsVC.indexOf(VCChange_start);
        dataGoodsNum[VCChange_middle] = val_w_p_f;
        setItemLS();
});

/* -----  Уменьшение количества добавленного товара ----- */ 

$(".order-in-one-click-block").on("click", ".order-list__number .minus", function () {
  var val_w_m = $(this).next().text();
  var val_w_m_f = +val_w_m;
  if(val_w_m_f != 1) {
      val_w_m_f = val_w_m_f - 1;
      $(this).next().text(val_w_m_f);
  }
  $( ".order-list__number .minus" ).off( "click" );

  var VCChange_start = $(this).parent().parent().parent().children('.info-order-list__vender-code').text();
  var VCChange_middle = dataGoodsVC.indexOf(VCChange_start);
  dataGoodsNum[VCChange_middle] = val_w_m_f;
  setItemLS();
});