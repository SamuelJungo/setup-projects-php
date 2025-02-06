<?php
class Conexao {
    private $host = 'localhost';
    private $db_name = 'consultoria';
    private $username = 'root';
    private $password = '';
    public $conexao;

    public function connectar() {
        $this->conexao = null;

        try {
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }

        return $this->conexao;
    }
}
