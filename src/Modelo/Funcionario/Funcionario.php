<?php

namespace Alura\Banco\Modelo;

abstract class Funcionario extends Pessoa {

    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo 'Aumento deve ser positivo';
            return;
        }

        $this->salario += $valorAumento;
    }
}
