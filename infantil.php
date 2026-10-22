<?php
require_once "init.php";

renderHeader("Linha Infantil", "infantil");
?>

<section class="hero">
    <img src="./img/pagina_linha_I/ursinho.png" alt="Linha infantil L'Atelier EGV" class="hero-imagem">
    <div class="hero-overlay"></div>
    <div class="hero-text">
        <p class="categoria">LINHA INFANTIL</p>
        <h1>Pequenos momentos,<br><span>grandes memórias.</span></h1>
        <p class="descricao">Fragrâncias delicadas e seguras,<br>para acompanhar cada fase da infância<br>com leveza, alegria e imaginação.</p>
        <a href="#fragrancias" class="botao">EXPLORAR LINHA <span>→</span></a>
    </div>
</section>

<section class="familias">
    <div class="familia"><img src="./img/pagina_linha_I/icone_1.png" alt="Fórmulas seguras"><span>FÓRMULAS SEGURAS</span></div>
    <div class="familia"><img src="./img/pagina_linha_I/icone_2.png" alt="Dermatologicamente testado"><span>DERMATOLOGICAMENTE<br>TESTADO</span></div>
    <div class="familia"><img src="./img/pagina_linha_I/icone_3.png" alt="Fragrâncias suaves"><span>FRAGRÂNCIAS SUAVES</span></div>
    <div class="familia"><img src="./img/pagina_linha_I/icone_4.png" alt="Para todas as idades"><span>PARA TODAS AS IDADES</span></div>
    <div class="familia"><img src="./img/pagina_linha_I/icone_5.png" alt="Livre de parabenos"><span>LIVRE DE PARABENOS</span></div>
</section>

<section class="fragrancias" id="fragrancias">
    <div class="cabecalho-fragrancias">
        <div class="titulo-secao">
            <p>NOSSAS FRAGRÂNCIAS</p>
            <h2>Descubra a magia<br><span>em cada aroma</span></h2>
        </div>
        <a href="#" class="ver-todas">VER TODAS <span>→</span></a>
    </div>

    <div class="produtos-fragrancias">
        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha infantil/princesa/princesa.png" alt="Princesa das Flores"></div>
            <div class="info-perfume">
                <h3>Princesa das Flores</h3>
                <p class="familia-perfume">DOCE INFANTIL</p>
                <p class="descricao-perfume">Lúdico, doce e delicado, com moranguinho silvestre, camomila e flor de maçã.</p>
                <div class="rodape-card">
                    <strong>R$ 79,90</strong>
                    <div class="acoes-card">
                        <a href="carrinho.php?id=19" class="botao-perfume botao-carrinho" title="Adicionar Princesa das Flores ao carrinho" aria-label="Adicionar Princesa das Flores ao carrinho"><i class="fa-solid fa-cart-plus"></i></a>
                        <a href="#" class="botao-perfume" aria-label="Ver detalhes de Princesa das Flores">→</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha infantil/Pequeno/Pequeno.png" alt="Pequeno Explorador"></div>
            <div class="info-perfume">
                <h3>Pequeno Explorador</h3>
                <p class="familia-perfume">INFANTIL MASCULINO</p>
                <p class="descricao-perfume">Alegre, fresco e dinâmico, com mandarina doce, menta suave e madeiras leves.</p>
                <div class="rodape-card">
                    <strong>R$ 79,90</strong>
                    <div class="acoes-card">
                        <a href="carrinho.php?id=20" class="botao-perfume botao-carrinho" title="Adicionar Pequeno Explorador ao carrinho" aria-label="Adicionar Pequeno Explorador ao carrinho"><i class="fa-solid fa-cart-plus"></i></a>
                        <a href="#" class="botao-perfume" aria-label="Ver detalhes de Pequeno Explorador">→</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha infantil/Nuvem algodao/Nuvem.jpg" alt="Nuvem de Algodão"></div>
            <div class="info-perfume">
                <h3>Nuvem de Algodão</h3>
                <p class="familia-perfume">UNISSEX INFANTIL</p>
                <p class="descricao-perfume">Aconchegante, limpo e suave, com camomila, flor de algodão, talco e baunilha suave.</p>
                <div class="rodape-card">
                    <strong>R$ 79,90</strong>
                    <div class="acoes-card">
                        <a href="carrinho.php?id=21" class="botao-perfume botao-carrinho" title="Adicionar Nuvem de Algodão ao carrinho" aria-label="Adicionar Nuvem de Algodão ao carrinho"><i class="fa-solid fa-cart-plus"></i></a>
                        <a href="#" class="botao-perfume" aria-label="Ver detalhes de Nuvem de Algodão">→</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha infantil/Nuvem magica/Nuvem magica.jpg" alt="Nuvem Mágica"></div>
            <div class="info-perfume">
                <h3>Nuvem Mágica</h3>
                <p class="familia-perfume">UNISSEX INFANTIL</p>
                <p class="descricao-perfume">Calmo e confortante, com pera doce, flor de laranjeira e almíscar baby.</p>
                <div class="rodape-card">
                    <strong>R$ 79,90</strong>
                    <div class="acoes-card">
                        <a href="carrinho.php?id=22" class="botao-perfume botao-carrinho" title="Adicionar Nuvem Mágica ao carrinho" aria-label="Adicionar Nuvem Mágica ao carrinho"><i class="fa-solid fa-cart-plus"></i></a>
                        <a href="#" class="botao-perfume" aria-label="Ver detalhes de Nuvem Mágica">→</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha infantil/Primeiro/Primeiro.jpg" alt="Primeiro Abraço"></div>
            <div class="info-perfume">
                <h3>Primeiro Abraço</h3>
                <p class="familia-perfume">LINHA BEBÊ</p>
                <p class="descricao-perfume">Puro, protetor e relaxante, com camomila, lavanda purificada e almíscar suave.</p>
                <div class="rodape-card">
                    <strong>R$ 84,90</strong>
                    <div class="acoes-card">
                        <a href="carrinho.php?id=23" class="botao-perfume botao-carrinho" title="Adicionar Primeiro Abraço ao carrinho" aria-label="Adicionar Primeiro Abraço ao carrinho"><i class="fa-solid fa-cart-plus"></i></a>
                        <a href="#" class="botao-perfume" aria-label="Ver detalhes de Primeiro Abraço">→</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha infantil/Jardim Encantado/Jardim Encantado.png" alt="Jardim Encantado"></div>
            <div class="info-perfume">
                <h3>Jardim Encantado</h3>
                <p class="familia-perfume">FLORAL FRUTADO DOCE</p>
                <p class="descricao-perfume">Radiante, alegre e encantador, com moranguinho silvestre, flor de laranjeira e baunilha.</p>
                <div class="rodape-card">
                    <strong>R$ 79,90</strong>
                    <div class="acoes-card">
                        <a href="carrinho.php?id=24" class="botao-perfume botao-carrinho" title="Adicionar Jardim Encantado ao carrinho" aria-label="Adicionar Jardim Encantado ao carrinho"><i class="fa-solid fa-cart-plus"></i></a>
                        <a href="#" class="botao-perfume" aria-label="Ver detalhes de Jardim Encantado">→</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>

<section class="universo-infantil">
    <img src="./img/pagina_linha_I/universo-infantil.png" alt="Menina abraçando um coelhinho, com fundo bege e aviãozinho de papel" class="universo-fundo-unico">
    <div class="universo-texto">
        <p class="mini-titulo">MAIS QUE PERFUME</p>
        <h2>É sobre<br><span>imaginação.</span></h2>
        <p class="descricao-universo">Nossas fragrâncias infantis são criadas<br>para despertar sorrisos, memórias e<br>os sonhos que tornam a infância tão especial.</p>
        <a href="#fragrancias" class="botao-universo">CONHEÇA NOSSA LINHA <span>→</span></a>
    </div>
</section>

<section class="ingredientes">
    <div class="ingredientes-texto">
        <p class="mini-titulo">A ARTE DA PERFUMARIA</p>
        <h2>Ingredientes que<br>cuidam da sua criança.</h2>
        <p class="descricao-ingredientes">Selecionamos as melhores matérias-primas,<br>com todo o cuidado e segurança que essa fase merece.</p>
        <a href="#" class="botao-ingredientes">SAIBA MAIS <span>→</span></a>
    </div>
    <div class="ingredientes-imagem">
        <img src="./img/pagina_linha_I/perfume.jpg" alt="Ingredientes e perfumes da linha infantil">
    </div>
</section>

<section class="faixa-final">
    <img src="./img/pagina_linha_I/noite.png" alt="Universo infantil L'Atelier EGV" class="faixa-final-imagem">
    <div class="faixa-final-conteudo">
        <h2>Porque toda criança<br><span>merece se sentir especial.</span></h2>
        <a href="#fragrancias" class="botao-final">ENCONTRE A FRAGRÂNCIA IDEAL <span>→</span></a>
    </div>
</section>

<style>
/* Ícone de carrinho dourado, seguindo o estilo dos cards existentes */
.rodape-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
}
.acoes-card {
    display: flex;
    align-items: center;
    gap: 8px;
}
.botao-carrinho {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}
.botao-carrinho i {
    font-size: 15px;
}
</style>

<?php
renderFooter();
?>
