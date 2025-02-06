<?php

require_once '../backend/clientes.php';
header('Content-Type: application/json; charset=utf-8');
$usuario = new Cliente();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo json_encode($usuario->listarClientes());
        break;

    case 'POST':
        $cliente = $_POST['cliente'];
        $nif = $_POST['nif'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $morada = $_POST['morada'];

        if ($usuario->createCliente($cliente, $nif, $telefone, $email, $endereco)) {

            echo json_encode(['sucesso' => '<div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm">Cliente criando com sucesso<span aria-hidden="true">
              </div>', 'usuario']);
        } else {
            echo json_encode(['erro' => ' <div class="alert alert-danger alert-dismissible text-white" role="alert">
                <span class="text-sm">Usuario/Palavra passe errada<span aria-hidden="true">
              </div>']);
        }
        break;

    default:
        echo json_encode(['erro' => 'Ação inválida']);
        break;
}


