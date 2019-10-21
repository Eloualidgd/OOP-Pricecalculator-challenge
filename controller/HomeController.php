<?php

declare(strict_types=1);

class HomeController
{
    public function render (int $customerId , int $productId , int $groupId){
        //logic functions

        $loader = new CustomerLoader();
        $customer = $loader->loadById($customerId);
        $allCustomers = $loader->loadCustomer();

        $productloader = new ProductsLoader();
        $product = $productloader->loadById($productId);
        $allProducts= $productloader->loadProduct();

        $grouploader = new GroupLoader();
        $group = $grouploader->loadById($groupId);
        $allGroups= $grouploader->loadGroup();



        require 'view/home.php';
    }
//    public function renderproduct ( int $productId){
//        //logic functions
//
//        $productloader = new ProductsLoader();
//        $product = $productloader->loadById($productId);
//        $allProducts= $productloader->loadProduct();
//
//
//
//        require 'view/home.php';
//    }

}