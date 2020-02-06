<?php

require 'carrinho.php';

$p1 = new Produto("Caderno", 30);
$p2 = new Produto("Livro", 200);
$p3 = new Produto("Caneta", 10);

$carrinho = new Carrinho();
$carrinho->adicionarProduto($p1);
$carrinho->adicionarProduto($p2);
$carrinho->adicionarProduto($p3);

$carrinho->exibirTotaisTela();

?>