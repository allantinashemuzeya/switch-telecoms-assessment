<?php

namespace AllanMuzeya\SwitchTelecoms\Question3;

use AllanMuzeya\SwitchTelecoms\Question3\Interfaces\PrefixInterface;
use AllanMuzeya\SwitchTelecoms\Question3\Models\Prefix;
use Exception;

class PrefixController implements PrefixInterface
{

    public $destination;

    /**
     * @throws Exception
     */
    public function destination($telephone):  bool
    {
        $prefix = new Prefix();

        $data = $prefix->sorted();
        $index = 0;

        while (!str_contains($telephone, $data[$index]['prefix'])){
            if((count($data) - 1) === $index){
                var_dump('Could not find prefix telephone number '.$telephone);
                return false;
            }
            $index++;
        }
        $this->destination  = $data[$index];
        return true;
    }

    public function changeDestination($destination){

    }
}