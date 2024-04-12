<?php
require 'vendor/autoload.php';
use App\Src\ClasseAbstrata\Login\Login;

$login = new Login();
$login->executar('eu', '123');
