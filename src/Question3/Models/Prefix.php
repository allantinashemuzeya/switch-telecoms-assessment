<?php

namespace AllanMuzeya\SwitchTelecoms\Question3\Models;

use AllanMuzeya\SwitchTelecoms\Question3\Traits\DataProcess;

class Prefix
{
    use DataProcess;

    protected array $table = [
        ['prefix' => '011', 'destination' => 'ZA_Telkom'],
        ['prefix' => '012', 'destination' => 'ZA_Telkom'],
        ['prefix' => '0111234', 'destination' => 'ZA_Switch'],
        ['prefix' => '013', 'destination' => 'ZA_Telkom'],
        ['prefix' => '0131234567', 'destination' => 'ZA_Neotel'],
    ];

    public function sorted(): ?array
    {
        if($this->sort('prefix'))
            return $this->table;
        return null;
    }
}