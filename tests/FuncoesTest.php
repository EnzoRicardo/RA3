<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/funcoes.php';

class FuncoesTest extends TestCase
{
    public function testFatorialDeCinco()
    {
        $this->assertEquals(12, fatorial(5));
    }

    public function testFatorialDeZero()
    {
        $this->assertEquals(1, fatorial(0));
    }

    public function testFatorialComNumeroNegativo()
    {
        $this->expectException(InvalidArgumentException::class);

        fatorial(-1);
    }
}