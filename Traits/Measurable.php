<?php

trait Measurable
{
    public $storeQuantity;


    public function setQuantity($quantity)
    {
        if ($quantity == 1) {
            return $this->storeQuantity = $quantity . " piece";
        } else if (!is_int($quantity)) {
            throw new Exception("Write a valid number");
        } else {
            return $this->storeQuantity = $quantity . " pieces";
        }


        try {
            $this->setQuantity();
        } catch (Exception $e) {
            echo $e;
        }
    }
}
