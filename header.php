<!DOCTYPE html>
<html lang="ru">
<head>
	<!-- meta tag -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- seo -->
	<title><?= $title ?></title>
	<meta name="description" content="<?= $description ?>">
	
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">

	<link rel="manifest" href="img/favicon/site.webmanifest">
	<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="img/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<!-- style -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	
	<!-- script -->
	<script src="libs/jquery/dist/jquery.min.js" defer></script>
	<script src="js/script.js" defer></script>


</head>
<body>
	<!-- Header - Start -->
	<header class="header">
		<!-- Submenu - Start -->
		<div class="header-mobil submenu">
			<div class="container">
				<a href="mailto:gtksnab@mail.ru" class="submenu-block">
					<span class="submenu-block__icon submenu-block__icon-email"></span>
					<span class="submenu-info-block">
						<span class="submenu-info-block__title">Email</span>
						<span class="submenu-info-block__info">gtksnab@mail.ru</span>
					</span>
				</a>
				<a href="tel:+74951315749" class="submenu-block submenu-block-phone">
					<span class="submenu-block__icon submenu-block__icon-phone"></span>
					<span class="submenu-info-block">
						<span class="submenu-info-block__title">Телефон</span>
						<span class="submenu-info-block__info">+7 (495)-131-57-49</span>
					</span>
				</a>
				<span class="submenu-block">
					<span class="submenu-block__icon submenu-block__icon-work-hours"></span>
					<span class="submenu-info-block">
						<span class="submenu-info-block__title">Режим работы</span>
						<span class="submenu-info-block__info">Пн-Чт: 09:00 - 18:00, Пт: 09:00 - 17:00</span>
					</span>
				</span>
			</div>
		</div>
		<!-- Submenu - Finish -->
		<div class="container">
			<!-- Menu main - Start -->
			<div class="header-content">
				<div class="header-content-left">
					<a href="/" class="logo-link"><img src="img/logo.png" alt="ООО 'ГТК'" class="logo-img"></a>
				</div>
				<div class="header-content-right">
					<nav class="menu">
						<ul class="menu-list">
							<li class="menu-list-item"><a href="/" class="menu-list-item-link menu-list-item-link-index">Главная</a></li>
							<li class="menu-list-item"><a href="catalog" class="menu-list-item-link menu-list-item-link-catalog">Каталог</a></li>
							<li class="menu-list-item"><a href="spare-parts" class="menu-list-item-link menu-list-item-link-spare-parts">Запчасти</a></li>
							<li class="menu-list-item"><a href="delivery" class="menu-list-item-link menu-list-item-link-delivery">Доставка</a></li>
							<li class="menu-list-item"><a href="about-us" class="menu-list-item-link menu-list-item-link-about-us">О нас</a></li>
							<li class="menu-list-item"><a href="contacts" class="menu-list-item-link menu-list-item-link-contacts">Контакты</a></li>
						</ul>
					</nav>
					<div class="burger-menu">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
			<!-- Menu main - Finish -->
		</div>
	</header>
	<!-- Header - Finish -->

