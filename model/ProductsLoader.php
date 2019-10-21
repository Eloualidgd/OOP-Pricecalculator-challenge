<?php
declare(strict_types=1);

class ProductsLoader
{
    public function loadProduct(): array
    {
        $list = [];
        $json = json_decode(file_get_contents('data/products.json'), true);
        foreach ($json AS $productJson) {
            $list[] = new Product($productJson['id'], $productJson['name'], $productJson['description'], $productJson['price']);
            // object from class
        }
        return $list;

    }

//coge el json y coge osea return y compara
    public function loadById(int $productId): Product
        //search function is loadById
    {
        $json = json_decode(file_get_contents('data/products.json'), true);
        foreach ($json AS $productJson)
        {
            if ($productJson['id'] === $productId)
            {
                return new Product($productJson['id'], $productJson['name'], $productJson['description'], $productJson['price']);
                //return een nieuwe  object Customer met wat we nodig hebben dus id,name,group_id


            }
        }

    }
}

//search function is loadById
//return customer

//public function Getid{
// return this->id;

