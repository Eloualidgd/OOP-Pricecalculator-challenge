<?php
declare(strict_types=1);

//class CustomerLoader
//    private $customers = [];
//    public function __construct()
//    {
//        //estamos haciendo un fech osea coger el data la info del customer json
//        $json = json_decode(file_get_contents('customers.json'), true);
//        foreach ($json AS $customerJson) {
//            $this->customers[$customerJson['id']] = new Customer($customerJson['id'], $customerJson['name'], new Group);
//        }
//    public function loadById(int $customerId) : Customer {
//        return $this->customers[$customerId];

//    public function loadCustomers() : array
//        return $this->customers;

class CustomerLoader
{
    public function loadCustomer(): array
    {
        $list = [];
        $json = json_decode(file_get_contents('data/customers.json'), true);
        foreach ($json AS $customerJson) {
            $list[] = new Customer($customerJson['id'], $customerJson['name'], $customerJson['group_id']);
            // object from class
        }
        return $list;

    }

//coge el json y coge osea return y compara
    public function loadById(int $customerId): Customer
        //search function is loadById
    {
        $json = json_decode(file_get_contents('data/customers.json'), true);
        foreach ($json AS $customerJson) {
            if ($customerJson['id'] === $customerId) {
                return new Customer($customerJson['id'], $customerJson['name'], $customerJson['group_id']);
                //return een nieuwe  object Customer met wat we nodig hebben dus id,name,group_id


            }
        }

    }
}

//search function is loadById
//return customer

//public function Getid{
// return this->id;
//}

