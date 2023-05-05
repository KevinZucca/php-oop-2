<?php

require_once "./Traits/Measurable.php";
require_once "./Traits/Discountable.php";

class Food extends Product
{
    use Measurable;
    use Discountable;

    public $specificName;

    function __construct($category, $type, $price, $picture, $specificName)
    {
        parent::__construct($category, $type, $price, $picture);
        $this->specificName = $specificName;
        $this->setQuantity(7);
    }
}
