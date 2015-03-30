<?php

namespace YUti\Bsxfun;

class BsxfunTest extends \PHPUnit_Framework_TestCase
{
    private $times;

    public function setUp()
    {
        $this->times = function ($a, $b) {
            return $a * $b;
        };
    }

    public function testBsxfun01()
    {
        $a = 1;
        $b = 1;
        $expected = 1;
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun02()
    {
        $a = 1;
        $b = [1, 2];
        $expected = [1, 2];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun03()
    {
        $a = 1;
        $b = [[1], [3]];
        $expected = [[1], [3]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun04()
    {
        $a = 1;
        $b = [[1, 2], [3, 4]];
        $expected = [[1, 2], [3, 4]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun05()
    {
        $a = 1;
        $b = [[[1]], [[5]]];
        $expected = [[[1]], [[5]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun06()
    {
        $a = 1;
        $b = [[[1, 2]], [[5, 6]]];
        $expected = [[[1, 2]], [[5, 6]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun07()
    {
        $a = 1;
        $b = [[[1], [3]], [[5], [7]]];
        $expected = [[[1], [3]], [[5], [7]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun08()
    {
        $a = 1;
        $b = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $expected = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun09()
    {
        $a = [1, 2];
        $b = 1;
        $expected = [1, 2];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun10()
    {
        $a = [1, 2];
        $b = [1, 2];
        $expected = [1, 4];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun11()
    {
        $a = [1, 2];
        $b = [[1], [3]];
        $expected = [[1, 2], [3, 6]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun12()
    {
        $a = [1, 2];
        $b = [[1, 2], [3, 4]];
        $expected = [[1, 4], [3, 8]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun13()
    {
        $a = [1, 2];
        $b = [[[1]], [[5]]];
        $expected = [[[1, 2]], [[5, 10]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun14()
    {
        $a = [1, 2];
        $b = [[[1, 2]], [[5, 6]]];
        $expected = [[[1, 4]], [[5, 12]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun15()
    {
        $a = [1, 2];
        $b = [[[1], [3]], [[5], [7]]];
        $expected = [[[1, 2], [3, 6]], [[5, 10], [7, 14]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun16()
    {
        $a = [1, 2];
        $b = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $expected = [[[1, 4], [3, 8]], [[5, 12], [7, 16]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun17()
    {
        $a = [[1], [3]];
        $b = 1;
        $expected = [[1], [3]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun18()
    {
        $a = [[1], [3]];
        $b = [1, 2];
        $expected = [[1, 2], [3, 6]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun19()
    {
        $a = [[1], [3]];
        $b = [[1], [3]];
        $expected = [[1], [9]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun20()
    {
        $a = [[1], [3]];
        $b = [[1, 2], [3, 4]];
        $expected = [[1, 2], [9, 12]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun21()
    {
        $a = [[1], [3]];
        $b = [[[1]], [[5]]];
        $expected = [[[1], [3]], [[5], [15]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun22()
    {
        $a = [[1], [3]];
        $b = [[[1, 2]], [[5, 6]]];
        $expected = [[[1, 2], [3, 6]], [[5, 6], [15, 18]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun23()
    {
        $a = [[1], [3]];
        $b = [[[1], [3]], [[5], [7]]];
        $expected = [[[1], [9]], [[5], [21]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun24()
    {
        $a = [[1], [3]];
        $b = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $expected = [[[1, 2], [9, 12]], [[5, 6], [21, 24]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun25()
    {
        $a = [[1, 2], [3, 4]];
        $b = 1;
        $expected = [[1, 2], [3, 4]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun26()
    {
        $a = [[1, 2], [3, 4]];
        $b = [1, 2];
        $expected = [[1, 4], [3, 8]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun27()
    {
        $a = [[1, 2], [3, 4]];
        $b = [[1], [3]];
        $expected = [[1, 2], [9, 12]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun28()
    {
        $a = [[1, 2], [3, 4]];
        $b = [[1, 2], [3, 4]];
        $expected = [[1, 4], [9, 16]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun29()
    {
        $a = [[1, 2], [3, 4]];
        $b = [[[1]], [[5]]];
        $expected = [[[1, 2], [3, 4]], [[5, 10], [15, 20]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun30()
    {
        $a = [[1, 2], [3, 4]];
        $b = [[[1, 2]], [[5, 6]]];
        $expected = [[[1, 4], [3, 8]], [[5, 12], [15, 24]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun31()
    {
        $a = [[1, 2], [3, 4]];
        $b = [[[1], [3]], [[5], [7]]];
        $expected = [[[1, 2], [9, 12]], [[5, 10], [21, 28]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun32()
    {
        $a = [[1, 2], [3, 4]];
        $b = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $expected = [[[1, 4], [9, 16]], [[5, 12], [21, 32]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun33()
    {
        $a = [[[1]], [[5]]];
        $b = 1;
        $expected = [[[1]], [[5]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun34()
    {
        $a = [[[1]], [[5]]];
        $b = [1, 2];
        $expected = [[[1, 2]], [[5, 10]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun35()
    {
        $a = [[[1]], [[5]]];
        $b = [[1], [3]];
        $expected = [[[1], [3]], [[5], [15]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun36()
    {
        $a = [[[1]], [[5]]];
        $b = [[1, 2], [3, 4]];
        $expected = [[[1, 2], [3, 4]], [[5, 10], [15, 20]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun37()
    {
        $a = [[[1]], [[5]]];
        $b = [[[1]], [[5]]];
        $expected = [[[1]], [[25]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun38()
    {
        $a = [[[1]], [[5]]];
        $b = [[[1, 2]], [[5, 6]]];
        $expected = [[[1, 2]], [[25, 30]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun39()
    {
        $a = [[[1]], [[5]]];
        $b = [[[1], [3]], [[5], [7]]];
        $expected = [[[1], [3]], [[25], [35]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun40()
    {
        $a = [[[1]], [[5]]];
        $b = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $expected = [[[1, 2], [3, 4]], [[25, 30], [35, 40]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun41()
    {
        $a = [[[1, 2]], [[5, 6]]];
        $b = 1;
        $expected = [[[1, 2]], [[5, 6]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun42()
    {
        $a = [[[1, 2]], [[5, 6]]];
        $b = [1, 2];
        $expected = [[[1, 4]], [[5, 12]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun43()
    {
        $a = [[[1, 2]], [[5, 6]]];
        $b = [[1], [3]];
        $expected = [[[1, 2], [3, 6]], [[5, 6], [15, 18]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun44()
    {
        $a = [[[1, 2]], [[5, 6]]];
        $b = [[1, 2], [3, 4]];
        $expected = [[[1, 4], [3, 8]], [[5, 12], [15, 24]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun45()
    {
        $a = [[[1, 2]], [[5, 6]]];
        $b = [[[1]], [[5]]];
        $expected = [[[1, 2]], [[25, 30]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun46()
    {
        $a = [[[1, 2]], [[5, 6]]];
        $b = [[[1, 2]], [[5, 6]]];
        $expected = [[[1, 4]], [[25, 36]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun47()
    {
        $a = [[[1, 2]], [[5, 6]]];
        $b = [[[1], [3]], [[5], [7]]];
        $expected = [[[1, 2], [3, 6]], [[25, 30], [35, 42]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun48()
    {
        $a = [[[1, 2]], [[5, 6]]];
        $b = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $expected = [[[1, 4], [3, 8]], [[25, 36], [35, 48]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun49()
    {
        $a = [[[1], [3]], [[5], [7]]];
        $b = 1;
        $expected = [[[1], [3]], [[5], [7]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun50()
    {
        $a = [[[1], [3]], [[5], [7]]];
        $b = [1, 2];
        $expected = [[[1, 2], [3, 6]], [[5, 10], [7, 14]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun51()
    {
        $a = [[[1], [3]], [[5], [7]]];
        $b = [[1], [3]];
        $expected = [[[1], [9]], [[5], [21]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun52()
    {
        $a = [[[1], [3]], [[5], [7]]];
        $b = [[1, 2], [3, 4]];
        $expected = [[[1, 2], [9, 12]], [[5, 10], [21, 28]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun53()
    {
        $a = [[[1], [3]], [[5], [7]]];
        $b = [[[1]], [[5]]];
        $expected = [[[1], [3]], [[25], [35]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun54()
    {
        $a = [[[1], [3]], [[5], [7]]];
        $b = [[[1, 2]], [[5, 6]]];
        $expected = [[[1, 2], [3, 6]], [[25, 30], [35, 42]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun55()
    {
        $a = [[[1], [3]], [[5], [7]]];
        $b = [[[1], [3]], [[5], [7]]];
        $expected = [[[1], [9]], [[25], [49]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun56()
    {
        $a = [[[1], [3]], [[5], [7]]];
        $b = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $expected = [[[1, 2], [9, 12]], [[25, 30], [49, 56]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun57()
    {
        $a = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $b = 1;
        $expected = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun58()
    {
        $a = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $b = [1, 2];
        $expected = [[[1, 4], [3, 8]], [[5, 12], [7, 16]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun59()
    {
        $a = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $b = [[1], [3]];
        $expected = [[[1, 2], [9, 12]], [[5, 6], [21, 24]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun60()
    {
        $a = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $b = [[1, 2], [3, 4]];
        $expected = [[[1, 4], [9, 16]], [[5, 12], [21, 32]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun61()
    {
        $a = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $b = [[[1]], [[5]]];
        $expected = [[[1, 2], [3, 4]], [[25, 30], [35, 40]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun62()
    {
        $a = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $b = [[[1, 2]], [[5, 6]]];
        $expected = [[[1, 4], [3, 8]], [[25, 36], [35, 48]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun63()
    {
        $a = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $b = [[[1], [3]], [[5], [7]]];
        $expected = [[[1, 2], [9, 12]], [[25, 30], [49, 56]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }

    public function testBsxfun64()
    {
        $a = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $b = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        $expected = [[[1, 4], [9, 16]], [[25, 36], [49, 64]]];
        $actual = Bsxfun::bsxfun($this->times, $a, $b);
        $this->assertEquals($expected, $actual);
    }
}
