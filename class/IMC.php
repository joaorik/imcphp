<?php

class IMC
{
    public $imc;
    public $nome;
    public $sexo;
    public $idade;
    public $altura;
    public $peso;
    public $atividade;

    public function __construct()
    {

    }

    public function pegaDados($post)
    {
//        var_dump($post);
        $this->setNome(isset($post['nome']));
        $this->setSexo(isset($post['sexo']));
        $this->setIdade(isset($post['idade']));
        $this->setAltura(isset($post['altura']));
        $this->setPeso(isset($post['peso']));
        $this->setAtividade(isset($post['atividade']));
    }

    public function getImc()
    {
        if ($this->altura && $this->peso) {
            $imc = round($this->peso / ($this->altura * $this->altura), 2);
            return $this->calculaIMC($imc);
        }
        return "Não foi possível calcular";
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getAtividade()
    {
        return $this->atividade;
    }

    public function setAtividade($atividade)
    {
        $this->atividade = $atividade;
    }

    public function calculaIMC($imc)
    {
        if ($imc < 18.5) {
            $condicao = $imc . " Abaixo do peso";
        } else if ($imc >= 18.6 & $imc <= 24.9) {
            $condicao = $imc . "Peso ideal (parabéns)";
        } else if ($imc >= 25.0 & $imc <= 29.9) {
            $condicao = $imc . "Levemente acima do peso";
        } else if ($imc >= 30.0 & $imc <= 34.9) {
            $condicao = $imc . "Obesidade grau I";
        } else if ($imc >= 35.0 & $imc <= 39.9) {
            $condicao = $imc . "Obesidade grau II (severa)";
        } else {
            $condicao = $imc . "Obesidade grau III (mórbida)";
        }
        return $condicao;
    }

}
