<?php
require_once 'init.php'; // Carrega configurações e sessão

// Termo pesquisado pelo usuário
$termo = isset($_GET['q']) ? trim($_GET['q']) : '';

// Função nativa para remover acentos de forma compatível com qualquer PHP
function removerAcentos($str) {
    $comAcento = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', '’');
    $semAcento = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', "'");
    return str_replace($comAcento, $semAcento, $str);
}

// Normaliza para comparar: sem acento, minúsculo e sem apóstrofo
// (assim "eclat dor" encontra "Éclat D'Or")
function normalizar($str) {
    return mb_strtolower(str_replace("'", '', removerAcentos($str)), 'UTF-8');
}

// Catálogo completo. O link de cada produto é montado abaixo (página da linha + âncora).
// ATENÇÃO: cada card nas páginas das linhas precisa ter id="<slug do nome>".
$produtos = [
    // --- LINHA FEMININA ---
    ['nome' => 'Dolce Tentazione', 'familia' => 'Gourmand / Frutado', 'preco' => 'R$ 189,90', 'categoria' => 'Feminino'],
    ['nome' => 'Vanille Impériale', 'familia' => 'Oriental Gourmand', 'preco' => 'R$ 199,90', 'categoria' => 'Feminino'],
    ['nome' => "Éclat D'Or", 'familia' => 'Floral Oriental', 'preco' => 'R$ 189,90', 'categoria' => 'Feminino'],
    ['nome' => 'Jardin de Soie', 'familia' => 'Floral Frutado', 'preco' => 'R$ 189,90', 'categoria' => 'Feminino'],
    ['nome' => 'Rosa Impériale', 'familia' => 'Floral', 'preco' => 'R$ 189,90', 'categoria' => 'Feminino'],
    ['nome' => 'Nuit Velours', 'familia' => 'Chipre Oriental', 'preco' => 'R$ 189,90', 'categoria' => 'Feminino'],

    // --- LINHA MASCULINA ---
    ['nome' => "Agrumes d'Or", 'familia' => 'Cítrico Mineral', 'preco' => 'R$ 189,90', 'categoria' => 'Masculino'],
    ['nome' => 'Bourbon & Miel', 'familia' => 'Gourmand Amadeirado', 'preco' => 'R$ 199,90', 'categoria' => 'Masculino'],
    ['nome' => 'Épice Noir', 'familia' => 'Oriental Especiado', 'preco' => 'R$ 189,90', 'categoria' => 'Masculino'],
    ['nome' => 'Cuir Noir', 'familia' => 'Amadeirado Couro', 'preco' => 'R$ 199,90', 'categoria' => 'Masculino'],
    ['nome' => 'Bleu Sauvage', 'familia' => 'Aromático Fresco', 'preco' => 'R$ 189,90', 'categoria' => 'Masculino'],
    ['nome' => 'Oud Majestueux', 'familia' => 'Amadeirado Denso', 'preco' => 'R$ 229,90', 'categoria' => 'Masculino'],

    // --- LINHA UNISSEX ---
    ['nome' => 'Praliné Céleste', 'familia' => 'Gourmand Ambarado', 'preco' => 'R$ 229,90', 'categoria' => 'Unissex'],
    ['nome' => 'Terra & Aurum', 'familia' => 'Ambarado Amadeirado', 'preco' => 'R$ 199,90', 'categoria' => 'Unissex'],
    ['nome' => 'Aura de Amber', 'familia' => 'Ambarado Místico', 'preco' => 'R$ 199,90', 'categoria' => 'Unissex'],
    ['nome' => 'Verde Infinito', 'familia' => 'Cítrico Herbal', 'preco' => 'R$ 179,90', 'categoria' => 'Unissex']
];

// Cria o "slug" do nome para usar como âncora. Ex.: "Terra & Aurum" => "terra-aurum"
function criarSlug($str) {
    $slug = preg_replace('/[^a-z0-9]+/', '-', normalizar($str));
    return trim($slug, '-');
}

// Página de cada linha
$paginasLinhas = [
    'Feminino'  => 'feminina.php',
    'Masculino' => 'masculino.php',
    'Unissex'   => 'unissex.php'
];

// Link direto: página da linha + âncora do produto. Ex.: feminina.php#dolce-tentazione
foreach ($produtos as $i => $p) {
    $produtos[$i]['link'] = $paginasLinhas[$p['categoria']] . '#' . criarSlug($p['nome']);
}

// LÓGICA DE PESQUISA
$resultados = [];

if ($termo !== '') {
    $termoLimpo = normalizar($termo);

    // 1. Busca por nome do produto
    foreach ($produtos as $p) {
        $nomeLimpo = normalizar($p['nome']);

        // Nome exatamente igual ao digitado: vai direto para o produto
        if ($nomeLimpo === $termoLimpo) {
            header("Location: " . $p['link']);
            exit();
        }

        if (strpos($nomeLimpo, $termoLimpo) !== false) {
            $resultados[] = $p;
        }
    }

    // 2. Se não encontrou pelo nome, busca por família olfativa ou categoria
    //    (ex: "unissex", "gourmand")
    if (empty($resultados)) {
        foreach ($produtos as $p) {
            $familiaLimpa = normalizar($p['familia']);
            $categoriaLimpa = normalizar($p['categoria']);

            if (strpos($familiaLimpa, $termoLimpo) !== false || strpos($categoriaLimpa, $termoLimpo) !== false) {
                $resultados[] = $p;
            }
        }
    }

    // REDIRECIONAMENTO DIRETO:
    // Se, depois das duas buscas, sobrar EXATAMENTE 1 perfume,
    // envia o usuário direto para a página dele.
    if (count($resultados) === 1) {
        header("Location: " . $resultados[0]['link']);
        exit();
    }
}

// Renderiza o cabeçalho
renderHeader("Pesquisa - " . htmlspecialchars($termo));
?>

<main class="search-container">
    <header class="search-header">
        <span class="subtitle">NOSSAS FRAGRÂNCIAS</span>
        <h1>Resultados da busca por: <em>"<?= htmlspecialchars($termo) ?>"</em></h1>
    </header>

    <section class="results-grid">
        <?php if (!empty($resultados)): ?>
            <?php foreach ($resultados as $item): ?>
                <div class="product-card">
                    <div class="card-tag"><?= htmlspecialchars($item['categoria']) ?></div>
                    <h2 class="product-title"><?= htmlspecialchars($item['nome']) ?></h2>
                    <p class="product-family"><?= htmlspecialchars($item['familia']) ?></p>

                    <div class="card-footer">
                        <span class="price"><?= htmlspecialchars($item['preco']) ?></span>
                        <a href="<?= htmlspecialchars($item['link']) ?>" class="view-btn" title="Ver este perfume">
                            Ver produto &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="no-results">
                <p>Nenhuma fragrância encontrada para "<strong><?= htmlspecialchars($termo) ?></strong>".</p>
                <a href="index.php" class="back-link">Voltar ao início</a>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php renderFooter(); ?>