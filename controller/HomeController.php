<?php

declare(strict_types=1);

class HomeController
{
    public function render (int $customerId){
        //logic functions

        $loader = new CustomerLoader();
        $customer = $loader->loadById($customerId);
        $allCustomers = $loader->loadCustomer();


        require 'view/home.php';
    }

}