<!DOCTYPE html>
<html class="vw-100">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/import.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <script src="js/jquery.2.2.4.min.js"></script>
    <title>Hello, world!</title>
</head>
<body>
<div id="page" class="vw-100">
    <!-- Header -->
    <header class="header w-100 fixed-top">
        <div class="container">
            <div class="header-inner">
                <a href="#" class="logo">
                    <img src="images/logo.svg" alt="">
                </a>
                <nav id="mainNavbar" class="main-nav">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">UNTERNEHMEN</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Kennzahlen & Philosopie</a></li>
                            <li><a class="dropdown-item" href="#">Karriere</a></li>
                            <li><a class="dropdown-item" href="#">Kontakt</a></li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">BRANCHEN</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Premium & Luxury Automotive</a></li>
                            <li>
                                <a class="dropdown-item" href="https://www.google.com/">Industry Champions</a>
                                <ul class="lv2">
                                    <li><a href="#" class="dropdown-item">Med Tech</a></li>
                                    <li><a href="#" class="dropdown-item">Chem Tech</a></li>
                                    <li><a href="#" class="dropdown-item">Industry</a></li>
                                    <li><a href="#" class="dropdown-item">Defense</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">MITMACHEN</a></li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">DIENSTLEISTUNG</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Engineering & Projectmanagement</a></li>
                            <li><a class="dropdown-item" href="#">Production & Assembly</a></li>
                            <li><a class="dropdown-item" href="#">Validation & Testing</a></li>
                            <li><a class="dropdown-item" href="#">Brands</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="header-actions">
                    <div class="search_wap position-relative">
                        <div class="search_form position-relative">
                        <form action="" class="DocSearch-Form d-flex w-100">
                            <label for="docsearch-input" class="DocSearch-MagnifierLabel position-absolute start-0 top-0 ps-1 lh-normal pt-0"><img class="icon-search" src="images/icon-search.svg" alt=""></label>
                            <input id="docsearch-input" autocomplete="off" placeholder="" maxlength="64" type="text" value="" class="input-search DocSearch-Input">
                        </form>
                        </div>
                    </div>
                    <a href="#" class="nav-link pc">KONTAKT</a>
                    <a href="#" class="nav-link pc">KARRIERE</a>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            EN
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">EN</a></li>
                            <li><a class="dropdown-item" href="#">US</a></li>
                        </ul>
                    </div>
                    <a href="#" class="nav-link mb" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"><img class="menu-btn" src="images/menu.svg" alt=""></a>
                </div>
            </div>
        </div>
    </header>
    <div class="offcanvas text-bg-dark offcanvas-end w-100 visible" tabindex="-1" id="offcanvasNavbar">
        <div class="mb">
            <div class="offcanvas-header">
                <button type="button" class="btn-close btn-close-white fs-6 ms-auto me-0 ps-0 pt-4" data-bs-dismiss="offcanvas"></button>
            </div>
        </div>
        <div class="offcanvas-body p-lg-0">
            <nav class="main-nav-mb">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">UNTERNEHMEN</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Kennzahlen & Philosopie</a></li>
                        <li><a class="dropdown-item" href="#">Karriere</a></li>
                        <li><a class="dropdown-item" href="#">Kontakt</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">BRANCHEN</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Premium & Luxury Automotive</a></li>
                        <li>
                            <a class="dropdown-item" href="https://www.google.com/">Industry Champions</a>
                            <ul class="lv2">
                                <li><a href="#" class="dropdown-item">Med Tech</a></li>
                                <li><a href="#" class="dropdown-item">Chem Tech</a></li>
                                <li><a href="#" class="dropdown-item">Industry</a></li>
                                <li><a href="#" class="dropdown-item">Defense</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">MITMACHEN</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">DIENSTLEISTUNG</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Engineering & Projectmanagement</a></li>
                        <li><a class="dropdown-item" href="#">Production & Assembly</a></li>
                        <li><a class="dropdown-item" href="#">Validation & Testing</a></li>
                        <li><a class="dropdown-item" href="#">Brands</a></li>
                    </ul>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">KONTAKT</a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">KARRIERE</a>
                </div>
            </nav>
        </div>
    </div>
    <div class="header_height"></div>



