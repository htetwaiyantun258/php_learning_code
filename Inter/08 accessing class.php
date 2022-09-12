<?php

class Shop{
    var $name = "may food";
    var $number = 528;
    public function shopName($name,$number){
        echo "Shop Name is " . $name . $number;
    }
}

$shop = new Shop();
$shop->shopName("waiwai",15);
echo $shop->name;