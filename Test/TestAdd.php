<?php

class TestAdd extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function testAdd()
    {
        $a = 1;
        $b = 2;
        $c = $a+$b;
        $this->assertEquals(3,$c);



    }

}