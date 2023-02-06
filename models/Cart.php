<?php
require_once __DIR__ . '/Product.php';

class Cart
{
    protected $totalPrice;
    protected $quantity;

    public function __construct()
    {
    }

    public function getTotalPrice()
    {
    }

    public function addNewPrice($priceToAdd)
    {
        $this->totalPrice += $priceToAdd;
    }
}
