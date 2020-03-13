/* --------------------------- 1. Согласен на обработку персональных данных --------------------------- */

$('.checkbox-block').on('click', function() {
  $('.checkbox-10').attr('checked', "");
});


var checkbox = $('.checkbox-10').attr('checked');
if(checkbox === undefined) {

}


/* --------------------------- 2. Индикатор в форме (input:file) --------------------------- */

var addFileLabel = document.querySelector('.add-file-label');
var addFileText = document.querySelector('.add-file-text');
addFileLabel.addEventListener('change', function () {
  var addFileTextV = document.querySelector('.add-file-input').value;
  addFileTextV = addFileTextV.replace(/\\/g, '/').split('/').pop();
  if(addFileTextV != '') {
    addFileText.innerHTML = addFileTextV;
  } else {
    addFileText.innerHTML = 'Файл не выбран';
  }
 
})


/* --------------------------- 3. Удаление задваивания --------------------------- */


$('.close-basket').on('click', function() {
  $('.close-window').fadeOut();
  $('.check-list-cart-two span').remove();
});


/* --------------------------- 5. Открытие и скрытие модальных окон --------------------------- */


$('.to-order').on('click', function() {
  $('.section-form-and-contacts-modal').fadeIn();
  $('body').css('overflow', 'hidden');
});

$('.callback-btn').on('click', function() {
    $('.back-call-modal').fadeIn();
  $('body').css('overflow', 'hidden'); 
});

$('.close-window-btn').on('click', function() {
  $('.close-window').fadeOut();
  $('body').css('overflow', 'auto'); 
});


/* --------------------------- 6. фиксация header and burger-menu  --------------------------- */


$('.burger-menu').on('click', function() {
  $('.burger-menu').toggleClass('burger-menu-active');
  $('.menu').toggleClass('menu-active');
  $('body').toggleClass('overflowH');
}); 

var headerTop = $('.header').height();

$(window).scroll(function(){
    if($(this).scrollTop() > 0) {
        $('.submenu-info-block__title').addClass('submenu-info-block__title-scroll');
        $('.submenu-block__icon').addClass('submenu-block__icon-scroll');
        $('.submenu-block-scroll').addClass('submenu-block-scroll');
        $('.submenu .container-scroll').addClass('submenu-block-scroll');
        $('.submenu-info-block__info').addClass('submenu-info-block__info-scroll');
        $('.header').addClass('fixed');
        $('.main').css('padding-top', '135px');

    }
    else if ($(this).scrollTop() < headerTop) {
        $('.submenu-info-block__title').removeClass('submenu-info-block__title-scroll');
        $('.submenu-block__icon').removeClass('submenu-block__icon-scroll');
        $('.submenu-block-scroll').removeClass('submenu-block-scroll');
        $('.submenu .container-scroll').removeClass('submenu-block-scroll');
        $('.submenu-info-block__info').removeClass('submenu-info-block__info-scroll');

        $('.header').removeClass('fixed');
        $('.main').css('padding-top', '0');
    }
});


/* --------------------------- 7. contact page(перемещение элемента)  --------------------------- */

var contactsInfo = $('.contacts-info');

if($(document).width() < 1350) {
  $('.section-form-and-contacts .container').append(contactsInfo);
  $('.map-block .container:last-child').remove();
};


if(document.location.href == 'http://lamborghini/contacts') {
  document.querySelector('.header .menu-list-item-link-contacts').classList.add('menu-list-item-link-focus');
} else if (document.location.href == 'http://lamborghini/about-us') {
  document.querySelector('.header .menu-list-item-link-about-us').classList.add('menu-list-item-link-focus');
} else if (document.location.href == 'http://lamborghini/delivery') {
  document.querySelector('.header .menu-list-item-link-delivery').classList.add('menu-list-item-link-focus');
} else if (document.location.href == 'http://lamborghini/catalog') {
  document.querySelector('.header .menu-list-item-link-catalog').classList.add('menu-list-item-link-focus');
} else if (document.location.href == 'http://lamborghini/') {
  document.querySelector('.header .menu-list-item-link-index').classList.add('menu-list-item-link-focus');
} else if (document.location.href == 'http://lamborghini/spare-parts') {
  document.querySelector('.header .menu-list-item-link-spare-parts').classList.add('menu-list-item-link-focus');
}

/* --------------------------- 8. Кнопка наверх start  --------------------------- */

$(document).scroll(function() {
    if($(document).scrollTop() > 150) {
        $('.go-to-up').fadeIn(500);
    } else {
        $('.go-to-up').fadeOut(500);
    }
});

$('.btn-go-to-up').on('click', function() {
     $("html, body").animate({scrollTop: $('body').offset().top+"px"}, 600);
            return false;
    console.log('gr');
})

/* --------------------------- 9. Формы обратной связи  --------------------------- */

function finishAnswer() {
  $('.circle-block').fadeOut(500);
  $('.circle-block').remove();
  $(".content.content-back-call").append('<div class="answer-after-post-mail-block"><img src="img/logo-black.png" alt="GTK" class="logo-img"><p class="answer-after-post-mail">Ваша заявка принята, благодарим за проявленный интерес. Наши сотрудники свяжутся с вами в ближайшее время.</p></div>');
}

function finishNoAnswer() {
  $('.circle-block').fadeOut(500);
  $('.circle-block').remove();
  $(".content.content-back-call").append('<div class="answer-after-post-mail-block"><img src="img/icon/big-bug.svg" alt="GTK" class="logo-img bug"><p class="answer-after-post-mail">К сожалению,  ваше сообщение не может быть отправлено. Пожалуйста, свяжитесь с нами по телефону или напишите на почту gtksnab@mail.ru</p></div>');
}

function finishAnswer2() {
  $('.circle-block').fadeOut(500);
  $('.circle-block').remove();
  $(".section-form-contacts-contant").append('<div class="answer-after-post-mail-block"><img src="img/logo-black.png" alt="GTK" class="logo-img"><p class="answer-after-post-mail">Ваша заявка принята, благодарим за проявленный интерес. Наши сотрудники свяжутся с вами в ближайшее время.</p></div>');
}

function finishNoAnswer2() {
  $('.circle-block').fadeOut(500);
  $('.circle-block').remove();
  $(".section-form-contacts-contant").append('<div class="answer-after-post-mail-block"><img src="img/icon/big-bug.svg" alt="GTK" class="logo-img bug"><p class="answer-after-post-mail">К сожалению,  ваше сообщение не может быть отправлено. Пожалуйста, свяжитесь с нами по телефону или напишите на почту gtksnab@mail.ru</p></div>');
}

function creatureWindowModal() {
  $('body').css('overflow', 'hidden');
  $("main.page-with-static-form").append('<div class="back-call-modal close-window  content-form-answer-block">' +
      '<div class="container">' +
        '<div class="content content-back-call content-form-answer">' +
          
          '<span class="close-window-btn remove-block-content-form-answer"></span>' +
        '</div>' +
      '</div>' +
    '</div>');


  var removeBlockContentFormAnswer = document.querySelector('.remove-block-content-form-answer');
  removeBlockContentFormAnswer.onclick = function() {
    $('.content-form-answer-block').remove();
    $('body').css('overflow-y', 'auto');
  }
}

function finishAnswer3() {
  $('.circle-block').fadeOut(500);
  $('.circle-block').remove();
  $(".content-form-answer").append('<div class="answer-after-post-mail-block"><img src="img/logo-black.png" alt="GTK" class="logo-img"><p class="answer-after-post-mail">Ваша заявка принята, благодарим за проявленный интерес. Наши сотрудники свяжутся с вами в ближайшее время.</p></div>');
}

function finishNoAnswer3() {
  $('.circle-block').fadeOut(500);
  $('.circle-block').remove();
  $(".content-form-answer").append('<div class="answer-after-post-mail-block"><img src="img/icon/big-bug.svg" alt="GTK" class="logo-img bug"><p class="answer-after-post-mail">К сожалению,  ваше сообщение не может быть отправлено. Пожалуйста, свяжитесь с нами по телефону или напишите на почту gtksnab@mail.ru</p></div>');
}

function finishAnswer4() {
  $('.circle-block').fadeOut(500);
  $('.circle-block').remove();
  $(".order-in-one-click-content").append('<div class="answer-after-post-mail-block"><img src="img/logo-black.png" alt="GTK" class="logo-img"><p class="answer-after-post-mail">Ваша заявка принята, благодарим за проявленный интерес. Наши сотрудники свяжутся с вами в ближайшее время.</p></div>');
}

function finishNoAnswer4() {
  $('.circle-block').fadeOut(500);
  $('.circle-block').remove();
  $(".order-in-one-click-content").append('<div class="answer-after-post-mail-block"><img src="img/icon/big-bug.svg" alt="GTK" class="logo-img bug"><p class="answer-after-post-mail">К сожалению,  ваше сообщение не может быть отправлено. Пожалуйста, свяжитесь с нами по телефону или напишите на почту gtksnab@mail.ru</p></div>');
}



$(function(){
  'use strict';
$('#form2').on('submit', function(e){
  if ($('.checkbox-10').is(':checked')){
    e.preventDefault();
    var fd = new FormData( this );
    $.ajax({
      url: 'formPHP/send.php',
      type: 'POST',
      contentType: false, 
      processData: false, 
      data: fd,
      success: function(msg){
          if(msg == 'ok') {
            creatureWindowModal();
            $("#form2 .theme-input-style").val('');
            $('.content-form-answer-block').css('display', 'block');
            $(".content-form-answer").append('<div class="circle-block"><span></span><span></span></div>')
            setTimeout(finishAnswer3, 2000);
            highlightCheckboxNo();   
          } else {
            creatureWindowModal();
            $('.content-form-answer-block').css('display', 'block');
            $(".content-form-answer").append('<div class="circle-block"><span></span><span></span></div>')
            setTimeout(finishNoAnswer3, 2000);   
          }
        }
       });
  } else {
    e.preventDefault();
    highlightCheckbox();
  }

    });
});

$(function(){
  'use strict';
  $('#form').on('submit', function(e){
    if ($('.checkbox-10').is(':checked')){
      e.preventDefault();
      var fd = new FormData( this );
      $.ajax({
        url: 'formPHP/send.php',
        type: 'POST',
        contentType: false, 
        processData: false, 
        data: fd,
        success: function(msg){
            if(msg == 'ok') {
                $(".print-none.title-uppercase").remove();
                $(".line-style.print-none").remove();
                $(".contact-form-margin-style-p").remove();
                $(".form-main").remove();
                $(".section-form-contacts-contant").append('<div class="circle-block"><span></span><span></span></div>')
                setTimeout(finishAnswer2, 2000);   
                highlightCheckboxNo();  
            } else {
               $(".print-none.title-uppercase").remove();
               $(".line-style.print-none").remove();
               $(".contact-form-margin-style-p").remove();
               $(".form-main").remove();
               $(".section-form-contacts-contant").append('<div class="circle-block"><span></span><span></span></div>')
               setTimeout(finishNoAnswer2, 2000);   
            }
          }
         });
    } else {
      e.preventDefault();
      highlightCheckbox();
    }
  });
});

$(function(){
  'use strict';
$('.modal-mobile-menu-form').on('submit', function(e){
  e.preventDefault();
  var fd = new FormData( this );
  $.ajax({
    url: 'formPHP/send-contact.php',
    type: 'POST',
    contentType: false, 
    processData: false, 
    data: fd,
    success: function(msg){
        if(msg == 'ok') {
           $(".modal-mobile-menu-form").remove();
           $(".content.content-back-call").append('<div class="circle-block"><span></span><span></span></div>')
           setTimeout(finishAnswer, 2000);   
        } else {
            $(".modal-mobile-menu-form").remove();
            $(".content.content-back-call").append('<div class="circle-block"><span></span><span></span></div>')
            setTimeout(finishNoAnswer, 2000);   
        }
      }
     });
    });
});

$(function(){
  'use strict';
$('.order-in-one-click-form').on('submit', function(e){
  e.preventDefault();
  var fd = new FormData( this );
  $.ajax({
    url: 'formPHP/order.php',
    type: 'POST',
    contentType: false, 
    processData: false, 
    data: fd,
    success: function(msg){
        if(msg == 'ok') {
           $(".order-in-one-click-form").remove();
           $(".order-in-one-click-content").append('<div class="circle-block"><span></span><span></span></div>')
           setTimeout(finishAnswer4, 2000);   
        } else {
            $(".order-in-one-click-form").remove();
            $(".order-in-one-click-content").append('<div class="circle-block"><span></span><span></span></div>')
            setTimeout(finishNoAnswer4, 2000);   
        }
      }
     });
    });
});


function highlightCheckbox() {
  $('.checkbox-743285').addClass('checkbox-743285-no-active');
  $('.checkbox-743286').addClass('checkbox-743286-no-active');
}

function highlightCheckboxNo() {
  $('.checkbox-743285').removeClass('checkbox-743285-no-active');
  $('.checkbox-743286').removeClass('checkbox-743286-no-active');
  $('checkbox-743284:checkbox').prop('checked', false);
}

var arrModification = $('.burners-modal__content_link');
var arrModificationTable = $('.table-modification-choise');

// $('.burners-modal__content > .circle-burners-modal').addClass('circle-burners-modal-active');
$('.burners-modal__content > .burners-modal__content_link:first-child').addClass('burners-modal__content_link-active');
$('.burners-modal__content > .burners-modal__content_link:first-child .circle-burners-modal').addClass('circle-burners-modal-active');
$('.burners-modal__content > .burners-modal__content_link:first-child h6').addClass('fonts-active');

$('.burners-modal__content_link').on('click', function() {
  if($(this).hasClass('circle-burners-modal-active') === false) {
    
    // Удаление классов
    $('.burners-modal__content_link').find('h6').removeClass('fonts-active');
    $('.burners-modal__content_link .circle-burners-modal').removeClass('circle-burners-modal-active');
    $('.burners-modal__content_link').removeClass('burners-modal__content_link-active');
   
   // Добавление классов
    $(this).find('.circle-burners-modal').addClass('burners-modal__content_link circle-burners-modal-active');
    $(this).addClass('burners-modal__content_link-active');
    $(this).find('h6').addClass('fonts-active');


    var arrModIndex = arrModification.index(this);
    $('.table-modification-choise').removeClass('table-modification-choise-active')
    $('.table-modification-choise').addClass('table-modification-choise-close')
    arrModificationTable[arrModIndex].classList.remove('table-modification-choise-close');
    arrModificationTable[arrModIndex].classList.add('table-modification-choise-active');
 }
});

/* --------------------------- 10. Местонахождение пользователя --------------------------- */

var breadCrumbsOther = document.querySelectorAll('.bread-crumbs-item:nth-child(3) .bread-crumbs-link');
var mainLineBlockLast = document.querySelectorAll('.main-line-block-first .main-line-link');

for(var i = 0; i < mainLineBlockLast.length; i++) {
  
  if(breadCrumbsOther[0].innerHTML == mainLineBlockLast[i].innerHTML) {
      mainLineBlockLast[i].classList.add('are-you-here');
  }
}

var breadCrumbsOther_2 = document.querySelectorAll('.bread-crumbs-item:nth-child(2) .bread-crumbs-link');
var mainLineBlockLast_2 = document.querySelectorAll('.main-line-block-last .main-line-link');

for(var i = 0; i < mainLineBlockLast_2.length; i++) {

  if(breadCrumbsOther_2[0].innerHTML == mainLineBlockLast_2[i].innerHTML) {
      mainLineBlockLast_2[i].classList.add('are-you-here');
  }
}

/* --------------------------- 11. Добавляем ссылку на источник при копировании с сайта  --------------------------- */

function MyCopyText() {
var target_text = window.getSelection(),
add_text = '<br><br> Источник: ' + document.location.href,
out_text = target_text + add_text,
fake = document.createElement('div');
fake.style.position = 'absolute';
fake.style.left = '-99999px';
document.body.appendChild(fake);
fake.innerHTML = out_text;
target_text.selectAllChildren(fake);
window.setTimeout(function() {
document.body.removeChild(fake);
}, 100);
}
document.addEventListener('copy', MyCopyText);

// 12. Запрет на ввод символов в форме

$('.theme-input-phone').on('input', function() {
  var tip = $(this).val();
  var tips_1 = /[_=~`!@#$%^&*<>|/?!@#$%^&*_|><,.:;№"]/g;
  var tips_2 = /[а-я]/gi;
  var tips_3 = /[a-z]/gi;

  if(tips_1.test(tip) || tips_2.test(tip) || tips_3.test(tip)) {
    $('.tip-two').addClass('theme-input-phone-hover');

    setTimeout(closeErrorGoodsForm1, 2000);

    function closeErrorGoodsForm1() {
      $('.tip-two').removeClass('theme-input-phone-hover');
    }
  } 

  $(this).val($(this).val().replace(/[а-я]/gi, ''));
  $(this).val($(this).val().replace(/[a-z]/gi, ''));
  $(this).val($(this).val().replace(/[_=~`!@#$%^&*<>|/?!@#$%^&*_|><,.:;№""]/g, ''));
});

$('.theme-input-name').on('input', function() {
  var tin = $(this).val();
  var tins_1 = /[A-z]/gi;
  var tins_2 = /[1234567890]/g;
  var tins_3 = /[-_+=~`!@#$%^&*()<>|/?!@#$%^&*()_+|><,.:;№""]/g;

  if(tins_1.test(tin) || tins_2.test(tin) || tins_3.test(tin)) {
    $('.tip-two').addClass('theme-input-name-hover');
    setTimeout(closeErrorGoodsForm2, 2000);

    function closeErrorGoodsForm2() {
      $('.tip-two').removeClass('theme-input-name-hover');
    }
  } 

  $(this).val($(this).val().replace(/[A-z]/gi, ''));
  $(this).val($(this).val().replace(/[1234567890]/g, ''));
  $(this).val($(this).val().replace(/[-_+=~`!@#$%^&*()<>|/?!@#$%^&*()_+|><,.:;№""]/g, ''));
});


$('.theme-input-company').on('input', function() {
  var tic = $(this).val();
  var tics = /[-_+=~`!@#$%^&*()<>|/?!@#$%^&*()_+|><,.:;№"]/g;
  
  if(tics.test(tic)) {
    $('.tip-two').addClass('theme-input-company-hover');

    setTimeout(closeErrorGoodsForm3, 2000);

    function closeErrorGoodsForm3() {
      $('.tip-two').removeClass('theme-input-company-hover');
    }
  } 

  $(this).val($(this).val().replace(/[-_+=~`!@#$%^&*()<>|/?!@#$%^&*()_+|><,.:;№"]/g, ''));

});


$('.theme-input-city').on('input', function() {
  var tiс = $(this).val();
  var tiсs_1 = /[A-z]/gi;
  var tiсs_2 = /[1234567890]/g;
  var tiсs_3 = /[-_+=~`!@#$%^&*()<>|/?!@#$%^&*()_+|><,.:;№""]/g;

  if(tiсs_1.test(tiс) || tiсs_2.test(tiс) || tiсs_3.test(tiс)) {
    $('.tip-two').addClass('theme-input-city-hover');

    setTimeout(closeErrorGoodsForm4, 2000);

    function closeErrorGoodsForm4() {
      $('.tip-two').removeClass('theme-input-city-hover');
    }
  } 

  $(this).val($(this).val().replace(/[A-z]/gi, ''));
  $(this).val($(this).val().replace(/[1234567890]/g, ''));
  $(this).val($(this).val().replace(/[-_+=~`!@#$%^&*()<>|/?!@#$%^&*()_+|><,.:;№""]/g, ''));
});

$('.PropertyItem .Name')