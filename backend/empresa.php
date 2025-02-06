<?php
require_once '../conexao/conexao.php';
session_start(); 

class Empresa {
    private $conexao;

    public function __construct() {
        $database = new Conexao();
        $this->conexao = $database->connectar();
    }

    public function createEmpresa( $empresa, $email, $password, $nif , $contato) {
        try {
            		$morada="Luanda";	$pais="Angola";	$cidade="Luanda";	$provincia="luanda";	
            $password_hash = password_hash( $password, PASSWORD_BCRYPT );
            $this->conexao->beginTransaction();
            $stmt = $this->conexao->prepare( "
                INSERT INTO dados_empresa (nome, nif, morada, cidade, provincia, pais, email, contacto) 
                VALUES (:nome, :nif, :morada, :cidade, :provincia, :pais, :email, :contacto)
            " );
            $stmt->bindParam( ':nome', $empresa );
            $stmt->bindParam( ':nif', $nif );
            $stmt->bindParam( ':morada', $morada );
            $stmt->bindParam( ':cidade', $cidade );
            $stmt->bindParam( ':provincia', $provincia );
            $stmt->bindParam( ':pais', $pais );
            $stmt->bindParam( ':email', $email );
            $stmt->bindParam( ':contacto', $contato );

            

            if ( !$stmt->execute() ) {
                throw new Exception( 'Erro ao inserir usuário.'+ json_encode( $stmt ) );
            }

            $latest_id = $this->conexao->lastInsertId();
          	

            $stmt2 = $this->conexao->prepare( "
                INSERT INTO utilizadores (nome, senha, email, id_empresa, user_type_id, nif) 
                VALUES (:nome, :senha, :email, :id_empresa, :user_type_id, :nif)
            " );
            $stmt2->bindParam( ':nome', $empresa );
            $stmt2->bindParam( ':senha', $password_hash );
            $stmt2->bindParam( ':email', $email );
            $stmt2->bindParam( ':id_empresa', $latest_id );
            $stmt2->bindParam( ':user_type_id', 1 );
            $stmt2->bindParam( ':nif', $nif );

            if ( !$stmt2->execute() ) {
                throw new Exception( 'Erro ao inserir empresa.' );
            }

            $this->conexao->commit();

            return true;

        } catch ( Exception $e ) {
            $this->conexao->rollBack();
            error_log( $e->getMessage() );
            // Log do erro
            return false;
        }
    }

    public function verificarNif($nif) {
        try {
            $stmt2 = $this->conexao->prepare('SELECT 1 FROM dados_empresa WHERE nif = :nif LIMIT 1');
            $stmt2->bindParam(':nif', $nif);
            $stmt2->execute();
            if ($stmt2->rowCount() > 0) {
                return true; 
            } else {
                return false; 
            }
        } catch (Exception $e) {
            error_log("Erro ao verificar o NIF: " . $e->getMessage());
            return false;
        }
    }
    

    public function verificarEmail($email) {
        try {
            // Preparar a consulta
            $stmt = $this->conexao->prepare('SELECT 1 FROM dados_empresa WHERE email = :email LIMIT 1');
            $stmt->bindParam(':email', $email);
            $stmt->execute();
    
            // Verificar se o email já existe
            if ($stmt->rowCount() > 0) {
                return true;  // Email já está registrado
            } else {
                return false; // Email não encontrado
            }
        } catch (Exception $e) {
            // Logar o erro, sem expor detalhes ao usuário final
            error_log("Erro ao verificar o email: " . $e->getMessage());
            return false;
        }
    }
    

    public function getId() {
        return $this->conexao->lastInsertId();
    }

  
 


   
}
