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
    <link rel="icon" size="32x32" href="img/icon%20копия.png">

    <title>Сюда название надо рецепта</title>

</head>
<body class="wrapping">
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
                <a class="nav-link" href="account.html">
                    <i class="fa-regular fa-user"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
<?php
    require "main.php";
?>
<div class="recipe-block container my-5 py-3 px-4">
    <div class="row justify-content-center">
        <div class="col-6 d-none d-lg-block m-auto">
            <div id="carouselMain" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/main1.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/main2.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/main3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div>
                <div class="d-flex justify-content-between">
                    <span class="dish-name">
                        <?= $dishes[$recipe_id]['name_dish'] . " "?>
                        <span class="favorite">
                            <i onclick="favor()" class="fa-regular fa-heart non-fav"></i>
                        </span>
                    </span>
                    <span>Рейтинг - <span class='rating'><?= $dishes[$recipe_id]['rating']?></span> <i class="fa-solid fa-star" style="color: #ffcf48;"></i></span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span>Список продуктов: </span>
                    <span>Количество</span>
                </div>
                <div class="products-list d-flex justify-content-between">
                    <ul>
                        <?php
                        foreach ($products as $product):?>
                        <li>
                            <span class="product"><?= $product['product_name']?></span>
                            <div>
                                <span class="product-amount"><?= $product['amount']?></span> <span class="product-metric"><?= $product['measure']?></span>
                            </div>
                        </li>
                        <?php endforeach?>
                    </ul>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="extra-info">
                        <div style="font-weight: 500; font-size: 16pt;">
                            <span>Калькулятор пропорций: </span>
                            <span>
                                <button style="background-color: #fff; border: none">
                                    <i onclick="proportion_pm(this)" class="fa-solid fa-minus"></i>
                                </button>
                                <span class="proportion"> 1 </span>
                                <button style="background-color: #fff; border: none">
                                    <i onclick="proportion_pm(this)" class="fa-solid fa-plus"></i>
                                </button>
                            </span>
                        </div>
                        <div>Время приготовления: <span class="time"><?= $dishes[$recipe_id]['time']?></span></div>
                        <div>Калорийность: <span class="calories"><?= $dishes[$recipe_id]['calories']?></span> ккал на 100гр</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion py-4" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                    Описание
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body recipe-description">
                    <?= $dishes[$recipe_id]['description']?>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    История
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body recipe-history">
                    <?= $dishes[$recipe_id]['history']?>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                    Этапы приготовления
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body recipe-steps">
                    <div class="step">
                        <h4>Шаг 1.</h4>
                        <div class="row">
                            <div class="step-photo">
                                <img class="img-fluid" src="img/step1.jpg" alt="">
                                <span class="step-description">
                                    Возьмите курицу и нарежьте на небольшие кусочки, не отрежьте себе все пальцы пж, они вам еще понадобятся, надеюсь, что хоть с этой задачей вам по силам справиться
                                    Возьмите курицу и нарежьте на небольшие кусочки, не отрежьте себе все пальцы пж, они вам еще понадобятся, надеюсь, что хоть с этой задачей вам по силам справиться
                                    Возьмите курицу и нарежьте на небольшие кусочки, не отрежьте себе все пальцы пж, они вам еще понадобятся, надеюсь, что хоть с этой задачей вам по силам справиться
                                    Возьмите курицу и нарежьте на небольшие кусочки, не отрежьте себе все пальцы пж, они вам еще понадобятся, надеюсь, что хоть с этой задачей вам по силам справиться
                                </span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="step">
                        <h4>Шаг 2.</h4>
                        <div class="row">
                            <div class="step-photo">
                                <img class="img-fluid" src="img/step1.jpg" alt="">
                                <span class="step-description">
                                    Возьмите курицу и нарежьте на небольшие кусочки, не отрежьте себе все пальцы пж, они вам еще понадобятся, надеюсь, что хоть с этой задачей вам по силам справиться
                                    Возьмите курицу и нарежьте на небольшие кусочки, не отрежьте себе все пальцы пж, они вам еще понадобятся, надеюсь, что хоть с этой задачей вам по силам справиться
                                    Возьмите курицу и нарежьте на небольшие кусочки, не отрежьте себе все пальцы пж, они вам еще понадобятся, надеюсь, что хоть с этой задачей вам по силам справиться
                                    Возьмите курицу и нарежьте на небольшие кусочки, не отрежьте себе все пальцы пж, они вам еще понадобятся, надеюсь, что хоть с этой задачей вам по силам справиться
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="comments-block py-4 mt-3">
        <h2>Отзывы</h2>
        <hr>
        <form class="needs-validation">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Оставьте ваш отзыв!</label>
                <div class="row">
                    <div class="col-1">
                        Оценка:
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline radio-rating">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rate1" value="option1">
                            <label class="form-check-label" for="rate1">1 <i class="fa-solid fa-star" style="color: #ffcf48;"></i> </label>
                        </div>
                        <div class="form-check form-check-inline radio-rating">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rate2" value="option2">
                            <label class="form-check-label" for="rate2">2 <i class="fa-solid fa-star" style="color: #ffcf48;"></i> </label>
                        </div>
                        <div class="form-check form-check-inline radio-rating">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rate3" value="option3">
                            <label class="form-check-label" for="rate3">3 <i class="fa-solid fa-star" style="color: #ffcf48;"></i> </label>
                        </div>
                        <div class="form-check form-check-inline radio-rating">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rate4" value="option3">
                            <label class="form-check-label" for="rate4">4 <i class="fa-solid fa-star" style="color: #ffcf48;"></i> </label>
                        </div>
                        <div class="form-check form-check-inline radio-rating">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rate5" value="option3" required>
                            <label class="form-check-label" for="rate5">5 <i class="fa-solid fa-star" style="color: #ffcf48;"></i> </label>
                        </div>
                    </div>
                </div>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Текст отзыва"></textarea>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary btn-comment mt-1 mb-2">Отправить</button>
                </div>
            </div>
        </form>
        <hr>
        <div class="card mb-2">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <span class="user-name">Светлана, <span class="user-age">30</span></span>
                    <span>Рейтинг - <span class='user-rating'>5.0</span> <i class="fa-solid fa-star" style="color: #ffcf48;"></i></span>
                </div>
                <p class="card-text comment-text">Оченб вкусно муж в шоке, ели и рыдали от удовольствия! Оченб вкусно муж в шоке, ели и рыдали от удовольствия! Оченб вкусно муж в шоке, ели и рыдали от удовольствия! Оченб вкусно муж в шоке, ели и рыдали от удовольствия!</p>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <span class="user-name">Светлана, <span class="user-age">30</span></span>
                    <span>Рейтинг - <span class='user-rating'>5.0</span> <i class="fa-solid fa-star" style="color: #ffcf48;"></i></span>
                </div>
                <p class="card-text comment-text">Оченб вкусно муж в шоке, ели и рыдали от удовольствия! Оченб вкусно муж в шоке, ели и рыдали от удовольствия! Оченб вкусно муж в шоке, ели и рыдали от удовольствия! Оченб вкусно муж в шоке, ели и рыдали от удовольствия!</p>
            </div>
        </div>

    </div>
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
</body>
</html>
