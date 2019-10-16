<?php
declare(strict_types=1);

class Customer
{

    private $id;
    private $name;
    private $group;

// build object with construct
// $this le damos un valor
    public function __construct(int $_id,string $_name,int $_group)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->group = $_group;

    }

//how to get the Id
// creamos una funcion para extraer el id y especificamos que queremos un numero con el int luego le damos el valor al id con this y luego lo returnamos para ensenarlo
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGroup(): int
    {
        return $this->group;
    }

}