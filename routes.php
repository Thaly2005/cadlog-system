<?php
// Inclui arquivos  de controlador necessarios para lidar com diferentes açoes
require 'controllers/AuthController.php'; //  Instancia o controlador de autenticaçao
require 'controllers/UserController.php'; // Instancia o controlador de usuario
//require 'controllers/DashboardController.php'; // Instancia o controlador de dashboard
 
// Cria instanciais dos controladores para utilizar seus metodos
$authController = new AuthController();
$userController = new UserController();
//$dashboard = new DashboardController();

//Coleta a ação do URL, se não houver ação definida, usa 'login' como padrão
$action = $_GET('action') ?? 'login'; //Use operador de coalescencia nula (??) para definir 'login' se 'action' não estiver presente

switch ($action){
    case 'login':
        $authController->login();
        break;
    default:
    $authController->login();
    break;
}
 
?>