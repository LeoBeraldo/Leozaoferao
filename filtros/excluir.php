<?php
ob_start();
require('../sheep_core/config.php');

$produto_id = filter_input(INPUT_POST, 'id_produto', FILTER_VALIDATE_INT);

if (isset($produto_id)) {
    $cart = new Ler();
    $cart->Leitura('carrinho', "WHERE id_produto = :id", "id={$produto_id}");

    if ($cart->getContaLinhas() > 0) {
        $excluir = new Excluir();
        $excluir->Remover('carrinho', "WHERE id_produto = :id", "id={$produto_id}");

        if ($excluir->getResultado()) {
            header("Location: " . HOME . "/index.php?sucesso=true");
            exit();
        } else {
            header("Location: " . HOME . "/index.php?erro=true");
            exit();
        }
    } else {
        // Produto não encontrado no carrinho
        header("Location: " . HOME . "/index.php?erro=true");
        exit();
    }
} else {
    header("Location: " . HOME . "/index.php?erro=true");
    exit();
}
?>
