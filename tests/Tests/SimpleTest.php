<?php

class SimpleTest
    extends \PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        $this->assertEquals(
            4,
            \App\Math::sum(2, 2)
        );
        $this->assertEquals(
            0,
            \App\Math::sum(2, -2)
        );
    }

}