<?php
 
 // inclui arquivos de controlador para lidar com diferentes ações
 require 'controllers/AuthController.php';
 // inclui o controlador autenticação
 require 'controllers/UserController.php';
 // inclui o controlador de usuário
 require 'controllers/DeshboardController.php';
 // inclui o controlador de usuário
 
 // Cria instâncias dos controladores para ultilizar seus métodos
 $authController = new AuthController();
 $authController = new UserController();
 // Instancia o controlador de autenticação
 
 // Coleta a ação de URL, se não houver definida, usa 'login' por padrão
 $action = $_GET['action'] ?? 'login';
 // Usa operador de coalescência nula (??) para definir 'login' se action não estiver presente
 
 // Verifica a ação solicitada e chama o método apropriado do controlador
 switch($action){
     case 'login':
         $authController->login();
 }
 ?>
 
<?php
// Inclui arquivos de controlador para lidar com diferentes ações
require 'controllers/AuthController.php'; // Inclui o controlador de autenticação
require 'controllers/UseController.php'; // Inclui o controlador de usuário
require 'controllers/DashboardController.php'; // Inclui o controlador de dashboard
 
// Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController();
//Intância o controlador de autenticação
 
// Coleta a ação da URL, se não houver definida, usa 'login' por padrão
$action = $_GET['action'] ?? 'login';
// Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente
 
// Verifica a ação solicitada e chama o método apropriado do controlador
switch($action){
    case 'login':
        $authController-> login();
        // chama o método login do controlador de autenticação
}
 
?>