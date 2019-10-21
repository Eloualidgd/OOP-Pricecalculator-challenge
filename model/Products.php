<?php
declare(strict_types=1);

class Product
{

    private $id;
    private $name;
    private $description;
    private $price;

// build object with construct
// $this le damos un valor
    public function __construct(int $_id,string $_name,string $_description,float $_price)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;


    }

//how to get the Id
// creamos una funcion para extraer el id y especificamos que queremos un numero
//con el int luego le damos el valor al id con this y luego lo returnamos para ensenarlo
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
    public function getPrice(): float
    {
        return $this->price;
    }

}