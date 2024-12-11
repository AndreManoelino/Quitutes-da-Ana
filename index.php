<?php
// Inicializar a sessão
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$produtos = [
    ["id" => 1, "nome" => "Florzinha de Leite Condensado Recheada", "descricao" => "Florzinha de Leite Condensado Recheada", "preco" => 20.00, "quantidade" => 50, "categoria" => "Doces", "imagem" => "assets/imagens/florzinha_recheada.jpg"],
    ["id" => 2, "nome" => "Amendoin de  Cebola e Salsa", "descricao" => "Amendoin Cebola e Salsa", "preco" => 18.00, "quantidade" => 50, "categoria" => "Salgados", "imagem" => "assets/imagens/amendoin_cebola_salsa.jpg"],
    ["id" => 3, "nome" => "Amendoin de  Churrasco", "descricao" => "Amendoin Churrasco", "preco" => 20.00, "quantidade" => 50, "categoria" => "Salgados", "imagem" => "assets/imagens/amendoin_churrasco.jpg"],
    ["id" => 4, "nome" => "Amendoin de Pimenta", "descricao" => "Amendoin de Pimenta", "preco" => 18.00, "quantidade" => 50, "categoria" => "Salgados", "imagem" => "assets/imagens/amendoin_pimenta.jpg"],
    ["id" => 5, "nome" => "Amendoin Natural", "descricao" => "Amendoin Natural", "preco" => 18.00, "quantidade" => 50, "categoria" => "Salgados", "imagem" => "assets/imagens/amendoin_natural.jpg"],
    ["id" => 6, "nome" => "Salgadinho de Bacon", "descricao" => "Salgadinho de Bacon", "preco" => 20.00, "quantidade" => 50, "categoria" => "Salgados", "imagem" => "assets/imagens/bacon.jpg"],
    ["id" => 7, "nome" => "Casadinho Bambolê de Ninho", "descricao" => "Casadinho Bambolê de Ninho", "preco" => 20.00, "quantidade" => 50, "categoria" => "Doces", "imagem" => "assets/imagens/bambole_ninho.jpg"],
    ["id" => 8, "nome" => "Casadinho De  Nata", "descricao" => "Casadinho Nata", "preco" => 20.00, "quantidade" => 50, "categoria" => "Doces", "imagem" => "assets/imagens/casadinho_nata.jpg"],
    ["id" => 9, "nome" => "Cebola e Salsa", "descricao" => "Cebola e Salsa", "preco" => 20.00, "quantidade" => 50, "categoria" => "Salgados", "imagem" => "assets/imagens/cebola_salsa.jpg"],
    ["id" => 10, "nome" => "Costelinha  e Limão", "descricao" => "Costelinha  e Limão", "preco" => 20.00, "quantidade" => 50, "categoria" => "Salgados", "imagem" => "assets/imagens/costelinha_limao.jpg"],
    ["id" => 11, "nome" => "Amendoin Crocante ", "descricao" => " Amendoin Crocante", "preco" => 18.00, "quantidade" => 50, "categoria" => "Salgados", "imagem" => "assets/imagens/crocante.jpg"],
    ["id" => 12, "nome" => "Delicias de Minas Choco Festa", "descricao" => "Delicias de Minas Choco Festa", "preco" => 24.00, "quantidade" => 50, "categoria" => "Doces", "imagem" => "assets/imagens/delicias_choco_festa.jpg"],
    ["id" => 13, "nome" => "Delicias Minas Ouro Preto", "descricao" => "Delicias Minas", "preco" => 24.00, "quantidade" => 50, "categoria" => "Doces", "imagem" => "assets/imagens/delicias_minas.jpg"],
    ["id" => 14, "nome" => "Delicias Minas Prestigio", "descricao" => "Delicias minas Prestigio ", "preco" => 24.00, "quantidade" => 50, "categoria" => "Doces", "imagem" => "assets/imagens/delicias_prestigio.jpg"],
    ["id" => 15, "nome" => "Delicias Minas Prestoco", "descricao" => "Delicias Minas Prestoco", "preco" => 24.00, "quantidade" => 50, "categoria" => "Doces", "imagem" => "assets/imagens/delicias_prestoco.jpg"],
    ["id" => 16, "nome" => "Delicias Minas Rosca de Brigadeiro", "descricao" => "Delicias Minas Rosca de Brigadeiro", "preco" => 24.00, "quantidade" => 50, "categoria" => "Doces", "imagem" => "assets/imagens/delicias_rosca_brigadeiro.jpg"],
    ["id" => 17, "nome" => "Biscoito de Flocos sem Recheio", "descricao" => "Biscoito de Flocos sem Recheio", "preco" => 20.00, "quantidade" => 50, "categoria" => "Biscoito", "imagem" => "assets/imagens/flocos.jpg"],
    ["id" => 18, "nome" => "Casadinho de Florzinha Recheada", "descricao" => "Florzinha Recheada", "preco" => 20.00, "quantidade" => 50, "categoria" => "Casadinhos", "imagem" => "assets/imagens/florzinha_recheada.jpg"],
    ["id" => 19, "nome" => " Biscoito de Florzinha sem Recheio ", "descricao" => "Florzinha", "preco" => 20.00, "quantidade" => 50, "categoria" => "Biscoito", "imagem" => "assets/imagens/florzinha.jpg"],
    ["id" => 20, "nome" => "Paçoca com Chocloate preto e branco", "descricao" => "Paçoca com chocolcate preto e branco", "preco" => 22.00, "quantidade" => 50, "categoria" => "Doces", "imagem" => "assets/imagens/paçoca.jpg"],
    ["id" => 21, "nome" => "Salgadinho de Picanha", "descricao" => "Salgadinho de Picanha", "preco" => 20.00, "quantidade" => 50, "categoria" => "Salgadinho", "imagem" => "assets/imagens/picanha.jpg"],
    ["id" => 22, "nome" => "Salgadinho de Pimenta Mexicana", "descricao" => "Salgadinho de Pimenta Mexicana", "preco" => 20.00, "quantidade" => 50, "categoria" => "Salgadinho", "imagem" => "assets/imagens/pimenta_mexicana.jpg"],
    ["id" => 23, "nome" => "Salgadinho de Pizza", "descricao" => "Salgadinho de Pizza", "preco" => 20.00, "quantidade" => 50, "categoria" => "Salgadinho", "imagem" => "assets/imagens/pizza.jpg"],
    ["id" => 24, "nome" => "Casadinho Romeu com Coco", "descricao" => "Casadinho romeu com Coco", "preco" => 20.00, "quantidade" => 50, "categoria" => "Casadinhos", "imagem" => "assets/imagens/romeu_coco.jpg"],
    ["id" => 25, "nome" => "Casadinho rosquinha de Nata", "descricao" => "Casadinho Rosquinha de Nata", "preco" => 20.00, "quantidade" => 50, "categoria" => "Casadinhos", "imagem" => "assets/imagens/rosquinha_nata.jpg"],
    ["id" => 26, "nome" => "Trufa Diversos Sabores", "descricao" => "Trufas Diversos Sabores", "preco" => 32.00, "quantidade" => 50, "categoria" => "Trufas", "imagem" => "assets/imagens/trufas.jpg"],
    ["id" => 27, "nome" => "Caixa de som KTS Bluetooth com Led (código 3606)", "descricao" => "Caixa de som KTS Bluetooth com Led (código 3606)", "preco" => 289.00, "quantidade" => 50, "categoria" => "Equipmanento de Som", "imagem" => "assets/imagens/caixa_som.jpg"],
    ["id" => 28, "nome" => "Potes de Vidro refratário hermético 03 peças (Azul e Vermelho) Código(3299)", "descricao" => "Potes de Vidro refratário hermético 03 peças (Azul e Vermelho) Código(3299)Jogo composto por 01 pote 🫙: 840ml 01 pote 🫙: 570ml 01 pote 🫙: 330ml  Pote pode ser levado ao freezer e ao forno ! ", "preco" => 129.90, "quantidade" => 50, "categoria" => "Peças de Cozinha", "imagem" => "assets/imagens/vasilha_vidro.jpg"],
    ["id" => 29, "nome" => "Jogo de xícara de chá Medina 180ml lilás (código 3731)", "descricao" => "Jogo de xícara de chá Medina 180ml lilás (código 3731)", "preco" => 115.00, "quantidade" => 50, "categoria" => "Xícaras", "imagem" => "assets/imagens/xicara.jpg"],
    ["id" => 30, "nome" => "Canecas Personalizadas (código 3697)", "descricao" => "Canecas Personalizadas", "preco" => 30.00, "quantidade" => 50, "categoria" => "Caneca Personalizada", "imagem" => "assets/imagens/caneca1.jpg"],
    ["id" => 31, "nome" => "Canecas Personalizadas (código 3697)", "descricao" => "Canecas Personalizadas", "preco" => 30.00, "quantidade" => 50, "categoria" => "Caneca Personalizada", "imagem" => "assets/imagens/caneca2.jpg"],
    ["id" => 32, "nome" => "Canecas Personalizadas (código 3697)", "descricao" => "Canecas Personalizadas", "preco" => 30.00, "quantidade" => 50, "categoria" => "Caneca Personalizada", "imagem" => "assets/imagens/caneca3.jpg"],
    ["id" => 33, "nome" => "Canecas Personalizadas (código 3697)", "descricao" => "Canecas Personalizadas", "preco" => 30.00, "quantidade" => 50, "categoria" => "Caneca Personalizada", "imagem" => "assets/imagens/caneca4.jpg"],
    ["id" => 34, "nome" => "Canecas Personalizadas (código 3697)", "descricao" => "Canecas Personalizadas", "preco" => 30.00, "quantidade" => 50, "categoria" => "Caneca Personalizada", "imagem" => "assets/imagens/caneca5.jpg"],
    ["id" => 35, "nome" => "Canecas Personalizadas (código 369 )", "descricao" => "Canecas Personalizadas", "preco" => 30.00, "quantidade" => 50, "categoria" => "Caneca Personalizada", "imagem" => "assets/imagens/caneca6.jpg"],
    ["id" => 36, "nome" => "Canecas Personalizadas (código 3697)", "descricao" => "Canecas Personalizadas", "preco" => 30.00, "quantidade" => 50, "categoria" => "Caneca Personalizada", "imagem" => "assets/imagens/caneca7.jpg"],
    ["id" => 37, "nome" => "Canecas Personalizadas (código 3697)", "descricao" => "Canecas Personalizadas", "preco" => 30.00, "quantidade" => 50, "categoria" => "Caneca Personalizada", "imagem" => "assets/imagens/caneca8.jpg"],
    ["id" => 38, "nome" => "Canecas Personalizadas (código 3697)", "descricao" => "Canecas Personalizadas", "preco" => 30.00, "quantidade" => 50, "categoria" => "Caneca Personalizada", "imagem" => "assets/imagens/caneca9.jpg"],
];

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}
$carrinho = &$_SESSION['carrinho'];


function buscarProdutoPorId($id, $produtos) {
    foreach ($produtos as $produto) {
        if ($produto['id'] === $id) {
            return $produto;
        }
    }
    return null;
}

function adicionarAoCarrinho($idProduto, $produtos, &$carrinho) {
    $produto = buscarProdutoPorId($idProduto, $produtos);

    if ($produto) {

        if (!isset($carrinho[$idProduto])) {
          
            $estoque = isset($produto['quantidade']) && is_numeric($produto['quantidade']) ? $produto['quantidade'] : 0;
            $carrinho[$idProduto] = [
                "id" => $produto['id'],
                "nome" => $produto['nome'],
                "preco" => $produto['preco'],
                "quantidade" => 1,  
                "estoque" => $estoque, 
            ];
        } else if ($carrinho[$idProduto]['quantidade'] < $produto['quantidade']) {

            $carrinho[$idProduto]['quantidade']++;
            $carrinho[$idProduto]['estoque'] = isset($produto['quantidade']) ? $produto['quantidade'] : $carrinho[$idProduto]['estoque'];
        }
    }
}


function removerDoCarrinho($idProduto, &$carrinho) {
    if (isset($carrinho[$idProduto])) {
        unset($carrinho[$idProduto]); 
        header('Location: index.php?page=cart');  
        exit;  
    }
}


function limparCarrinho() {
    $_SESSION['carrinho'] = [];
}

if (isset($_GET['action'], $_GET['id'])) {
    $idProduto = (int)$_GET['id'];
    $action = $_GET['action'];

    if ($action === 'add') {
        adicionarAoCarrinho($idProduto, $produtos, $carrinho);
    } elseif ($action === 'remove') {
        removerDoCarrinho($idProduto, $carrinho);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['page']) && $_GET['page'] === 'checkout') {
    $nome = htmlspecialchars($_POST['nome']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $pagamento = htmlspecialchars($_POST['pagamento']);
    $entrega = isset($_POST['entrega']) ? 5.00 : 0.00;

    $total = array_reduce($carrinho, fn($carry, $item) => $carry + ($item['preco'] * $item['quantidade']), 0);
    $total += $entrega;

    $mensagem = "*Pedido Loja da Ana*\nCliente: $nome\nEndereço: $endereco\nPagamento: $pagamento\nItens:\n";
    foreach ($carrinho as $item) {
        $mensagem .= "- {$item['nome']} (x{$item['quantidade']}) - R$ " . number_format($item['preco'] * $item['quantidade'], 2, ',', '.') . "\n";
    }
    $mensagem .= "Total: R$ " . number_format($total, 2, ',', '.');

    $mensagemEncoded = urlencode($mensagem);
    header("Location: https://api.whatsapp.com/send?phone=5531991708075&text=$mensagemEncoded");

    // Limpar o carrinho após finalizar a compra
    $_SESSION['carrinho'] = [];

    exit;
}

$page = $_GET['page'] ?? 'home';


ob_start();
var_dump($carrinho);  
$debugOutput = ob_get_clean(); 


file_put_contents('debug.log', $debugOutput, FILE_APPEND);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos diversos da Ana</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>

    <div class="endereco">
        <br>Telefone: (31) 99170-8075 ou (31) 99107-0255<br>
        Rua Álvaro Rodrigues de Alvarenga, 70 <br> Cidade Paulo Camilo, Betim
    </div>

    <header>
        <h1>Quitutes da Ana</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="index.php?page=cart">Carrinho</a>
            <a href="index.php?page=checkout">Finalizar Compra</a>
        </nav>
    </header>

    <main>
        <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        switch ($page) {
            case 'cart':
                ?>
                <h2>Itens no Carrinho</h2>
                <?php if (empty($carrinho)): ?>
                    <p>Seu carrinho está vazio!</p>
                <?php else: ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Preço Unitário</th>
                                <th>Subtotal</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($carrinho as $item): ?>
                                <tr>
                                    <td><?= htmlspecialchars($item['nome']) ?></td>
                                    <td><?= $item['quantidade'] ?> (Estoque: <?= $item['estoque'] ?? 'Indefinido' ?>)</td>
                                    <td>R$ <?= number_format($item['preco'], 2, ',', '.') ?></td>
                                    <td>R$ <?= number_format($item['preco'] * $item['quantidade'], 2, ',', '.') ?></td>
                                    <td><a href="index.php?page=cart&action=remove&id=<?= $item['id'] ?>">Remover</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="index.php?page=checkout">Finalizar Compra</a>
                <?php endif; ?>
                <?php
                break;

            case 'checkout':
                ?>
                <h2>Finalizar Compra</h2>
                <form method="post" action="index.php?page=checkout">
                    <label>Nome: <input type="text" name="nome" required></label><br>
                    <label>Endereço: <input type="text" name="endereco" required></label><br>
                    <label>Forma de Pagamento:
                        <select name="pagamento">
                            <option value="Pix">Pix</option>
                            <option value="Cartão">Cartão</option>
                        </select>
                    </label><br>
                    <label><input type="checkbox" name="entrega"> Entrega (R$ 5,00)</label><br>
                    <button type="submit">Enviar Pedido</button>
                </form>
                <?php
                break;

            case 'home':
            default:
                ?>
                <h2>Lista de Produtos Diversos</h2>
                <div class="produtos">
                    <?php foreach ($produtos as $produto): ?>
                        <div class="produto">
                            <img src="<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>" width="100" height="100">
                            <h3><?= htmlspecialchars($produto['nome']) ?></h3>
                            <p>Preço: R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                            <a href="index.php?page=cart&action=add&id=<?= $produto['id'] ?>">Adicionar ao Carrinho</a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php
                break;
        }
        ?>
    </main>
        
    <footer>
        <p>© Loja da Ana. Para mais informações ligue (31) 99170-8075.</p>
        <a href="https://api.whatsapp.com/send?phone=5531991708075&text=Ol%C3%A1%20quero%20fazer%20um%20pedido%20na%20Loja%20da%20Ana">
            <img src="assets/imagens/zap.jpg" class="whatsapp-icon" alt="WhatsApp">
        </a>
    </footer>
</body>
</html>
