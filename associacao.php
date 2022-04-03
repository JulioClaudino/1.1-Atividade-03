<?php

require_once 'Produto.php';
require_once 'Fabricante.php';

$produto = new Produto("Celular", 450, 1540,);
$fabricante = new Fabricante("Drogendoy", "tiradentes", "aprovado");

echo "A descrição do pruduto é {$produto->getDescricao()} e seu fabricante é o {$fabricante->getNome()}";