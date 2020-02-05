<?php

#CLASSE 
require 'produto.php';

$p1 = new Produto();
$p1->setNome("Carteira de Couro");
echo ($p1->getNome());

$p1 = new Produto();
$p1->setValor(300);
echo ($p1->getValor());

?>