<?php

class Produto {
    private $db;

    public function __construct() {
        $this->db = new Database();

    }

    public function listarProdutos() {
        $this->db->query("SELECT * FROM tb_produtos");
        
        return $this->db->resultados();
    }

    public function lerProdutoPorId($urlProduto) {
        /*$this->db->query("SELECT * FROM tb_produtos WHERE id = :id");
        $this->db->bind('id', $id);*/
        $this->db->query("SELECT * FROM tb_produtos WHERE urlProduto = :urlProduto");
        $this->db->bind('urlProduto', $urlProduto); 

        return $this->db->resultado();
    }

}