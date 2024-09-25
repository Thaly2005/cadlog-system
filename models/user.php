<?php
 
// Inclui o arquivo de conexao que contem a classe DATABASE  para gerenciar a conexao com o BD
 
require_once 'models/database.php';
 
class User{
    // Funçao para encontrar um usuario pelo email
    public static function findByEmail($email){
 
        // Coleta a conexao com o BD
        $conn = Database::getConnection();
 
 
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
     // executa  a consulta com o e-mail passadocomo parametro
        $stmt->execute(['email' => $email]);
 
       // Retorna os dados  do usuario encontrado como um array associativo 
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
 
     static public function find($id){
      $conn = Database::getConnection();
      $stmt = $conn->prepare("SELECT * FROM usuarios WHERE  id = id");
      $stmt->execute(['id' => $id]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
   // Funçao para criar um novo usuario no banco de dados
 
   static public create($data){
   $conn = Database::getConnection();
   $stmt = $conn->prepare("INSERT INTO usuarios(nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
   $stmt->execute($data);
 
   }
 
 
  }
?>