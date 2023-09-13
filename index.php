<?php
require_once __DIR__ . '/actions/helpers.php';

//checkAuth();

$user = currentUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'components/head.php' ?>

    <title>Khach&puri - рецепты кавказской кухни</title>

</head>
<body>
<?php include_once 'components/scripts.php' ?>
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
                <?php if ($user): ?>
                    <a class="nav-link d-inline" href="account.php">
                        <i class="fa-regular fa-user"></i> <?php echo $user['name'] ?>
                    </a>
                <?php endif; ?>
                <?php if (!$user): ?>
                    <a class="nav-link d-inline" href="registration.php">
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </a>
                <?php endif; ?>
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
                <br><br>
                <button class="btn btn-primary btn-categories" type="button" onclick='Go_to_recipes()'>Перейти к рецептам</button>
            </div>
        </div>
    </div>
</div>
<div class="parallax">
    <div class="parallax-img"></div>
</div>
<div class="container-fluid block" id="recipe-block">
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
            <div class="col-3 card card-body d-flex">
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
    <section class="container px-4 mb-4">
        <div class="row">
            <?php
            require 'main.php';
            foreach ($dishes as $dish): ?>
            <div class="col-lg-4 col-sm-6 py-2">
                <div class="recipe-card">
                    <div class="recipe-thumb">
                        <a href="recipe.php?id=<?= $dish['id_dish']-1?>"><img src="<?= $dish['image'] ?>" alt="..."></a>
                    </div>
                    <div class="recipe-details">
                        <h4><a href="recipe.php?id=<?= $dish['id_dish']-1?>" class="dish-name"><?= $dish['name_dish'] ?></a></h4>
                        <p class="rating">Рейтинг - <?= $dish['rating'] ?> <i class="fa-solid fa-star"
                                                                              style="color: #ffcf48;"></i>
                        </p>
                        <p class="recipe-descr"><?= $dish['description'] ?></p>
                    </div>
                    <div class="recipe-bottom-details d-flex justify-content-between">
                        <div>
                            <i class="fa-regular fa-clock"></i> <?= $dish['time'] ?>
                        </div>
                        <div>
                            <i class="fa-solid fa-fire"
                               style="color: rgb(185, 88, 40);"></i></i> <?= $dish['calories'] ?> ккал
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </section>
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
            <a class="text" href="index.php" style='color: rgb(185, 88, 40);'>Khach&puri.com</a>
        </div>
    </footer>
</div>

</body>
</html>
