<?php

namespace AllanMuzeya\SwitchTelecoms\Question1\Interfaces;

interface ProductInterface
{
    public function getServiceFee(): int | float;

    public function setServiceFee($serviceFee): void;
}