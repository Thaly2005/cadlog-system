<?php
class DashboardController
{
    // Função index, responsável por exibir a página dashboard
    public function index()
    {
        // Função que vai iniciar a sessão para verificar se o usuário está autenticado
        session_start();
        if(!isset($_SESSION['usuario_id'])){
            // redireciona o usuário para a página inicial
            header('Location: index.php');
            exit; // Garante que o script seja interrompido
        }
        // Se o usuário estiver autenticado, inclui a View 'dashboard', que exibe o painel de controle
        include 'viewa/dashboard.php';
    }
}
?>