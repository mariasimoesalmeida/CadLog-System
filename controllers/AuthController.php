<?php
// Requer arquivo 'user.php' que contem o model user com as funções para manipulação de dados de usuários
require_once 'models/user.php';
 
class AuthController
{
 
    // Cria função responsável pelo processo de login
    public function login()
    {
       // Verifica se a requisição HTTP e do tipo POST,ou seja, se o formulário foi enviado
       if($_SERVER['REQUEST_METHOD'] == 'POST'){

       }
    }
   
}
 
?>