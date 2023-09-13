<?php

require_once __DIR__ . '/helpers.php';

$login = $_POST['login'] ?? null;
$password = $_POST['password1'] ?? null;

if (empty($login)) {
    setOldValue('login', $login);
    setValidationError('login', 'Неверный логин');
    setMessage('error', 'Ошибка валидации');
    redirect('/login.php');
}

$user = findUser($login);

if (!$user) {
    setMessage('error', "Пользователь $login не найден");
    setValidationError('login', 'Неверный логин');
    redirect('/login.php');
}

if (!password_verify($password, $user['password'])) {
    setOldValue('login', $login);
    setMessage('error', 'Неверный пароль');
    redirect('/login.php');
}

$_SESSION['user']['id'] = $user['id'];

redirect('/index.php');