<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="/<?= APP; ?>/public/styles/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="/<?= APP; ?>/public/styles/styles.css"/>
    <link rel="stylesheet" type="text/css" href="/<?= APP; ?>/public/styles/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="/<?= APP; ?>/public/styles/media.css"/>
    <link rel="stylesheet" type="text/css" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
    <script defer src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script defer src="app/public/js/index.js"></script>
</head>
<body>
<h1 hidden="hidden">This is MVC-project for AMS-Software.</h1>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">AWS-Software</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarCollapse">
            <ul class="navbar-nav mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link<?php
                    if ($_SERVER['REQUEST_URI'] == "/") {
                        echo ' active';
                    } ?>" <?php
                    if ($_SERVER['REQUEST_URI'] == "/") {
                        echo 'aria-current="page"';
                    } ?> href="/">
                        Главная
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?php
                    if ($_SERVER['REQUEST_URI'] == "/tables") {
                        echo ' active';
                    } ?>" <?php
                    if ($_SERVER['REQUEST_URI'] == "/tables") {
                        echo 'aria-current="page"';
                    } ?> href="/tables">
                        Таблицы
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?php
                    if ($_SERVER['REQUEST_URI'] == "/404") {
                        echo ' active';
                    } ?>" <?php
                    if ($_SERVER['REQUEST_URI'] == "/404") {
                        echo 'aria-current="page"';
                    } ?> href="/404">
                        Страница 404
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
include 'app/views/' . $content_view; ?>
<div class="text-center mt-5 text-muted">
    Copyright &copy; 2025 &mdash; <a href="https://github.com/AnufrienokAlexey">Alexey Anufrienok</a>
</div>
<script defer src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
