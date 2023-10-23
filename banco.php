<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\{Endereco, CPF, Funcionario};

$endereco1 = new Endereco('Maringá', 'Bairro das Palmeiras', 'Rua das Palmeiras', '130');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco1);
$primeiraConta = new ContaPoupanca($vinicius);
$primeiraConta->deposita(1000);
$primeiraConta->saca(100); // isso é ok



$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco1);
$segundaConta = new ContaCorrente($patricia);

$outra = new ContaCorrente(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco1));
unset($segundaConta);


echo $endereco1->rua;
