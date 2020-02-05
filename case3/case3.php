<?php

#PARAMETROS VIA CONSTRUTOR

require 'produto.php';

$f1 = new Fabricante("Apple");

$p1 = new Produto('Iphone', 5000, $f1);

var_dump($p1);
?>