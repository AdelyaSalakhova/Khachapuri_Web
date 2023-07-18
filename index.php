<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="
        stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icon%20копия.png">

    <title>Khach&puri - рецепты кавказской кухни</title>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a85428af7b.js" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<div class="full_header">
    <nav class="navbar navbar-expand container-fluid" id="navbarSupportedContent">
        <ul class="navbar-nav top-menu justify-content-start">
            <li class="nav-item">
                <a class="nav-link logo" href="index.php"><img style="height: 60px" src="img/logo-финал.svg"
                                                                alt=""></a>
            </li>
        </ul>
        <ul class="navbar-nav icon-menu justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signModal">
                    <!--href="account.html"-->
                    <i class="fa-regular fa-user"></i>
                </a>
                <div class="modal fade" id="signModal" tabindex="-1" aria-labelledby="signModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" id="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="signModalLabel">Вход</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form>
                                <div class="modal-body modal-inputs">
                                    <div class="mb-2">
                                        <label for="exampleFormControlInput1" class="form-label mb-0">Ваш Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                               placeholder="name@example.com" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputPassword" class="col-sm-2 col-form-label mb-0">Пароль</label>
                                        <div class="password">
                                            <input type="password" class="form-control" id="inputPassword" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <a class="reg" onclick="registration()">Нет аккаунта?</a>
                                    <button type="submit" class="btn btn-primary btn-log-in btn-sign-in">Войти</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</div>
<div class="info-block container">
    <div class="row justify-content-center py-5">
        <div class="col-6 d-none d-lg-block">
            <img class="img-fluid " src="img/img1.jpg" alt="">
        </div>
        <div class="col-lg-6 col-sm-12 text-center">
            <div>
                <h1>Кавказская кухня</h1>
                <hr>
                Кавказская кухня является одной из самых разнообразных и уникальных кухонь мира, объединяющей кулинарные
                традиции множества народов, проживающих на Кавказе.
                Эта кухня известна своими яркими вкусами, разнообразием блюд и использованием местных продуктов.<br>
                Одной из особенностей кавказской кухни является ее оригинальность. Каждый регион Кавказа имеет свои
                уникальные блюда,
                которые могут варьироваться от региона к региону, но всегда отличаются высоким качеством и необычными
                сочетаниями продуктов.
            </div>
        </div>
    </div>
</div>
<div class="parallax">
    <div class="parallax-img"></div>
</div>
<div class="container-fluid block">
    <div class="row justify-content-between p-3">
        <div class="col">
            <button class="btn btn-primary btn-categories" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
                Категории рецептов
            </button>
        </div>
        <form class="d-flex col-sm-6 col-lg-4 " role="search">
            <input class="form-control me-2" type="search" placeholder="Рецепт/продукт" aria-label="Search">
            <button class="btn btn-outline-success btn-categories" type="button">Поиск</button>
        </form>
    </div>
    <form>
        <div class="collapse px-3" id="collapseCategories">
            <div class="col-12 card card-body d-inline-block">
                <ul class="me-0 counties_list row">
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckArmyan">
                        <label class="form-check-label" for="flexCheckArmyan">
                            Армянская кухня
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckAzer">
                        <label class="form-check-label" for="flexCheckAzer">
                            Азербайджанская кухня
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckGruz">
                        <label class="form-check-label" for="flexCheckGruz">
                            Грузинская кухня
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckAvar">
                        <label class="form-check-label" for="flexCheckAvar">
                            Аварская кухня
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLezg">
                        <label class="form-check-label" for="flexCheckLezg">
                            Лезгинская кухня
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckKabard">
                        <label class="form-check-label" for="flexCheckKabard">
                            Кабардинская кухня
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckOsetin">
                        <label class="form-check-label" for="flexCheckOsetin">
                            Осетинская кухня
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCherk">
                        <label class="form-check-label" for="flexCheckCherk">
                            Черкесская кухня
                        </label>
                    </li>
                    <li class="form-check col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDag">
                        <label class="form-check-label" for="flexCheckDag">
                            Дагестанская кухня
                        </label>
                    </li>
                </ul>
                <hr>
                <ul class="col-4 me-0 row counties_list">
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckSoup">
                        <label class="form-check-label" for="flexCheckSoup">
                            Супы
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckSnacks">
                        <label class="form-check-label" for="flexCheckSnacks">
                            Закуски
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckMain">
                        <label class="form-check-label" for="flexCheckMain">
                            Основные блюда
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckFlour">
                        <label class="form-check-label" for="flexCheckFlour">
                            Мучные изделия
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckSweet">
                        <label class="form-check-label" for="flexCheckSweet">
                            Сладости
                        </label>
                    </li>
                    <li class="form-check col-lg-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckSalad">
                        <label class="form-check-label" for="flexCheckSalad">
                            Салаты
                        </label>
                    </li>
                </ul>
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-primary btn-categories" type="submit">Применить</button>
                </div>
            </div>
        </div>
    </form>
    <div class="container col-lg-8 col-12 col-sm-12 px-sm-4 px-4 mb-4">
        <?php
        require 'main.php';
        foreach ($dishes as $dish):?>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="<?=$dish['image']?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <span class="dish-name"><?=$dish['name_dish']?></span>
                            <span>Рейтинг - <span class='rating'><?=$dish['rating']?></span> <i class="fa-solid fa-star"
                                                                                                style="color: #ffcf48;"></i></span>
                        </div>
                        <p class="card-text"><?=$dish['description']?></p>
                        <a class="card-text" href="recipe.html"><small class="">Перейти к рецепту</small></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach?>
    </div>
    <footer class="text-center text-lg-start">
        <div class="container py-4 px-1">
            <div class="row justify-content-center">
                <div class="col-3 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Автор</h5>
                    <hr>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="https://vk.com/r0man__sh" class="w-auto">Роман Широков</a>
                        </li>
                    </ul>
                </div>
                <div class="col-3 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0">GitHub</h5>
                    <hr>

                    <ul class="list-unstyled">
                        <li>
                            <a href="https://github.com/RomanShirokov1">RomanShirokov1</a>
                        </li>
                    </ul>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <img src="img/Vine.svg" alt="" style="height: 150px">
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgb(0, 0, 0);">
            © 2023 Copyright:
            <a class="text" href="index.html" style='color: rgb(185, 88, 40);'>Khach&puri.com</a>
        </div>
    </footer>
</div>

</body>
</html>
