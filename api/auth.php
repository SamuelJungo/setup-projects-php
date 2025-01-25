<?php
session_start(); // Inicia a sessão
require_once '../backend/users.php';

$usuario = new User();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($usuario->verificarUsuario($email, $password)) {
            // Salva os dados do usuário na sessão
            $dadosUsuario = [
                'id' => $usuario->getId(),
                // 'nome_empresa' => $usuario->getNome(),
                // 'email' => $usuario->getEmail(),
                // 'tipo_user' => $usuario->getTipo()
                
            ];
        
            // Guardar os dados na sessão
            $_SESSION['usuario'] = $dadosUsuario;

            echo json_encode(['sucesso' => 'Login realizado com sucesso!']);
        } else {
            echo json_encode(['erro' => 'Erro ao realizar o login.']);
        }
        break;

    default:
        echo json_encode(['erro' => 'Ação inválida']);
        break;
}


