<?php
require_once '../conexao/conexao.php';
// nome_usuario	email	password	user_type	data_criacao	
// nome_funcionario	nif_funcionario	morada	id_cargo	id_empresa
// id_empresa	id_usuario	nome_empresa	nif	id_atividade
class User {
    private $conexao;

    public function __construct() {
        $database = new Conexao();
        $this->conexao = $database->connectar();
    }

    // public function listar() {
    //     $stmt = $this->conexao->prepare("SELECT * FROM alunos");
    //     $stmt->execute();

    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    public function createUser($nome_empresa, $email, $password, $nif) {
        try {
            $user_type = 2;
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
    
            // Inicia uma transação para garantir a integridade dos dados
            $this->conexao->beginTransaction();
    
            // Primeiro INSERT na tabela de usuários
            $stmt = $this->conexao->prepare("
                INSERT INTO usuarios (nome_usuario, email, password, user_type) 
                VALUES (:nome_usuario, :email, :password, :user_type)
            ");
            $stmt->bindParam(':nome_usuario', $nome_empresa);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password_hash);
            $stmt->bindParam(':user_type', $user_type);
    
            if (!$stmt->execute()) {
                throw new Exception("Erro ao inserir usuário.");
            }
    
            // Obter o último ID inserido
            $latest_id = $this->conexao->lastInsertId();
    
            // Segundo INSERT na tabela de empresa
            $stmt2 = $this->conexao->prepare("
                INSERT INTO empresa (id_usuario, nome_empresa, nif) 
                VALUES (:id_usuario, :nome_empresa, :nif)
            ");
            $stmt2->bindParam(':id_usuario', $latest_id);
            $stmt2->bindParam(':nome_empresa', $nome_empresa);
            $stmt2->bindParam(':nif', $nif);
    
            if (!$stmt2->execute()) {
                throw new Exception("Erro ao inserir empresa.");
            }
    
            // Confirma a transação
            $this->conexao->commit();
    
            return true;
    
        } catch (Exception $e) {
            // Reverte a transação em caso de erro
            $this->conexao->rollBack();
            error_log($e->getMessage()); // Log do erro
            return false;
        }
    }
    

    public function verificarNif($nif){
         // verificar se ja existe um nif casdastrado
         $stmt2 = $this->conexao->prepare("SELECT * FROM empresa WHERE nif = :nif");
         $stmt2->bindParam(':nif', $nif);
         $stmt2->execute();
    }

    public function verificarEmail($email) {
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
   
    public function getId(){
        return $this->conexao->lastInsertId();
    }
    public function editar($id, $nome, $email, $idade) {
        $stmt = $this->conexao->prepare("UPDATE alunos SET nome = :nome, email = :email, idade = :idade WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':idade', $idade);
        return $stmt->execute();
    }

    public function excluir($id) {
        $stmt = $this->conexao->prepare("DELETE FROM alunos WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }


    public function verificarUsuario($email, $senha) {
        $stmt = $this->conexaoect()->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            return $usuario;
        }
        return false;
    }
}
