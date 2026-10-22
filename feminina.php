<?php
require_once "init.php";
renderHeader("Linha Feminina", "feminina");
?>

<style>
.rodape-card .acoes-card{display:flex;align-items:center;gap:8px}
.rodape-card .botao-carrinho{display:inline-flex;align-items:center;justify-content:center}
</style>

<!-- HERO / DESTAQUE -->
<section class="hero">
    <img class="hero-imagem" src="./img/pagina_linha_F/principal.png" alt="Linha feminina L'Atelier EGV">
    <div class="hero-overlay"></div>
    <div class="hero-text">
        <p class="categoria">LINHA FEMININA</p>
        <h1>Fragrâncias que deixam <span>uma presença.</span></h1>
        <p class="descricao">Mais do que perfumes, são histórias em forma de aroma. Descubra a linha feminina e encontre a fragrância que combina com a sua essência.</p>
        <a href="#fragrancias" class="botao">EXPLORAR LINHA</a>
    </div>
</section>

<!-- FAMÍLIAS OLFATIVAS -->
<section class="familias">
    <div class="familia"><img src="./img/pagina_linha_F/1.png" alt="Doce"><span>DOCE</span></div>
    <div class="familia"><img src="./img/pagina_linha_F/2.png" alt="Floral"><span>FLORAL</span></div>
    <div class="familia"><img src="./img/pagina_linha_F/3.png" alt="Cítrico"><span>CÍTRICO</span></div>
    <div class="familia"><img src="./img/pagina_linha_F/4.png" alt="Amadeirado"><span>AMADEIRADO</span></div>
    <div class="familia"><img src="./img/pagina_linha_F/5.png" alt="Oriental"><span>ORIENTAL</span></div>
</section>

<!-- FRAGRÂNCIAS -->
<section class="fragrancias" id="fragrancias">
    <div class="cabecalho-fragrancias">
        <div class="titulo-secao"><p>NOSSAS FRAGRÂNCIAS</p><h2>Escolha a que mais combina com você</h2></div>
        <a href="#fragrancias" class="ver-todas">VER TODAS<span>→</span></a>
    </div>
    <div class="produtos-fragrancias">
        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha feminina/Dolce_Tentazione/Dolce_Tentazione.jpg" alt="Dolce Tentazione"></div>
            <div class="info-perfume"><h3>Dolce Tentazione</h3><p class="familia-perfume">Gourmand / Frutado</p><p class="descricao-perfume">A doçura irresistível das confeitarias parisienses.</p>
                <div class="rodape-card"><strong>R$ 189,90</strong><div class="acoes-card"><a href="carrinho.php?id=1" class="botao-perfume botao-carrinho" title="Adicionar ao carrinho" aria-label="Adicionar Dolce Tentazione ao carrinho"><i class="fa-solid fa-cart-plus"></i></a><a href="#" class="botao-perfume" aria-label="Ver detalhes de Dolce Tentazione">→</a></div></div>
            </div>
        </article>
        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha feminina/Vanile/valine.jpg" alt="Vanille Impériale"></div>
            <div class="info-perfume"><h3>Vanille Impériale</h3><p class="familia-perfume">Oriental Gourmand</p><p class="descricao-perfume">A rainha das especiarias em sua forma mais doce.</p>
                <div class="rodape-card"><strong>R$ 199,90</strong><div class="acoes-card"><a href="carrinho.php?id=10" class="botao-perfume botao-carrinho" title="Adicionar ao carrinho" aria-label="Adicionar Vanille Impériale ao carrinho"><i class="fa-solid fa-cart-plus"></i></a><a href="#" class="botao-perfume" aria-label="Ver detalhes de Vanille Impériale">→</a></div></div>
            </div>
        </article>
        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha feminina/Eclat/eclat.jpg" alt="Éclat D’Or"></div>
            <div class="info-perfume"><h3>Éclat D’Or</h3><p class="familia-perfume">Floral Oriental</p><p class="descricao-perfume">O brilho do pôr do sol sobre Paris.</p>
                <div class="rodape-card"><strong>R$ 189,90</strong><div class="acoes-card"><a href="carrinho.php?id=11" class="botao-perfume botao-carrinho" title="Adicionar ao carrinho" aria-label="Adicionar Éclat D’Or ao carrinho"><i class="fa-solid fa-cart-plus"></i></a><a href="#" class="botao-perfume" aria-label="Ver detalhes de Éclat D’Or">→</a></div></div>
            </div>
        </article>
        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha feminina/Jardin/Jardin.jpg" alt="Jardin de Soie"></div>
            <div class="info-perfume"><h3>Jardin de Soie</h3><p class="familia-perfume">Floral Frutado</p><p class="descricao-perfume">Um jardim secreto coberto de orvalho.</p>
                <div class="rodape-card"><strong>R$ 189,90</strong><div class="acoes-card"><a href="carrinho.php?id=12" class="botao-perfume botao-carrinho" title="Adicionar ao carrinho" aria-label="Adicionar Jardin de Soie ao carrinho"><i class="fa-solid fa-cart-plus"></i></a><a href="#" class="botao-perfume" aria-label="Ver detalhes de Jardin de Soie">→</a></div></div>
            </div>
        </article>
        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha feminina/Rosa/Rosa.jpg" alt="Rosa Impériale"></div>
            <div class="info-perfume"><h3>Rosa Impériale</h3><p class="familia-perfume">Floral</p><p class="descricao-perfume">O encanto do primeiro amor.</p>
                <div class="rodape-card"><strong>R$ 189,90</strong><div class="acoes-card"><a href="carrinho.php?id=13" class="botao-perfume botao-carrinho" title="Adicionar ao carrinho" aria-label="Adicionar Rosa Impériale ao carrinho"><i class="fa-solid fa-cart-plus"></i></a><a href="#" class="botao-perfume" aria-label="Ver detalhes de Rosa Impériale">→</a></div></div>
            </div>
        </article>
        <article class="card-perfume">
            <div class="imagem-perfume"><img src="./img/Produtos/linha feminina/Nuit/Nuit.jpg" alt="Nuit Velours"></div>
            <div class="info-perfume"><h3>Nuit Velours</h3><p class="familia-perfume">Chipre Oriental</p><p class="descricao-perfume">Uma noite urbana repleta de encontros inesperados.</p>
                <div class="rodape-card"><strong>R$ 189,90</strong><div class="acoes-card"><a href="carrinho.php?id=14" class="botao-perfume botao-carrinho" title="Adicionar ao carrinho" aria-label="Adicionar Nuit Velours ao carrinho"><i class="fa-solid fa-cart-plus"></i></a><a href="#" class="botao-perfume" aria-label="Ver detalhes de Nuit Velours">→</a></div></div>
            </div>
        </article>
    </div>
</section>

<!-- LINHA COMPLETA -->
<section class="linha-completa">
    <div class="imagem-completa"><img src="./img/Produtos/linha feminina/Sol/linha_completa.jpg" alt="Linha completa L'Atelier EGV"></div>
    <div class="texto-completa"><p>LINHA COMPLETA</p><h2>Cuide de você em cada <span>detalhe</span></h2><p class="descricao-completa">Hidratantes, sabonetes, esfoliantes e muito mais. Produtos que complementam sua fragrância e tornam a experiência ainda mais especial.</p><a href="#" class="botao">VER PRODUTOS COMPLEMENTARES →</a></div>
    <div class="complementares">
        <div class="complementar"><img src="img/pagina_linha_F/icone_6.png" alt="Hidratantes corporais"><span>Hidratantes corporais<br>e óleos perfumados</span></div>
        <div class="complementar"><img src="img/pagina_linha_F/icone_7.png" alt="Sabonetes artesanais"><span>Sabonetes artesanais</span></div>
        <div class="complementar"><img src="img/pagina_linha_F/icone_8.png" alt="Desodorantes"><span>Desodorantes sem alumínio</span></div>
        <div class="complementar"><img src="img/pagina_linha_F/icone_9.png" alt="Séruns e cremes faciais"><span>Séruns e cremes faciais</span></div>
        <div class="complementar"><img src="img/pagina_linha_F/icone_10.png" alt="Nécessaires e estojos"><span>Nécessaires e estojos</span></div>
        <div class="complementar"><img src="./img/pagina_linha_F/icone_11.png" alt="Outros produtos"><span>E muito mais...</span></div>
    </div>
</section>

<!-- ESSÊNCIA -->
<section class="essencia">
    <div class="essencia-texto"><h2>Cada perfume tem uma história.<br><span>Qual é a sua?</span></h2><a href="#" class="botao">DESCUBRA SUA ESSÊNCIA →</a></div>
    <div class="essencia-imagem"><img src="./img/pagina_linha_F/secundaria.jpg" alt="Essência L'Atelier EGV"></div>
    <div class="essencia-logo"><img src="./img/Logo/logoEscrita.png.png" alt="L'Atelier EGV de Parfums"></div>
</section>

<?php renderFooter(); ?>
