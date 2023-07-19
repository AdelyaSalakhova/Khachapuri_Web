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

$url = $_SERVER['REQUEST_URI'];

if ($url != '/index.php') {
    // Разбираем URL на составляющие
    $url_parts = parse_url($url);

    // Разбираем параметры запроса на ассоциативный массив
    parse_str($url_parts['query'], $query_params);

    $recipe_id = $query_params['id'];
    $result_products = $PDO->PDO->query("
	SELECT product_name, amount, measure FROM products_in_dishes
	    JOIN products ON product_id_product = id_product
	    WHERE dish_id_dish = $recipe_id+1;
	");

    $products = array();
    while ($prodInfo = $result_products->fetch()) {
        $products[] = $prodInfo;
    }
}

