<?php

namespace AllanMuzeya\SwitchTelecoms\Question1\Products;

use AllanMuzeya\SwitchTelecoms\Question1\Interfaces\ProductInterface;

class Trunk implements ProductInterface
{

    protected int|float $serviceFee = 10;

    public function getServiceFee(): int|float
    {
        return $this->serviceFee;
    }

    public function setServiceFee($serviceFee): void
    {
        $this->serviceFee = $serviceFee;
    }
}