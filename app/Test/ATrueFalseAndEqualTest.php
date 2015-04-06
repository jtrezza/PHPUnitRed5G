<?php

namespace Red5g\Test;


class ATrueFalseAndEqualTest extends \PHPUnit_Framework_TestCase
{

    public function testTrue()
    {
        $bool = true;
        $this->assertTrue($bool);
    }

    public function testFalse()
    {
        $bool = false;
        $this->assertFalse($bool);
    }

    public function testEquals()
    {
        $number = 42;
        $this->assertEquals(42, $number);
    }
}