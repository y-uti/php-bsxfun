<?php
namespace Yuti\Bsxfun;

class Bsxfun
{
    public static function bsxfun($f, $a, $b)
    {
        $da = self::depth($a);
        $db = self::depth($b);
        return self::bsxfunRec($f, $a, $b, $da, $db);
    }

    private static function depth($a)
    {
        return is_array($a) ? self::depth($a[0]) + 1 : 0;
    }

    private static function bsxfunRec($f, $a, $b, $da, $db)
    {
        if ($da < $db) {
            return array_map(function ($b) use ($f, $a, $da, $db) {
                return self::bsxfunRec($f, $a, $b, $da, $db - 1);
            }, $b);
        }

        if ($da > $db) {
            return array_map(function ($a) use ($f, $b, $da, $db) {
                return self::bsxfunRec($f, $a, $b, $da - 1, $db);
            }, $a);
        }

        return self::bsxfunRec2($f, $a, $b, $da);
    }

    private static function bsxfunRec2($f, $a, $b)
    {
        if (!is_array($a)) {
            return $f($a, $b);
        }

        if (count($a) == count($b)) {
            return array_map(function ($a, $b) use ($f) {
                return self::bsxfunRec2($f, $a, $b);
            }, $a, $b);
        }

        if (count($a) == 1) {
            return array_map(function ($b) use ($f, $a) {
                return self::bsxfunRec2($f, $a[0], $b);
            }, $b);
        }

        if (count($b) == 1) {
            return array_map(function ($a) use ($f, $b) {
                return self::bsxfunRec2($f, $a, $b[0]);
            }, $a);
        }

        return 0;
    }
}
