<?php

use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{
    public function testExpectNomeCompleto()
    {
        $this->expectOutputString('Gabriel Lucas');

        $usuario = new Usuario();
        $usuario->setNome('Gabriel');
        $usuario->setSobrenome('Lucas');
        echo $usuario->getNomeCompleto();
    }
}