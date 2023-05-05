<?php

require_once "./Traits/Measurable.php";

class Toy extends Product
{
    use Measurable;

    public $specificName;
    public $material;

    function __construct($category, $type, $price, $picture, $specificName, $material)
    {
        parent::__construct($category, $type, $price, $picture);
        $this->specificName = $specificName;
        $this->material = $material;
        $this->setQuantity(8);
    }
}
