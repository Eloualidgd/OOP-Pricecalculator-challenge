<?php
class Group
{
    private $id;
    private $name;
    private $discount;
    private $group_id;
    public function __construct(int $_id,string $_name, Discount $_discount, Group $_group_id=null)
        //no todos los valores tienen un group id por eso el null
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->discount = $_discount;
        $this->group_id = $_group_id;
    }
    public function getId():int
    {
        return $this->id;
    }
    public function getName():string
    {
        return $this->name;
    }
    public function getDiscount(): Discount
    {
        return $this->discount;
    }
    public function group_id() :? Group
    {
        return $this->group_id;
    }
}