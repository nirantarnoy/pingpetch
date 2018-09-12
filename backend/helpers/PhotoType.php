<?php

namespace backend\helpers;

class PhotoType
{
    const SAVING = 1;
    const FLOW = 2;
    private static $data = [
        1 => 'Slide Top',
        2 => 'About us',
        3 => 'Slogan',
    ];

    private static $dataobj = [
        ['id'=>1,'name' => 'Slide Top'],
        ['id'=>2,'name' => 'About us'],
        ['id'=>3,'name' => 'Slogan'],
    ];
    public static function asArray()
    {
        return self::$data;
    }
    public static function asArrayObject()
    {
        return self::$dataobj;
    }
    public static function getTypeById($idx)
    {
        if (isset(self::$data[$idx])) {
            return self::$data[$idx];
        }

        return 'Unknown Type';
    }
    public static function getTypeByName($idx)
    {
        if (isset(self::$data[$idx])) {
            return self::$data[$idx];
        }

        return 'Unknown Type';
    }
}
