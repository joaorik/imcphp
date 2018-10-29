<?php

function imc($imc)
{
    if ($imc < 18.5) {
        $condicao = $imc . " Abaixo do peso";
    } else if ($imc >= 18.6 & $imc <= 24.9) {
        $condicao = $imc . " Peso ideal (parabéns)";
    } else if ($imc >= 25.0 & $imc <= 29.9) {
        $condicao = $imc . " Levemente acima do peso";
    } else if ($imc >= 30.0 & $imc <= 34.9) {
        $condicao = $imc . " Obesidade grau I";
    } else if ($imc >= 35.0 & $imc <= 39.9) {
        $condicao = $imc . " Obesidade grau II (severa)";
    } else {
        $condicao = $imc . " Obesidade grau III (mórbida)";
    }
    return $condicao;
}
