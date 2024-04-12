<?php

namespace App\Src\Interface\Users;

interface Usuario
{
     public function autenticar(string $login, string $senha): bool;
     public function autorizar(): array;
}
