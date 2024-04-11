<?php
global $_PARENT_URL;
$_PARENT_URL = '/00249-1avtokran-v3';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Project 00249</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/libs/fancybox/jquery.fancybox.min.css?v=2" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="./assets/libs/slick/slick.min.css?v=2" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="./assets/css/style.css?v=2">
</head>

<body>
    <div class="main">
        <div class="header-wrapper">
            <header class="header">
                <div class="container">
                    <div class="header__inner">

                        <div class="header__logo">
                            <div class="header__logo-img">
                                <a href="./">
                                    <img src="./assets/img/logo_header.svg" alt="Первый Автокран. Аренда спецтехники в Москве и области">
                                </a>
                            </div>
                            <h2 class="header__logo-desc">Аренда спецтехники в Москве и области</h2>
                        </div>

                        <div class="header__advantage">
                            <div class="header__advantage-icon"><img src="./assets/img/icon_1.svg" alt="На рынке более 20 лет"></div>
                            <div class="header__advantage-desc">
                                <div class="header__advantage-desc-txt">На рынке более 20 лет</div>
                            </div>
                        </div>

                        <div class="header__mail">
                            <a href="mailto:info@1avtokran.ru">
                                <div class="header__mail-icon"><img src="./assets/img/icon_2.svg" alt="почта"></div>
                                <div class="header__mail-desc">info@1avtokran.ru</div>
                            </a>
                        </div>

                        <div class="header__phone">
                            <div class="header__phone"><a href="tel:8 (499) 999-99-99">8 (499) 999-99-99</a></div>
                            <div class="header__phone-desc">круглосуточно и без выходных</div>
                        </div>

                    </div>
                </div>
            </header>
            <div class="header-nav">
                <div class="container">
                    <div class="header-nav__inner">
                        <div class="header__logo_mob">
                            <div class="header__logo-img">
                                <a href="./">
                                    <img src="./assets/img/logo_footer.svg" alt="Первый Автокран. Аренда спецтехники в Москве и области">
                                </a>
                            </div>
                            <h2 class="header__logo-desc">Аренда спецтехники в Москве и области</h2>
                        </div>
                        <nav>
                            <ul>
                                <?php
                                $curUrl = $_SERVER['REQUEST_URI'];
                                $pUrl = $_PARENT_URL;
                                ?>
                                <li class="<?= $curUrl === $pUrl . '/' ? 'current-menu-item' : ''; ?>"><a href="./">Главная</a></li>
                                <li class="<?= $curUrl === $pUrl . '/catalogtech.php' ? 'current-menu-item' : ''; ?>"><a href="./catalogtech.php">Каталог техники</a></li>
                                <li class="<?= $curUrl === $pUrl . '/prices.php' ? 'current-menu-item' : ''; ?>"><a href="./prices.php">Цены</a></li>
                                <li class="<?= $curUrl === $pUrl . '/uslugi.php' ? 'current-menu-item' : ''; ?>"><a href="./uslugi.php">Услуги</a></li>
                                <li class="<?= $curUrl === $pUrl . '/about.php' ? 'current-menu-item' : ''; ?>"><a href="./about.php">О компании</a></li>
                                <li class="<?= $curUrl === $pUrl . '/ourworks.php' ? 'current-menu-item' : ''; ?>"><a href="./ourworks.php">Наши работы</a></li>
                                <li class="<?= $curUrl === $pUrl . '/vacancies.php' ? 'current-menu-item' : ''; ?>"><a href="./vacancies.php">Вакансии</a></li>
                                <li><a href="#">Отзывы</a></li>
                            </ul>
                        </nav>
                        <div class="header-nav__mob-btn"><span></span><span></span><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END header -->