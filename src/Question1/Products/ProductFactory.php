<?php

namespace AllanMuzeya\SwitchTelecoms\Question1\Products;

class ProductFactory
{


    public static function create($type)
    {
        $product = null;
        switch ($type){
            case "line":
                $product = new Line();
                break;
            case "trunk":
                $product = new Trunk();
                break;
        }
        return $product;
    }


}