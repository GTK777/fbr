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

/* --------------------------- 2. Поиск по артикулу --------------------------- */

document.querySelector('#elastic').oninput = function() {


  var val = this.value.trim();
  var elasticItem_name = document.querySelectorAll('.table-block .section-one-content .name-producte');
  var elasticItem_code = document.querySelectorAll('.tbody-tab-category-actice tr .vendor-code-producte');

  if(val != '') {
    elasticItem_name.forEach(function(elem) {
      if (elem.innerText.search(val) == -1) {
        elem.parentElement.classList.add('hidden-search');
        elem.innerHTML = elem.innerText;
      } else {
        elem.parentElement.classList.remove('hidden-search');
        var str = elem.innerText;
        elem.innerHTML = insertMark(str,elem.innerText.search(val), val.length);
      }
    });
  }  else {
    elasticItem_name.forEach(function(elem) {
        elem.parentElement.classList.remove('hidden-search');
        elem.innerHTML = elem.innerText;
      }); 
   };
};

function insertMark(string, pos, len) {
  return string.slice(0, pos)+'<mark>'+string.slice(pos, pos+len)+'</mark>'+string.slice(pos+len);
}

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


/* --------------------------- 4. Spare-parts page > spare-parts section (Заказ товара за один клик) --------------------------- */


$('.order-in-one-click').on('click', function() {
  var nameProduct = $(this).parent().children('.name-producte').text();

  $('.check-list__name-producte-des').val(nameProduct);

  $('.order-in-one-click-block').fadeIn();
  $('body').css('overflow', 'hidden'); 
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
