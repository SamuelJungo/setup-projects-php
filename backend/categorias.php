<?php
session_start(); 
require_once '../conexao/conexao.php';

class Categorias {
    private $conexao;

    public function __construct() {
        $database = new Conexao();
        $this->conexao = $database->connectar();
    }



}
