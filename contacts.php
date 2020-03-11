<?php
	require "variable/title.php";
	$title = "$contactsTitle";
	$description = "$contactsDesc"; 
	require 'header.php';
?>

	<main class="main page-with-static-form">
		<section class="bread-crumbs-section">
		 	<div class="container">
		 		<div class="bread-crumbs-content">
		 			<ul class="bread-crumbs-list">
						<li class="bread-crumbs-item"><a href="/" class="bread-crumbs-link bread-crumbs-link-next">Главная</a></li>
						<li class="bread-crumbs-item"><a href="contacts.html" class="bread-crumbs-link bread-crumbs-link-now">Контакты</a></li>
		 			</ul>
		 		</div>
		 	</div>
		</section>
		<div class="contacts-title-block">
			 <div class="container">
			 	<div class="contacts-title-content">
			 		<h1 class="contacts-title">Контакты</h1>
			 		<p>При возникновении вопросов по подбору запасных частей, моделям горелки или котла вы можете обратиться за консультацией к нашим специалистам по телефону или через форму обратной связи.</p>
			 	</div>
			 </div>
		</div> 
        <div class="map-block">
        	<div class="container">
        		<div class="map-content">
        			<iframe src="https://www.google.com/maps/embed?pb=!1m24!1m8!1m3!1d17920.36632477405!2d37.440597!3d55.84452!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x46b547f4809604d1%3A0x892e4ddefa1402dc!2z0JzQtdGC0YDQviAi0KHRhdC-0LTQvdC10L3RgdC60LDRjyIsINCc0L7RgdC60LLQsCwgMTI1NDgw!3m2!1d55.851862!2d37.438836099999996!4m5!1s0x46b547e42d11b675%3A0x9621f2204f271541!2z0J3QvtCy0L7Qv9C-0YHQtdC70LrQvtCy0LDRjyDRg9C7LiwgNiDQutC-0YDQv9GD0YEgMjE3LCDQnNC-0YHQutCy0LAsIDEyNTM2Mw!3m2!1d55.8373961!2d37.443337799999995!5e0!3m2!1sru!2sru!4v1573742244068!5m2!1sru!2sru" width="100%" height="670" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        		</div>
        	</div>
        	<div class="container">
        		<div class="contacts-info">
        			<div class="contacts-info-contant">
	        			<div class="contacts-info__text-block">
	        				<h2>Наши  контакты:</h2>
	        			</div>
	        			<div class="contacts-info__block contacts-info__number-phone">
	        				<span class="contacts-info__block-title">Номер телефона:</span>
	        				<span class="contacts-info__block-desc">+7 (495) 131-57-49</span>
	        			</div>
	        			<div class="contacts-info__block contacts-info__email">
	        				<span class="contacts-info__block-title">Электронный адрес:</span>
	        				<span class="contacts-info__block-desc">gtksnab@mail.ru</span>
	        			</div>
	        			<div class="contacts-info__block contacts-info__adress">
	        				<span class="contacts-info__block-title">Местный адрес:</span>
	        				<span class="contacts-info__block-desc">г. Москва, Южное Тушино, улица Новопоселковая, д. 6, кор. 217</span>
	        			</div>
	        			<div class="contacts-info__block contacts-info__hour">
	        				<span class="contacts-info__block-title">Режим работы:</span>
	        				<div class="hour-block">
	        					<div><span class="contacts-info__hour-title">Понедельник-Четверг:</span><span class="contacts-info__hour-desc">9:00-18:00</span></div> 
	        					<div><span class="contacts-info__hour-title">Пятница:</span><span class="contacts-info__hour-desc">9:00-17:00</span></div>  
	        					<div><span class="contacts-info__hour-title">Суббота-Воскресение:</span><span class="contacts-info__hour-desc">выходной</span></div>  
	        				</div>
	        			</div>
        			</div>
        		</div>
        	</div>
        </div>
		<!-- Main block -> Form on main page - Start -->
		<section id="form-section" class="section section-form-and-contacts">
		    <div class="container">
		    	<div class="section-form-contacts-contant">
			        <h2 class="print-none title-uppercase">Отправить заявку</h2>
			        
			        <div class="line-style print-none"></div>
		            <p class="contact-form-margin-style-p">* Поля обязательные для заполнения</p>
    		        <form enctype="multipart/form-data" method="post" id="form2" class="form-main">
                        <div class="form-field form-field-name">
                            <input type="text" name="name" class="theme-input-main theme-input-name theme-input-style" placeholder="Контактное лицо *" required  maxlength="20">
                            <span class="tip-block">
                            	<span class="tip-two">Используйте ввод только на кириллице.</span>
                            </span>
                        </div>
                        <div class="form-field">
                            <input type="email" name="email" class="theme-input-main theme-input-style" placeholder="E-mail *" required>
                        </div>
                        <div class="form-field form-field-phone">
                            <input type="tel" name="phone" class="theme-input-main theme-input-phone  theme-input-style" placeholder="Телефон *" required maxlength="20">
                            <span class="tip-block">
                            	<span class="tip-two">Используйте ввод цифр и знаков: +, -, (, )</span>
                            </span>
                        </div>
                        <div class="form-field form-field-company">
                            <input type="text" name="firm" class="theme-input-main  theme-input-company theme-input-style" placeholder="Компания" maxlength="30">
                            <span class="tip-block">
                            	<span class="tip-two">Используйте ввод на кириллице, латинице и цифры.</span>
                            </span>
                        </div>
                        <div class="form-field  form-field-city">
                            <input type="text" name="city" class="theme-input-main  theme-input-city theme-input-style" placeholder="Город" maxlength="20">
                            <span class="tip-block">
                            	<span class="tip-two">Используйте ввод только на кириллице.</span>
                            </span>
                        </div>
                        <div class="form-field">
                            <select name="subject" class="theme-input-main theme-input-style" style="-webkit-appearance: none; color: #777;">
                                <option value="" style="display:none;">Выбрать тему письма &#9660;</option>
                                <option value="Заявка">Заявка</option>
                                <option value="Звонок">Звонок</option>
                                <option value="Консультации">Консультации</option>
                            </select>
                        </div>
    		            <div class="form-field-other-txt">
    		                <textarea name="message" class="theme-input-main-textarea theme-input-style" placeholder="Текст письма *" required></textarea>
    		            </div>
    		            <div class="form-field-other-bl">
    	                   <div class="form-field-other-bl f-f-o-bl-2">
    			                    <div class="form-field-other">
    			                      	<label class="add-file-label" for="userfile1-1">
    			                      		<span class="add-file-text-container">
    			                      			<span class="add-file-text">Файл не выбран</span>
    			                      		</span>
    			                          	<input type="file" name="userfile[]" multiple id="userfile1-1" class="w100 add-file-input" accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv">
    			                      		<span class="add-file-btn">
    	                      					<i class="add-file-icon"></i>
    	                      			    	<span class="add-file-btn-text">выбрать</span>
    			                      		</span>
    			                      		
    			                      	</label>
    			                    </div>
    				            </div>
    	                    <button type="submit" class="btn px-5 submit-form-10 btn-product btn-product-contact">ОТПРАВИТЬ
    	                    </button>
    		            </div>
    		            <div id="formResponse-1" class="form-response p-2 mb-3 text-center">Сообщение отправлено.</div>
    		            <div class="form-field-other-mess form-field-bottom">
    		                <label class="checkbox-743284">
    		                    <input type="checkbox" name="acceptance-10" class="checkbox-10 checkbox-743285" id="checkbox-0089-1" value="1" aria-invalid="false">
    		                    <span class="contact-form-margin-style-span checkbox-743286">«Согласен на обработку персональных данных. Ставя отметку, я даю свое согласие на обработку моих персональных данных в соответствии с законом №152-ФЗ «О персональных данных» от 27.07.2006 и принимаю условия 
    		                    <a class="refer" href="/politika" target="_blank">Политики конфиденциальности персональных данных</a>».
    		                    </span>
    		                </label>
    		            </div>
    		        </form>
		   		</div>
		    </div>
		</section>
		<!-- Main block -> Form on main page - Finish -->
	</main>

	<?php 
		require 'footer.php';
	?>