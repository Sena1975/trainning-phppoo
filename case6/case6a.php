<?php

require 'conta.php';

$c1 = new Conta("123", "09098767", 1000);
//$c1->depositar(4500);

echo $c1->getDetalhes();

?>