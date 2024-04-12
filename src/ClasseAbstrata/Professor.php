<?php

namespace App\Src\ClasseAbstrata\Users;

class Professor extends Usuario
{
     public function autenticar(string $login, string $senha): bool
     {

          return true;
     }

     public function autorizar(): array
     {
          return ['acessar_materiais', 'gerenciar_notas'];
     }
}