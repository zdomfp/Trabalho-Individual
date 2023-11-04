<?php
require "Conta.php";
require "Cliente.php";

$conta = new Conta("171","Anderson Mirô","113,00");
$cliente = new Cliente("00001","Anderson Mirô","14526789",$conta);


echo "---------------------".PHP_EOL;
echo $cliente->exibirConta()->exibirCodigo();