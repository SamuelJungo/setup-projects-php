<?php
session_start(); 
require_once '../conexao/conexao.php';

class Faturas {
    private $conexao;

    public function __construct() {
        $database = new Conexao();
        $this->conexao = $database->connectar();
    }

    public function createFatura($numero, $totalFactura, $totalPago, $taxaIva, $taxaDesconto, $idUtilizadores, $idEstadoFactura, $idTipoDocumento, $idCliente, $idFormaPagemento, $hash)

    {
      try {
        $this -> conexao -> beginTransaction();
        $sql = "INSERT INTO faturas (numero, totalFactura, totalPago, taxaIva, taxaDesconto, idUtilizadores, idEstadoFactura, idTipoDocumento, idCliente, idFormaPagemento, hash) VALUES (:numero, :totalFactura, :totalPago, :taxaIva, :taxaDesconto, :idUtilizadores, :idEstadoFactura, :idTipoDocumento, :idCliente, :idFormaPagemento, :hash)";
       $stmt = $this->conexao->prepare($sql);
       $stmt->bindParam(':numero', $numero);
       $stmt->bindParam(':totalFactura', $totalFactura);
       $stmt->bindParam(':totalPago', $totalPago);
       $stmt->bindParam(':taxaIva', $taxaIva);
       $stmt->bindParam(':taxaDesconto', $taxaDesconto);
       $stmt->bindParam(':idUtilizadores', $idUtilizadores);
       $stmt->bindParam(':idEstadoFactura', $idEstadoFactura);
       $stmt->bindParam(':idTipoDocumento', $idTipoDocumento);
       $stmt->bindParam(':idCliente', $idCliente);
       $stmt->bindParam(':idFormaPagemento', $idFormaPagemento);
       $stmt->bindParam(':hash', $hash);
       $stmt->execute();
       $this -> conexao -> commit();
       return $stmt;
      } catch (Exception $e) {
        // Reverte a transação em caso de erro
        $this->conexao->rollBack();
        error_log($e->getMessage()); // Log do erro
        return false;
    }

    }
   

    public function  listarFaturas() {
        try {
           $this -> conexao -> beginTransaction();
              $sql = "SELECT * FROM faturas WHERE idUtilizadores = :idUtilizadores";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bindParam(':idUtilizadores', $_SESSION['id_usuario']);
                $stmt->execute();
                $this -> conexao -> commit();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            $this->conexao->rollBack();
            error_log($e->getMessage());
            return false;
            //throw $th;
        }
    }

    public function  estadoFatura($idEstadoFactura, $id) {
        try {
           $this -> conexao -> beginTransaction();
                $sql = "UPDATE faturas SET idEstadoFactura = :idEstadoFactura WHERE id = :id";
                    $stmt = $this->conexao->prepare($sql);
                    $stmt->bindParam(':idEstadoFactura', $idEstadoFactura);
                    $stmt->bindParam(':id', $id);
                    $stmt->execute();
                    $this -> conexao -> commit();
                    return $stmt;

        } catch (Exception $e) {
            $this->conexao->rollBack();
            error_log($e->getMessage());
            return false;
            //throw $th;
        }
    }

    public function faturaLinha($idFactura,$idProduto,$preco,$quantidade,$valorIva,$valorDesconto)
    {
        try {
            $this -> conexao -> beginTransaction();
            $sql = "INSERT INTO fatura_linha (idFactura, idProduto, preco, quantidade, valorIva, valorDesconto,id_empresa) VALUES (:idFactura, :idProduto, :preco, :quantidade, :valorIva, :valorDesconto, :id_empresa)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(':idFactura', $idFactura);
            $stmt->bindParam(':idProduto', $idProduto);
            $stmt->bindParam(':preco', $preco);
            $stmt->bindParam(':quantidade', $quantidade);
            $stmt->bindParam(':valorIva', $valorIva);
            $stmt->bindParam(':valorDesconto', $valorDesconto);
            $stmt->bindParam(':id_empresa', $_SESSION['id_usuario']);
            $stmt->execute();
            $this -> conexao -> commit();
            return $stmt;
        } catch (Exception $e) {
            $this->conexao->rollBack();
            error_log($e->getMessage());
            return false;
            //throw $th;
        }
    }
}
