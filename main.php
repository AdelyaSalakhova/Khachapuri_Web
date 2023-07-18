<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$PDO = PdoConnect::getInstance();

$result = $PDO->PDO->query("
		SELECT * FROM `dish`
	");

$dishes = array();

while ($dishInfo = $result->fetch()) {
    $dishes[] = $dishInfo;
}

