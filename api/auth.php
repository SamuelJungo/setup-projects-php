<?php
require_once '../backend/auth.php';
header( 'Content-Type: application/json; charset=UTF-8' );
 
$auth = new Auth();

switch( $_SERVER['REQUEST_METHOD'] ) {

    case 'POST':
        
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (!isset($_POST['email']) || !isset($_POST['password'])) {
        echo json_encode(['erro' => 'Email e senha são obrigatórios.']);
        exit;
    }
    if ( $auth->verificarUsuario( $email, $password ) ) {
   
        //

        echo json_encode( [
            'sucesso' => '<strong class="text-center">Login efetuado com sucesso</strong>',
        ] );
    } else {
        echo json_encode( [
            'erro' => '<strong class="text-center">Password ou Email inválidos</strong>',
        ] );
    }
    break;

    default:
    echo json_encode( [
        'erro' => 'Ação inválida'
    ] );
    break;

}
