<?php

namespace App\Src\ClasseAbstrata\Login;

use App\Src\ClasseAbstrata\Users\Usuario;
use App\Src\ClasseAbstrata\Users\Professor;
use App\Src\ClasseAbstrata\Users\Administrador;
use App\Src\ClasseAbstrata\Users\AdministradorSupremo;

class UsuarioFactory
{
     public static function criar(string $perfil): Usuario
     {
          switch ($perfil) {
               case 'professor':
                    return new Professor();
               case 'administrador':
                    return new Administrador();
               case 'administrador_supremo':
                    return new AdministradorSupremo();
               default:
                    throw new \Exception('Perfil inválido');
          }
     }
}
