<?php

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    /**
     * @dataProvider somaDataProvider
     */
    public function testSoma($n1, $n2, $esperado)
    {
        $calc = new Calculadora();

        $proc = $calc->soma($n1, $n2);

        $this->assertEquals($esperado, $proc);
    }

    public function somaDataProvider()
    {
        return array(
            array(1, 1, 2),
            array(20, 10, 30),
            array(-100, 30, -70),
            array(10.5, 0.5, 11),
        );
    }
}