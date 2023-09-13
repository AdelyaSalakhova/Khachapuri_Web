<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'components/head.php' ?>

    <title>Избранное</title>
</head>

<body class="wrapping">
<?php include_once 'components/scripts.php' ?>

<div class="full_header">
    <nav class="navbar navbar-expand container-fluid" id="navbarSupportedContent">
        <ul class="navbar-nav top-menu justify-content-start">
            <li class="nav-item">
                <a class="nav-link logo" href="index.php"><img style="height: 60px" src="img/logo-финал.svg"
                                                                alt=""></a>
            </li>
        </ul>
    </nav>
</div>

<div class="container py-3 px-4">
    <div class="row">
        <nav class="navbar nav-secondary navbar-expand">
            <div class="collapse navbar-collapse" style="max-width: 100%;" id="navbarA">
                <ul class="navbar-nav">
                    <li class="nav-item-secondary">
                        <a class="nav-link" href="account.php">
                            <span><i class="fa-regular fa-user"></i>&nbsp;&nbsp;Профиль</span>
                        </a>
                    </li>
                    <li class="nav-item-secondary active_nav">
                        <a class="nav-link" href="favorite.html">
                            <span><i class="fa-regular fa-star"></i>&nbsp;&nbsp;Избранное</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="recipe-block">
            <div class="row align-items-center pt-3 px-4">
                <h1 class="col">Избранное</h1>
                <form class="d-flex col-6" role="search">
                    <input class="form-control me-2" type="search" placeholder="Рецепт/продукт"
                           aria-label="Search">
                    <button class="btn btn-outline-success btn-categories" type="button">Поиск</button>
                </form>
            </div>
            <hr>
            <div class="col my-4">
                <div class="card mb-3 mx-auto" style="max-width: 1040px;">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span class="dish-name">Суп из слез Романа Широкова</span>
                                    <span>Рейтинг - <span class='rating'>5.0</span> <i class="fa-solid fa-star"
                                                                                       style="color: #ffcf48;"></i></span>
                                </div>
                                <p class="card-text">Просто описание рецепта, какой он хороший и вкусный, все должны его
                                    приготовить и съесть!</p>
                                <a class="card-text" href="recipe.html"><small class="">Перейти к рецепту</small></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 mx-auto" style="max-width: 1040px;">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span class="dish-name">Суп из слез Романа Широкова</span>
                                    <span>Рейтинг - <span class='rating'>5.0</span> <i class="fa-solid fa-star"
                                                                                       style="color: #ffcf48;"></i></span>
                                </div>
                                <p class="card-text">Просто описание рецепта, какой он хороший и вкусный, все должны его
                                    приготовить и съесть!</p>
                                <a class="card-text" href="recipe.html"><small class="">Перейти к рецепту</small></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 mx-auto" style="max-width: 1040px;">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span class="dish-name">Суп из слез Романа Широкова</span>
                                    <span>Рейтинг - <span class='rating'>5.0</span> <i class="fa-solid fa-star"
                                                                                       style="color: #ffcf48;"></i></span>
                                </div>
                                <p class="card-text">Просто описание рецепта, какой он хороший и вкусный, все должны его
                                    приготовить и съесть!</p>
                                <a class="card-text" href="recipe.html"><small class="">Перейти к рецепту</small></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 mx-auto" style="max-width: 1040px;">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span class="dish-name">Суп из слез Романа Широкова</span>
                                    <span>Рейтинг - <span class='rating'>5.0</span> <i class="fa-solid fa-star"
                                                                                       style="color: #ffcf48;"></i></span>
                                </div>
                                <p class="card-text">Просто описание рецепта, какой он хороший и вкусный, все должны его
                                    приготовить и съесть!</p>
                                <a class="card-text" href="recipe.html"><small class="">Перейти к рецепту</small></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 mx-auto px-3" style="max-width: 1040px;">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span class="dish-name">Суп из слез Романа Широкова</span>
                                    <span>Рейтинг - <span class='rating'>5.0</span> <i class="fa-solid fa-star"
                                                                                       style="color: #ffcf48;"></i></span>
                                </div>
                                <p class="card-text">Просто описание рецепта, какой он хороший и вкусный, все должны его
                                    приготовить и съесть!</p>
                                <a class="card-text" href="recipe.html"><small class="">Перейти к рецепту</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <nav aria-label="..." class="d-flex justify-content-center py-3">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link active" onclick="scrolling_fav(this)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" onclick="scrolling_fav(this)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" onclick="scrolling_fav(this)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" onclick="scrolling_fav(this)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" onclick="scrolling_fav(this)">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" onclick="scrolling_fav(this)">6</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" onclick="scrolling_fav(this)">7</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" onclick="scrolling_fav(this)">8</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" onclick="scrolling_fav(this)">9</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" onclick="scrolling_fav(this)">10</a>
                    </li>
                </ul>
            </nav>

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