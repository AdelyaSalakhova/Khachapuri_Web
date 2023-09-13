<?php
const HOST = 'localhost';
const DB = 'khachapuri';
const USER = 'admin';
const PASS = '15032003';

session_start();


function redirect(string $path)
{
    header("Location: $path");
    die();
}

//$_SESSION['validation'] = [];
function setValidationError(string $fieldName, string $message): void
{
    $_SESSION['validation'][$fieldName] = $message;
}

function hasValidationError(string $fieldName): bool
{
    return isset($_SESSION['validation'][$fieldName]);
}

function validationErrorAttr(string $fieldName): string
{
    return isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true"' : '';
}

function validationErrorMessage(string $fieldName): string
{
    $message = $_SESSION['validation'][$fieldName] ?? '';
    unset($_SESSION['validation'][$fieldName]);
    return $message;
}

function setOldValue(string $key, mixed $value): void
{
    $_SESSION['old'][$key] = $value;
}

function old(string $key)
{
    $value = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $value;
}

function getPDO(): PDO
{
    try {
        return new \PDO('mysql:host=' . HOST . ';charset=utf8;dbname=' . DB, USER, PASS);
    } catch (\PDOException $e) {
        die("Connection error: {$e->getMessage()}");
    }
}

function setMessage(string $key, string $message): void
{
    $_SESSION['message'][$key] = $message;
}

function hasMessage(string $key): bool
{
    return isset($_SESSION['message'][$key]);
}

function getMessage(string $key): string
{
    $message = $_SESSION['message'][$key] ?? '';
    unset($_SESSION['message'][$key]);
    return $message;
}

function findUser(string $login): array|bool
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM users WHERE login = :login");
    $stmt->execute(['login' => $login]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}
function currentUser(): array|false
{
    $pdo = getPDO();

    if (!isset($_SESSION['user'])) {
        return false;
    }

    $userId = $_SESSION['user']['id'] ?? null;

    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $userId]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function logout(): void
{
    unset($_SESSION['user']['id']);
    redirect('/login.php');
}

/*function checkAuth(): void //проверка на авторизацию, потом использую для рецепта в избранное
{
    if (!isset($_SESSION['user']['id'])) {
        redirect('/');
    }
}*/

function checkGuest(): void //Пока юзер в сессии нельзя зайти на страницы авторизации и регистрации, не нажав на кнопку выйти из аккаунта
{
    if (isset($_SESSION['user']['id'])) {
        redirect('/index.php');
    }
}


