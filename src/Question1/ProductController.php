<?php

namespace AllanMuzeya\SwitchTelecoms\Question1;

use AllanMuzeya\SwitchTelecoms\Question1\Interfaces\ProductInterface;
use AllanMuzeya\SwitchTelecoms\Question1\Products\ProductFactory;

class ProductController
{
    public static ProductController $instance;

    public static function getInstance(): ProductController
    {
        if (!isset(ProductController::$instance))
            ProductController::$instance = new ProductController();
        return ProductController::$instance;
    }

    public function increaseProductFee(ProductInterface $instance,int $percentage): int|float
    {
        $fee = $instance->getServiceFee();
        $finalFee = (($percentage / 100) * $fee) + $fee;

        $instance->setServiceFee($finalFee);

        return $finalFee;
    }

    public function execute(): void
    {
        $instance = ProductFactory::create('line');
        $instance->setServiceFee(90);

        var_dump('Question1  --->  '.$this->increaseProductFee($instance,20));
    }
}