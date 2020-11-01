<?php


class Receipt
{
    public $product;
    public $totalprice;
    public $price;
    public $amount;
    public function addProduct($product)
    {
        $this->product = $product;
        return $this;
    }
    public function price($price)
    {
        $this->price = $price;
        $this->totalprice = $price;
        return $this;

    }
    public function amount($amount)
    {
        $this->amount = $amount;
        $this->totalprice *= $amount;
        return $this;
    }
    public function show()
    {
        return "You bought ".$this->amount." ".$this->product." of ".$this->price." each. That will cost you ".$this->totalprice." dollars";
    }
}

?>