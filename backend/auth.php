<?php
require_once '../conexao/conexao.php';
session_start();

class Auth {
    private $conexao;

    public function __construct() {
        $database = new Conexao();
        $this->conexao = $database->connectar();
    }
  
    public function verificarUsuario($email, $password) {
        $stmt = $this->conexao->prepare('SELECT * FROM usuarios WHERE email = :email');
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($password, $usuario['password'])) {
            $_SESSION[ 'usuario' ] = $usuario;
            return $_SESSION[ 'usuario' ];
        }
        return $usuario ;
    }

}
