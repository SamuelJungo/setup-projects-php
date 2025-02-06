<?php
session_start(); 
require_once '../conexao/conexao.php';

class Produtos {
    private $conexao;

    public function __construct() {
        $database = new Conexao();
        $this->conexao = $database->connectar();
    }
    public function createProuto($nome, $codigoBarra, $precoCompra, $precoVenda, $qtd_stock, $id_categoria, $idIva, $idMotivoIsencao){


        try {
            $this -> conexao -> beginTransaction();
            $sql = "INSERT INTO produtos (nome, codigoBarra, precoCompra, precoVenda, qtd_stock, id_categoria, idIva, idMotivoIsencao,id_empresa) VALUES (:nome, :codigoBarra, :precoCompra, :precoVenda, :qtd_stock, :id_categoria, :idIva, :idMotivoIsencao,:id_empresa)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':codigoBarra', $codigoBarra);
            $stmt->bindParam(':precoCompra', $precoCompra);
            $stmt->bindParam(':precoVenda', $precoVenda);
            $stmt->bindParam(':qtd_stock', $qtd_stock);
            $stmt->bindParam(':id_categoria', $id_categoria);
            $stmt->bindParam(':idIva', $idIva);
            $stmt->bindParam(':idMotivoIsencao', $idMotivoIsencao);
            $stmt->bindParam(':id_empresa', $_SESSION['id_empresa']);
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

    public function EditarProduto( $id, $nome, $codigoBarra, $precoCompra, $precoVenda, $qtd_stock, $id_categoria, $idIva, $idMotivoIsencao){
        try {
            $this -> conexao -> beginTransaction();
            $sql = "UPDATE produtos SET nome = :nome, codigoBarra = :codigoBarra, precoCompra = :precoCompra, precoVenda = :precoVenda, qtd_stock = :qtd_stock, id_categoria = :id_categoria, idIva = :idIva, idMotivoIsencao = :idMotivoIsencao WHERE id = :id";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':codigoBarra', $codigoBarra);
            $stmt->bindParam(':precoCompra', $precoCompra);
            $stmt->bindParam(':precoVenda', $precoVenda);
            $stmt->bindParam(':qtd_stock', $qtd_stock);
            $stmt->bindParam(':id_categoria', $id_categoria);
            $stmt->bindParam(':idIva', $idIva);
            $stmt->bindParam(':idMotivoIsencao', $idMotivoIsencao);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            //code...
        } catch (Excepion $e) {
            $this->conexao->rollBack();
            error_log($e->getMessage());
            return false;
            //throw $th;
        }
    }
  public function DeleteProduto( $id){
    try {
        $this -> conexao -> beginTransaction();
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $this -> conexao -> commit();
        return $stmt;
        //code...
    } catch (Exception $e) {
        $this->conexao->rollBack();
        error_log($e->getMessage());
        return false;

        //throw $th;
    }
  }


}
