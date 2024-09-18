<?php
class Database{
    // Utiliza o padrão Singleton, cujo objetivo é garantir que apenas uma única onstânica de uma classe seja criada durante a execução do prpgrama, e que essa instância seja reutilizada sempre que necessário

    private static $instance = null;

    // Método público que retorna a conexão com BD
    public static function getConnection(){
        if (!self ::$instance) {
            $host = 'localhost';
            $db = 'sistema_usuários';
            $user = 'root';
            $password = '';
        }
    }
}
?>