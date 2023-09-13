<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once 'components/head.php';
    require "main.php";
    require_once __DIR__ . '/actions/helpers.php';
    checkGuest();
    ?>
    <title>Регистрация</title>

</head>
<body class="d-flex flex-column min-vh-100">
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
<div class="wrapping d-flex flex-column py-5" style="min-height: 660px">
    <div class="reg-block container align-middle my-auto py-4 px-4">
        <div class="mb-3">
            <h1>Регистрация</h1>
        </div>
        <?php if(hasMessage('error')): ?>
            <div class="notice error mb-3 p-2"><?php echo getMessage('error') ?></div>
        <?php endif; ?>
        <form method="post" action="actions/register.php">
            <div>
                <div class="mb-3">
                    <label for="login" class="form-label mb-0">
                        Логин
                        <input type="text" class="form-control" id="login" name="login" placeholder="Qwerty123"
                               value="<?php echo old('login') ?>"
                            <?php echo validationErrorAttr('login'); ?> >
                        <?php if (hasValidationError('login')): ?>
                            <small><?php echo validationErrorMessage('login'); ?></small>
                        <?php endif; ?>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label mb-0">
                        Ваше имя
                        <input type="text" class="form-control" id="name" name="name" placeholder="Иван"
                               value="<?php echo old('name') ?>"
                            <?php echo validationErrorAttr('name'); ?> >
                        <?php if (hasValidationError('name')): ?>
                            <small><?php echo validationErrorMessage('name'); ?></small>
                        <?php endif; ?>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="password1" class="form-label mb-0">
                        Пароль
                        <input type="password" class="form-control password" id="password1" name="password1"
                               placeholder="********"
                            <?php echo validationErrorAttr('password1'); ?> >
                        <?php if (hasValidationError('password1')): ?>
                            <small><?php echo validationErrorMessage('password1'); ?></small>
                        <?php endif; ?>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label mb-3">
                        Повторите пароль
                        <input type="password" class="form-control password" id="password2" name="password2"
                               placeholder="*******"
                            <?php echo validationErrorAttr('password2'); ?> >
                        <?php if (hasValidationError('password2')): ?>
                            <small><?php echo validationErrorMessage('password2'); ?></small>
                        <?php endif; ?>
                    </label>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="submit" class="btn btn-primary btn-log-in btn-sign-up">Зарегистрироваться</button>
                <a class="reg" href="login.php">У вас уже есть аккаунт?</a>
            </div>
        </form>
    </div>
</div>
<footer class="text-center text-lg-start mt-auto">
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