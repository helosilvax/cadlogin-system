<?php

class UserController{

    public function register(){
        // Verificar se a requisição HTTP é do tipo POST (se o formulário foi enviada)
        if($_SERVER['REQUEST_METHOD'] == 'POST' ){
            // Coleta os dados enviados pelo formulário e organiza em um array 
            $data = [
                'nome' => $_POST['nome'], 
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), // Criptografa a senha 
                'perfil' => $_POST['perfil']
            ];
            // Chama o métado crate do model User para criar o novo usuário do BD
            User::create($data);

            header('Location: index.php');
        } else{
            include 'views/register.php';
        }
        }
    }   
?>