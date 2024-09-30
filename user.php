<?php
require_once 'models/database.php';

class User 

    // Função para localiizar usuário pelo email
    public   static function findByEmail($email){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } 

    // Função para encontrar o usuário pelo ID
    public static function find($id){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // Função para criar um novo usuário no banco de dados
    public static function find($data){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuário (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        $stmt->execute($data);
        
}
?>