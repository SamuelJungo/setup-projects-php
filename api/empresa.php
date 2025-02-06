<?php
require_once '../backend/users.php';
//session_start(); // Inicia a sessão
header('Content-Type: application/json');
$usuario = new Empresa();


switch ($_SERVER['REQUEST_METHOD']) {

    case  'POST':
        $empresa = $_POST['empresa'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nif = $_POST['nif'];
        $contato = $_POST['contato'];
        
         if ($usuario->verificarNif($nif)) {
            echo json_encode(['erro' => '<strong class="text-center">Ja exite uma empresa com este NIF</strong>']);
            exit;
        }

        if ($usuario->verificarEmail($email)) {
            echo json_encode(['erro' => '<strong class="text-center">Ja existe uma empresa cadastra com este Email</strong>']);
            exit;
        }

        if ($usuario->createEmpresa($empresa, $email, $password, $nif, $contato)) {
            echo json_encode(['sucesso' => '<strong class="text-center">Empresa cadastrada com successo</strong>']);
            
        } else {
            echo json_encode(['erro' => '<strong class="text-center">Erro ao cadastrar empresa</strong>']);
        }
        break;

    default:
        echo json_encode(['erro' => 'Ação inválida']);
        break;
}
?>
