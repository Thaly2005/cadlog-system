<?php
// Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controller/AuthController.php'; // Instancia o controlador de autenticação
require 'controllers/UserController.php'; // Instancia o controlador de usuarios
require 'controllers/DashboardController.php'; // Intancia controlador de dashboard

// Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController();
$userController = new UserController();
$dashboardController = new DashboardController();

?>