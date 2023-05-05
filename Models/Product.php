<?php

class Product
{
    public $category;
    public $type;
    public $price;
    public $picture;


    public function __construct(string $category, string $type, string $price, string $picture,)
    {
        $this->category = $category;
        $this->type = $type;
        $this->price = $price;
        $this->picture = $picture;

        $this->setPrice();
    }

    public function setPrice()
    {
        return $this->price .= "€";
    }
}
