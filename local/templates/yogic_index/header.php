<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset; ?>

<!doctype html>
<html lang="en">

<head>
    <? $APPLICATION->ShowHead(); ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico"/>

    <!-- Required meta tags -->
    <?php Asset::getInstance()->addString(
        '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">'
    ) ?>

    <!--show title -->
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <!--required style css-->
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style-starter.css"); ?>

    <!-- google-fonts -->
    <?php Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com">')
    ?>
    <?php Asset::getInstance()->addString(
        '<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">'
    ) ?>
    <!-- //google-fonts -->

    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js"); ?>
</head>

<body>
<? if ($GLOBALS["USER"]->IsAuthorized()): ?>
    <? $APPLICATION->ShowPanel(); ?>
    <script>
        BX.ready(function () {
            var MyPanel = BX("site-header"), // ID ShowPanel Bitrix
                BxPanel = BX.admin.panel,
                FxPanel = function () {
                    if (window.pageYOffset >= BxPanel.DIV.clientHeight && BxPanel.isFixed() === false) {
                        MyPanel.style.top = 0;
                    } else if (BxPanel.isFixed() === true) {
                        MyPanel.style.top = BxPanel.DIV.clientHeight + "px";
                    } else {
                        MyPanel.style.top = BxPanel.DIV.clientHeight - window.pageYOffset + "px";
                    }
                };
            if (!!MyPanel) {
                FxPanel();
                window.onscroll = FxPanel;
                window.onload = FxPanel;
                BX.addCustomEvent('onTopPanelCollapse', BX.delegate(FxPanel, this));
                BX.addCustomEvent('onTopPanelFix', BX.delegate(FxPanel, this));
            }
        });
    </script>
<? endif; ?>
<!--header-->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
            <h1>
                <a class="navbar-brand" href="/">
                    <i class="fa fa-yoast" aria-hidden="true"></i>ogic
                </a>
            </h1>
            <!-- if logo is image enable this
<a class="navbar-brand" href="#index.html">
    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
</a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Главная<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="classes.html">Классы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Контакты</a>
                    </li>
                </ul>
            </div>
            <!-- search button -->
            <div class="search-right">
                <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                <!-- search popup -->
                <div id="search" class="pop-overlay">
                    <div class="popup">
                        <form action="#search" method="GET" class="search-box">
                            <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                   autofocus="">
                            <button type="submit" class="btn"><span class="fa fa-search"
                                                                    aria-hidden="true"></span></button>
                        </form>
                    </div>
                    <a class="close" href="#close">×</a>
                </div>
                <!-- //search popup -->
            </div>
            <!-- //search button -->
            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>


<!--//header-->
<!-- banner section -->

