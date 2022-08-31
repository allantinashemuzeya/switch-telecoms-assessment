<?php

namespace AllanMuzeya\SwitchTelecoms;

use AllanMuzeya\SwitchTelecoms\Question1\ProductController;
use AllanMuzeya\SwitchTelecoms\Question3\PrefixController;
use Exception;

class Application
{


    /**
     * @throws Exception
     */
    public static function start(): void
    {
        $app = (new Application);
        $app->questionOne();
        $app->questionTwo();
        $app->questionThree();
    }

    public function questionOne(): void
    {
        $product  = ProductController::getInstance();
        $product->execute();
    }

    public function questionTwo(): void
    {

    }


    /**
     * @throws Exception
     */

    public function questionThree(): void
    {
        $prefixController = new PrefixController();
        $prefixController->destination('011555555');

        var_dump($prefixController->destination);
    }
}