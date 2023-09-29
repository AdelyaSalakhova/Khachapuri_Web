<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'components/head.php' ?>

    <title>Личный кабинет</title>
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
                    <li class="nav-item-secondary active_nav">
                        <a class="nav-link" href="account.php">
                            <span><i class="fa-regular fa-user"></i>&nbsp;&nbsp;Профиль</span>
                        </a>
                    </li>
                    <li class="nav-item-secondary">
                        <a class="nav-link" href="favorite.php">
                            <span><i class="fa-regular fa-star"></i>&nbsp;&nbsp;Избранное</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row recipe-block">
            <h1 class="pt-3 px-4">Ваш аккаунт</h1>
            <hr>
            <div class="col acc-info">
                <div class="input-group">
                    <p style="width: 150px;">Имя:</p>
                    <input disabled id="userName" type="text" class="form-control"
                           value="Введенное при рег." aria-label="Имя пользователя" aria-describedby="basic-addon1">
                </div>

                <div class="input-group">
                    <p style="width: 150px;">E-mail:</p>
                    <input disabled id="E-mail" type="text" class="form-control"
                           value="Введенное при рег." aria-label="E-mail пользователя" aria-describedby="basic-addon2">
                </div>

                <div class="input-group">
                    <p style="width: 150px;">Возраст:</p>
                    <input disabled id="Age" type="number" class="form-control"
                           value="123" aria-label="Возраст" aria-describedby="basic-addon3">
                </div>

                <div class="input-group">
                    <p style="width: 150px;">Пароль:</p>
                    <input disabled id="password" type="password" class="form-control"
                           value="Введенное при рег." aria-label="Пароль" aria-describedby="basic-addon4">
                </div>

                <div class="input-group" style="display: none" id="password_zone">
                    <p style="width: 150px;">Повторите:</p>
                    <input disabled id="password_repeat" type="password" class="form-control"
                           value="Введенное при рег." aria-label="Повторите пароль" aria-describedby="basic-addon5">
                </div>
            </div>

            <div class="col-5 person-pic">
                <img src="img/person-pic.svg" alt="" style="object-fit: contain; max-width:100%;"/>
            </div>

            <div class="container-fluid">
                <button type="submit" id="accChange" class="btn btn-secondary btn-change">Изменить</button>
                <div class = "row justify-content-start">
                    <button type="submit" id = "accCancel" class="btn btn-primary btn-change" style="display: none; margin-right: 10%; margin-left: 10px">Отменить</button>
                    <button type="submit" id = "accSave" class="btn btn-primary btn-change" style="display: none">Сохранить</button>
                </div>
            </div>
            <form action="/actions/logout.php" method="post">
                <button role="button" class="btn btn-primary btn-log-in btn-sign-up">Выйти из аккаунта</button>
            </form>
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
</div>

<script src="js/script.js"></script>


</body>

</html>