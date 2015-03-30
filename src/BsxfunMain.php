<?php
namespace YUti\Bsxfun;

class BsxfunMain
{
    public function __invoke(array $argv)
    {
        $a = range(1, 9);
        $b = array_map(function ($n) {
            return [$n];
        }, $a);

        $c = Bsxfun::bsxfun(function ($a, $b) {
            return $a * $b;
        }, $a, $b);
        echo json_encode($c) . "\n";
    }
}
