<?php
require_once "init.php";

renderHeader("Linha Unissex", "unissex");
?>

<!-- HERO SECTION -->
<section class="hero-unissex">
    <div class="hero-bg">
        <img src="./img/pagina_linha_U/principal.jpg" alt="Linha Unissex L'Atelier EGV">
        <div class="hero-overlay"></div>
    </div>

    <div class="hero-content">
        <span class="subtitulo-categoria">LINHA UNISSEX</span>
        <h1>Uma essência.<br><span>Sem rótulos.</span></h1>
        <p class="descricao-hero">Fragrâncias criadas para transcender estilos e expressar quem você realmente é.</p>
        <a href="#fragrancias" class="btn-outline">EXPLORAR LINHA <span class="seta">→</span></a>
    </div>

    <div class="hero-counter">01 / 03</div>
</section>

<!-- FAMÍLIAS OLFATIVAS -->
<section class="familias-unissex">
    <div class="familias-grid">
        <div class="familia-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 10h12v4a5 5 0 0 1-5 5h-2a5 5 0 0 1-5-5v-4z"/>
                <path d="M17 11h1.5a2.5 2.5 0 0 1 0 5H17"/>
                <path d="M9 3c0 1.5 1 1.5 1 3M13 3c0 1.5 1 1.5 1 3"/>
            </svg>
            <span>GOURMAND</span>
        </div>

        <div class="familia-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 3l7 4v6l-7 8-7-8V7z"/>
                <path d="M5 7l7 4 7-4M12 11v10"/>
            </svg>
            <span>AMBARADO</span>
        </div>

        <div class="familia-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2l5 7h-3l4 6H6l4-6H7z"/>
                <path d="M12 15v7"/>
            </svg>
            <span>AMADEIRADO</span>
        </div>

        <div class="familia-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="9"/>
                <circle cx="12" cy="12" r="1"/>
                <path d="M12 3v8M12 13v8M3 12h8M13 12h8M5.6 5.6l5.7 5.7M12.7 12.7l5.7 5.7M18.4 5.6l-5.7 5.7M11.3 12.7l-5.7 5.7"/>
            </svg>
            <span>CÍTRICO</span>
        </div>

        <div class="familia-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 19C5 10 10 5 20 4c0 10-5 15-15 15z"/>
                <path d="M5 19L14 10"/>
            </svg>
            <span>HERBAL</span>
        </div>
    </div>
</section>

<!-- SEÇÃO DE FRAGRÂNCIAS -->
<section class="fragrancias-secao" id="fragrancias">
    <div class="fragrancias-top">
        <div class="titulo-grupo">
            <span class="subtitulo-ouro">NOSSAS FRAGRÂNCIAS</span>
            <h2>Essências que não pertencem<br>a um só estilo.</h2>
        </div>
        <a href="#" class="link-ver-todas">VER TODAS <span class="seta">→</span></a>
    </div>

    <div class="grid-produtos">
        <!-- 1. PRALINÉ CÉLESTE -->
        <article class="card-produto">
            <div class="card-thumb">
                <img src="./img/Produtos/linha unissex/Praline/Praline.jpg" alt="Praliné Céleste">
            </div>
            <div class="card-body">
                <h3>Praliné Céleste</h3>
                <span class="familia-tag">GOURMAND AMBARADO</span>
                <p>Luxuoso e extremamente doce. Notas de açafrão, caramelo queimado, âmbar cinzento e cedro.</p>
                <div class="card-footer">
                    <strong>R$ 229,90</strong>
                    <div class="acoes-produto">
                        <a href="carrinho.php?id=15" class="btn-carrinho-unissex" title="Adicionar Praliné Céleste ao carrinho" aria-label="Adicionar Praliné Céleste ao carrinho">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M3 3h2l2.2 11.2a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 2-1.6L21 7H6"/>
                                <circle cx="10" cy="20" r="1"/>
                                <circle cx="18" cy="20" r="1"/>
                                <path d="M12 5v6M9 8h6"/>
                            </svg>
                        </a>
                        <a href="#" class="btn-circulo" title="Ver detalhes de Praliné Céleste" aria-label="Ver detalhes de Praliné Céleste">→</a>
                    </div>
                </div>
            </div>
        </article>

        <!-- 2. TERRA & AURUM -->
        <article class="card-produto">
            <div class="card-thumb">
                <img src="./img/Produtos/linha unissex/Terra/terra.jpg" alt="Terra & Aurum">
            </div>
            <div class="card-body">
                <h3>Terra & Aurum</h3>
                <span class="familia-tag">AMBARADO AMADEIRADO</span>
                <p>Exótico e quente. Une o açafrão, mirra e rosa ao toque do cacau amargo e patchouli.</p>
                <div class="card-footer">
                    <strong>R$ 199,90</strong>
                    <div class="acoes-produto">
                        <a href="carrinho.php?id=16" class="btn-carrinho-unissex" title="Adicionar Terra & Aurum ao carrinho" aria-label="Adicionar Terra & Aurum ao carrinho">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M3 3h2l2.2 11.2a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 2-1.6L21 7H6"/>
                                <circle cx="10" cy="20" r="1"/>
                                <circle cx="18" cy="20" r="1"/>
                                <path d="M12 5v6M9 8h6"/>
                            </svg>
                        </a>
                        <a href="#" class="btn-circulo" title="Ver detalhes de Terra & Aurum" aria-label="Ver detalhes de Terra & Aurum">→</a>
                    </div>
                </div>
            </div>
        </article>

        <!-- 3. AURA DE AMBER -->
        <article class="card-produto">
            <div class="card-thumb">
                <img src="./img/Produtos/linha unissex/Aura/Aura.jpg" alt="Aura de Amber">
            </div>
            <div class="card-body">
                <h3>Aura de Amber</h3>
                <span class="familia-tag">AMBARADO MÍSTICO</span>
                <p>Acolhedor e meditativo. Combina incenso, flor de lótus, âmbar, sândalo e mirra.</p>
                <div class="card-footer">
                    <strong>R$ 199,90</strong>
                    <div class="acoes-produto">
                        <a href="carrinho.php?id=17" class="btn-carrinho-unissex" title="Adicionar Aura de Amber ao carrinho" aria-label="Adicionar Aura de Amber ao carrinho">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M3 3h2l2.2 11.2a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 2-1.6L21 7H6"/>
                                <circle cx="10" cy="20" r="1"/>
                                <circle cx="18" cy="20" r="1"/>
                                <path d="M12 5v6M9 8h6"/>
                            </svg>
                        </a>
                        <a href="#" class="btn-circulo" title="Ver detalhes de Aura de Amber" aria-label="Ver detalhes de Aura de Amber">→</a>
                    </div>
                </div>
            </div>
        </article>

        <!-- 4. VERDE INFINITO -->
        <article class="card-produto">
            <div class="card-thumb">
                <img src="./img/Produtos/linha unissex/Verde/Verde.jpg" alt="Verde Infinito">
            </div>
            <div class="card-body">
                <h3>Verde Infinito</h3>
                <span class="familia-tag">CÍTRICO HERBAL</span>
                <p>Energizante e natural. Notas revigorantes de chá verde, capim-limão, hortelã e musgo.</p>
                <div class="card-footer">
                    <strong>R$ 179,90</strong>
                    <div class="acoes-produto">
                        <a href="carrinho.php?id=18" class="btn-carrinho-unissex" title="Adicionar Verde Infinito ao carrinho" aria-label="Adicionar Verde Infinito ao carrinho">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M3 3h2l2.2 11.2a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 2-1.6L21 7H6"/>
                                <circle cx="10" cy="20" r="1"/>
                                <circle cx="18" cy="20" r="1"/>
                                <path d="M12 5v6M9 8h6"/>
                            </svg>
                        </a>
                        <a href="#" class="btn-circulo" title="Ver detalhes de Verde Infinito" aria-label="Ver detalhes de Verde Infinito">→</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>

<!-- DESTAQUE SPLIT (IMAGEM + TEXTURA BEGE) -->
<section class="banner-destaque-split">
    <div class="split-col-img">
        <img src="./img/pagina_linha_U/secundaria.jpeg" alt="Essência Sem Rótulos">
    </div>

    <div class="split-col-texto">
        <img class="split-texto-bg" src="./img/pagina_linha_U/terceira.jpeg" alt="">

        <div class="split-texto-conteudo">
            <span class="tag-pequena">PARA QUEM NÃO PRECISA ESCOLHER</span>
            <h2>Essência<br><span>sem rótulos.</span></h2>
            <p>Para quem não escolhe uma fragrância pelo que ela deveria ser.<br>Escolhe pelo que ela faz sentir.</p>
            <a href="#" class="btn-dark-outline">DESCUBRA A COLEÇÃO <span class="seta">→</span></a>
        </div>
    </div>
</section>

<!-- SEÇÃO DUPLA (DUAS PERSONALIDADES & ALQUIMIA) -->
<section class="secao-dupla">
    <div class="dupla-card card-esquerda">
        <div class="dupla-conteudo">
            <span class="tag-dupla">UM PERFUME.</span>
            <h2>Duas personalidades.</h2>
            <p>A mesma fragrância pode revelar uma presença completamente diferente em cada pele.</p>
            <a href="#" class="btn-outline">CONHEÇA A COLEÇÃO <span class="seta">→</span></a>
        </div>
    </div>

    <div class="dupla-imagem-central">
        <img src="./img/Produtos/linha unissex/unissex.jpeg" alt="Ateliê de Essências">
    </div>

    <div class="dupla-card card-direita">
        <div class="dupla-conteudo">
            <span class="tag-dupla">A ARTE DA PERFUMARIA</span>
            <h2>Mais que ingredientes,<br>uma alquimia.</h2>
            <p>Notas e matérias-primas combinadas para criar uma assinatura que expressa personalidade.</p>
            <a href="#" class="btn-outline">CONHEÇA NOSSO PROCESSO <span class="seta">→</span></a>
        </div>
    </div>
</section>

<!-- BANNER INFERIOR -->
<section class="banner-final-unissex">
    <div class="banner-final-bg">
        <img src="./img/pagina_linha_U/quinta.jpg" alt="L'Atelier EGV">
        <div class="banner-final-overlay"></div>
    </div>

    <div class="banner-final-conteudo">
        <div class="arco-luminoso">
            <p class="tag-arco">NÃO É SOBRE SER FEMININO. NÃO É SOBRE SER MASCULINO.</p>
            <h2>É sobre ser você.</h2>
            <a href="#fragrancias" class="btn-outline">ENCONTRE SUA FRAGRÂNCIA <span class="seta">→</span></a>
        </div>
    </div>
</section>

<style>
/* Botões dourados de carrinho: preserva as classes e o layout existentes */
.card-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
}

.acoes-produto {
    display: flex;
    align-items: center;
    gap: 8px;
}

.btn-carrinho-unissex {
    width: 32px;
    height: 32px;
    min-width: 32px;
    box-sizing: border-box;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #b58b45;
    border-radius: 50%;
    background: transparent;
    color: #d6a34e;
    text-decoration: none;
    transition: background-color .25s ease, color .25s ease, transform .25s ease;
}

.btn-carrinho-unissex svg {
    width: 18px;
    height: 18px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.6;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.btn-carrinho-unissex:hover {
    background-color: #b58b45;
    color: #061321;
    transform: translateY(-2px);
}
</style>

<?php
renderFooter();
?>
