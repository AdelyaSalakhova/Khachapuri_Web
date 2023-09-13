<?php

require_once __DIR__ . '/helpers.php';

// Выносим данные из POST в отдельные переменные
$login = $_POST['login'] ?? null;
$name = $_POST['name'] ?? null;
$password1 = $_POST['password1'] ?? null;
$password2 = $_POST['password2'] ?? null;

$pdo = getPDO();

// Validation

if (empty($name)) {
    setValidationError('name', 'Поле имя пустое');
}

if (empty($login)) {
    setValidationError('login', 'Поле логина пустое');
}

$uniqueLogin = $pdo->query("
    SELECT id FROM users WHERE login = '$login'
");
if ($uniqueLogin->rowCount() != 0)
{
    setValidationError('login', 'Логин занят. Попробуйте другой');
}

if (empty($password1)) {
    setValidationError('password1', 'Поле пароля пустое');
}
if (empty($password2)) {
    setValidationError('password2', 'Поле пароля пустое');
}

if ($password1 != $password2) {
    setValidationError('password1', 'Пароли не совпадают');
}

// Если список с ошибками валидации не пустой, то производим редирект обратно на форму
if (!empty($_SESSION['validation'])) {
    setOldValue('name', $name);
    setOldValue('login', $login);
    setMessage('error', 'Ошибка валидации');
    redirect('/registration.php');
}

$query = "INSERT INTO users (name, login, password) VALUES (:name, :login, :password)";

$params = [
    'name' => $name,
    'login' => $login,
    'password' => password_hash($password1, PASSWORD_DEFAULT)
];

$reg = $pdo->prepare($query);

try {
    $reg->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('../login.php');


