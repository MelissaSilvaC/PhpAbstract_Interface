<?php

namespace App\Src\Interface\Login;

use App\Src\Interface\Users\Usuario;
use App\Src\Interface\Users\Professor;
use App\Src\Interface\Users\Administrador;
use App\Src\Interface\Users\AdministradorSupremo;

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