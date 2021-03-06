<!--<section>
    <div id="exibirPerfil">
        <div id="perfil">
            <div id="informacao">
                <h1>Facilite seu dia com <b>solucoes inteligentes.</b></h1>
            </div>
            <div id="gerenciarPerfil">
                <div id="menu">
                    <div id="dadosLogin">
                        <div id="img">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                        </div>
                        <div id="nome">
                            <p><?= $dados['usuario']->nome ?></p>
                        </div>
                        <div id="email">
                            <p><?= $dados['usuario']->email ?></p>
                        </div>
                    </div>
                    <div id="botoes">
                        <div id="comprar">
                            <a href="<?= URL.'/usuarios/vizualizarPerfil/'.$_SESSION['usuario_id'] ?>">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                </div>
                                <div id="hr">
                                    <hr />
                                </div>
                                <p>Meu Cadastro</p>
                            </a>
                        </div>
                    </div>
                    <div id="atendimento">
                        <h1>Atendimento ao Cliente</h1>
                        <p>kevin.helpconnect@gmail.com</p>
                    </div>
                </div>
                <div id="dados">
                    <div id="minhaConta">
                        <h1>Minha Conta</h1>
                        <h2>Administre seus dados, endereco e pedidos.</h2>
                        <p>Se houver duvidas, entre em contato com nossa central de atendimento</p>
                    </div>
                    <div id="painel">
                        <div id="opcao">
                            <p>Minhas Mensagens</p>
                            <div id="botoes">
                                <div id="comprar">
                                    <a href="#">
                                        <div id="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                            </svg>
                                        </div>
                                        <p>Enviar</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="dadosPerfil">
                            <div id="cadastro">
                                <?php foreach($dados['posts'] as $post): ?>
                                    <?php if($post->usuarioID == $_SESSION['usuario_id']): ?>
                                        <div id="mensagem">
                                            <a href="#" id="linkTitulo">
                                                <p id="titulo"><?= $post->titulo ?></p>
                                            </a>
                                            <div id="botoes">
                                                <div id="comprar">
                                                    <a href="#">
                                                        <div id="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                                <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                                            </svg>
                                                        </div>
                                                        <p>Alterar</p>
                                                    </a>
                                                </div>
                                                <div id="comprar">
                                                    <a href="#">
                                                        <div id="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                            </svg>
                                                        </div>
                                                        <p>Excluir</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->