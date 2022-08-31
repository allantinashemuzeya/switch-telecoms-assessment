<?php

define('ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);

require_once ROOT.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use AllanMuzeya\SwitchTelecoms\Application;

Application::start();