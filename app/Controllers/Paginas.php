<?php

class Paginas extends Controller {

    public function __construct() {
        $this->postModel = $this->model('Post');
    }

    public function index() {
        $dados = [
            'titulo' => 'Pagina Inicial',
            'descricao' => 'Criacao de site em modelo MVC',
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('paginas/home', $dados);
    }

    public function sobre() {
        $dados = [
            'tituloPaginas' => 'Sobre Nos'
        ];
        
        $this->view('paginas/sobre', $dados);
    }

}