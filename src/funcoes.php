<?php

function fatorial(int $numero): int
{
    if ($numero < 0) {
        throw new InvalidArgumentException("Número não pode ser negativo");
    }

    if ($numero === 0 || $numero === 1) {
        return 1;
    }

    $resultado = 1;

    for ($i = 2; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}