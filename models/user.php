<?php
require_once 'models/database.php'; 

class User
{
    // Função para encontrar um usuário pelo email
    public static function findByEmail($email){

        // Obter conexão com o banco de dados
        $conn = Database::getConnection();

        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");

        $stmt->execute(['email' => $email]);

        // Retorno de dados do usuário encontrado como um array associativo
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    // Cria função que localiza usuário pelo ID
    public static function find($id){

        // Obtem a conexão com o banco de dados
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT = FROM usuario WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Função para criar o usuário na base de dados 
    public static function create($data){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil"); 

        $stmt->execute($data);
}
}
?>