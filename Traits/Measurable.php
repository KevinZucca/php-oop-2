<?php

trait Measurable
{
    public $storeQuantity;

    public function setQuantity($quantity)
    {
        if ($quantity == 1) {
            return $this->storeQuantity = $quantity . " piece";
        } else {
            return $this->storeQuantity = $quantity . " pieces";
        }
    }
}
