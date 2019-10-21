<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'model/Products.php';
require  'model/ProductsLoader.php';
require 'controller/HomeController.php';
require 'model/Customer.php';
require 'model/CustomerLoader.php';
require 'model/GroupLoader.php';
require 'model/Groups.php';



//si no existe saca el customerId numero 5

$controller = new HomeController();

if (!isset($_GET['customerId'])){
    $_GET['customerId'] = 0;
}
if (!isset($_GET['productId'])){
    $_GET['productId'] = 0;
}
//if (!isset($_GET['groupId'])){
//    $_GET['groupId'] = 0;
//}

$controller->render((int)$_GET['customerId '],(int)$_GET['productId'],(int)$_GET['groupId']);

//$controller->renderproduct((int)$_GET['productId']);

// entonces llamamos la funcion render y pedimos con GET el customerId




?>
