<section>
    <div id="mensagem">
        <div id="autor">
            <p id="email"><b>Autor:</b> <?= $dados['usuario']->email ?></p>
            <p id="data"><?= FormatacaoData::conversorDia($dados['post']->criado_em) ?></p>
        </div>
        <div id="conteudo">
            <p id="titulo"><b>Titulo:</b> <?= $dados['post']->titulo ?></p>
            <p id="texto"><?= $dados['post']->texto ?></p>
        </div>
    </div>
</section>