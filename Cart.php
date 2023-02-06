<?php

class Cart
{
    protected $totalProductsNumber;
    protected $totalPrice;

    public function __construct()
    {
    }

    public function getTotalPrice()
    {
    }

    public function addNewPrice($priceToAdd)
    {

        $this->totalPrice .= $priceToAdd;
    }
}
