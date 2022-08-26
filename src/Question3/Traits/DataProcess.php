<?php

namespace AllanMuzeya\SwitchTelecoms\Question3\Traits;

trait DataProcess
{

    public function sort($key): bool
    {
       return usort($this->table, function($a, $b) use ($key) {
            return strlen($b[$key]) <=> strlen($a[$key]);
        });
    }
}