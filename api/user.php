<?php
require_once '../backend/users.php';
session_start(); // Inicia a sessão
$usuario = new User();


switch ($_SERVER['REQUEST_METHOD']) {
    // case 'listar':
    //     echo json_encode($aluno->listar());
    //     break;
     
    case  'POST':
        $nome_empresa = $_POST['nome_empresa'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nif = $_POST['nif'];
         // Verifica se o empresa já existe
         if ($usuario->verificarNif($nif)) {
            var_dump($usuario->verificarNif($nif));
            echo json_encode(['erro' => 'ja existe uma empresa com este nif']);
            exit;
        }

        if ($usuario->verificarEmail($email)) {
            echo json_encode(['erro' => 'Este e-mail já está cadastrado.']);
            exit;
        }


        if ($usuario->createUser($nome_empresa, $email, $password, $nif)) {
            echo json_encode(['sucesso' => 'Empresa cadastrad com succesoo!']);
            $dadosUsuario = [
                'id' => $usuario->getId(), // Presume-se que o método getId() retorne o ID do usuário
                'nome_empresa' => $nome_empresa,
                'email' => $email,
                'nif' => $nif,
                // Adicione outros dados relevantes aqui
            ];
        
            // Guardar os dados na sessão
            $_SESSION['usuario'] = $dadosUsuario;
            
            
           
             
        } else {
            echo json_encode(['erro' => 'Erro ao cadastrar o Empresa.']);
        }
        break;

    // case 'editar':
    //     $id = $_POST['id'];
    //     $nome = $_POST['nome'];
    //     $email = $_POST['email'];
    //     $idade = $_POST['idade'];
    //     echo json_encode($aluno->editar($id, $nome, $email, $idade));
    //     break;

    // case 'excluir':
    //     $id = $_POST['id'];
    //     echo json_encode($aluno->excluir($id));
    //     break;

    default:
        echo json_encode(['erro' => 'Ação inválida']);
        break;
}

//switch($_SERVER['REQUEST_METHOD']) {

//    case 'GET':}