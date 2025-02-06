<?php
session_start(); 
require_once '../conexao/conexao.php';

class Cliente {
    private $conexao;

    public function __construct() {
        $database = new Conexao();
        $this->conexao = $database->connectar();
    }
  
    public function listarClientes() {
        $sql = "SELECT * FROM clientes WHERE id_empresa = :id_empresa";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id_empresa', $_SESSION['id_usuario']);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createCliente($nome, $nif, $morada, $email,$contato,$id_provincia) {
        try {
            // Inicia a transação
            $this->conexao->beginTransaction();
            // Insere o cliente
            $sql = "INSERT INTO cliente (nome, nif, morada, email,contado,id_provincia,id_empresa) VALUES (:nome, :nif, :morada, :email, :contato, :id_provincia, :id_empresa)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':nif', $nif);
            $stmt->bindParam(':morada', $morada);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':contato', $contato);
            $stmt->bindParam(':id_provincia', $id_provincia);
            $stmt->bindParam(':id_empresa', $_SESSION['id_usuario']);
            $stmt->execute();
            // Commita a transação
            $this->conexao->commit();
            return true;
        
    
        } catch (Exception $e) {
            // Reverte a transação em caso de erro
            $this->conexao->rollBack();
            error_log($e->getMessage()); // Log do erro
            return false;
        }
    }
    

    public function EditarCliente($nome, $nif, $morada, $email,$contato,$id_provincia,$id) {

        try {
            //code...
          $this ->conexao->beginTransaction();
            $sql = "UPDATE cliente SET nome = :nome, nif = :nif, morada = :morada, email = :email, contato = :contato, id_provincia = :id_provincia WHERE id = :id";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':nif', $nif);
            $stmt->bindParam(':morada', $morada);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':contato', $contato);
            $stmt->bindParam(':id_provincia', $id_provincia);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $this->conexao->commit();
            return true;
    
        } catch (Exception $e) {
            // Reverte a transação em caso de erro
            $this->conexao->rollBack();
            error_log($e->getMessage()); // Log do erro
            return false;
        }
    }

  public function deleteCliente($id) {
        try {
            //code...
            $this->conexao->beginTransaction();
            $sql = "DELETE FROM cliente WHERE id = :id";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $this->conexao->commit();
            return true;
    
        } catch (Exception $e) {
            // Reverte a transação em caso de erro
            $this->conexao->rollBack();
            error_log($e->getMessage()); // Log do erro
            return false;
        }
    }
   
}
