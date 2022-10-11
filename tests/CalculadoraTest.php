<?php

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function testSoma()
    {
        $calc = new Calculadora();

        $proc = $calc->soma(1, 1);

        $this->assertEquals(2, $proc);
    }

    public function testSoma2()
    {
        $calc = new Calculadora();

        $proc = $calc->soma(-10, 5);

        $this->assertEquals(-5, $proc);
    }

    public function testSoma3()
    {
        $calc = new Calculadora();

        $proc = $calc->soma(50, 9);

        $this->assertEquals(59, $proc);
    }
}