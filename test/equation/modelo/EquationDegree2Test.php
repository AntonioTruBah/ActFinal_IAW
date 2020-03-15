<?php

namespace equation\modelo;

use PHPUnit\Framework\TestCase;

class EquationDegree2Test extends TestCase
{

    public function testCalculate()
    {
        $tester = new EquationDegree2(2,3,5);

        $x0y5 = $tester->calculate(0);
        $this->assertEquals(5,$x0y5);

        $x1y10 = $tester->calculate(1);
        $this->assertEquals(10,$x1y10);

        $x2y19 = $tester->calculate(2);
        $this->assertEquals(19,$x2y19);

        $x3y32 = $tester->calculate(3);
        $this->assertEquals(32,$x3y32);
    }
}
