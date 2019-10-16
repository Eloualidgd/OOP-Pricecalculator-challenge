<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'controller/HomeController.php';
require 'model/Customer.php';
require 'model/CustomerLoader.php';

if (!isset($_GET['customerId'])){
    $_GET['customerId'] = 5;
}
//si no existe saca el customerId numero 5

$controller = new HomeController();
$controller->render((int)$_GET['customerId']);
// entonces llamamos la funcion render y pedimos con GET el customerId




?>
