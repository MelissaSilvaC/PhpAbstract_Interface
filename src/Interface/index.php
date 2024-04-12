<?php

require 'vendor/autoload.php';

use App\Src\Interface\Login\Login;

$login = new Login();
$login->executar('eu', '123');
