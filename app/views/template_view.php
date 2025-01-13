<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
<!--    <link rel="stylesheet" type="text/css" href="app/public/styles/normalize.css" />-->
<!--    <link rel="stylesheet" type="text/css" href="app/public/styles/styles.css" />-->
<!--    <link rel="stylesheet" type="text/css" href="app/public/styles/fonts.css" />-->
<!--    <link rel="stylesheet" type="text/css" href="app/public/styles/media.css" />-->
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script defer src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My Cloud</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarCollapse">
            <ul class="navbar-nav mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link<?php if ($_SERVER['REQUEST_URI']=="/") {echo ' active';}?>" <?php if ($_SERVER['REQUEST_URI']=="/") {echo 'aria-current="page"';}?> href="/">
                        Главная
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if ($_SERVER['REQUEST_URI']=="/portfolio") {echo ' active';}?>" <?php if ($_SERVER['REQUEST_URI']=="/portfolio") {echo 'aria-current="page"';}?> href="/portfolio">
                        Портфолио
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if ($_SERVER['REQUEST_URI']=="/login") {echo ' active';}?>" <?php if ($_SERVER['REQUEST_URI']=="/login") {echo 'aria-current="page"';}?> href="/login">
                        Авторизация
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php include 'app/views/' . $content_view; ?>
<script defer src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>