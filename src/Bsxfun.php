<?php
namespace Yuti\Bsxfun;

class Bsxfun
{
    public static function bsxfun($f, $a, $b)
    {
        $da = self::depth($a);
        $db = self::depth($b);
        $a = self::newAxis($a, $db - $da);
        $b = self::newAxis($b, $da - $db);
        return self::bsxfunRec($f, $a, $b);
    }

    private static function depth($a)
    {
        return is_array($a) ? self::depth($a[0]) + 1 : 0;
    }

    private static function newAxis($a, $n)
    {
        for ($i = 0; $i < $n; ++$i) {
            $a = array($a);
        }
        return $a;
    }

    private static function bsxfunRec($f, $a, $b)
    {
        if (!is_array($a)) {
            return $f($a, $b);
        }

        if (count($a) == count($b)) {
            return array_map(function ($a, $b) use ($f) {
                return self::bsxfunRec($f, $a, $b);
            }, $a, $b);
        }

        if (count($a) == 1) {
            return array_map(function ($b) use ($f, $a) {
                return self::bsxfunRec($f, $a[0], $b);
            }, $b);
        }

        if (count($b) == 1) {
            return array_map(function ($a) use ($f, $b) {
                return self::bsxfunRec($f, $a, $b[0]);
            }, $a);
        }

        return 0;
    }
}
