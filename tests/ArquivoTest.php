<?php

use PHPUnit\Framework\TestCase;

class ArquivoTest extends TestCase
{
    public function testInclude()
    {
        $this->assertTrue(
            file_exists('config.php')
        );
    }
}