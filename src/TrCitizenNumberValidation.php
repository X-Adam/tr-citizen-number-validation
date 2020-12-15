<?php

namespace XAdam;

class TrCitizenNumberValidation
{
    protected static $cache = array();

    public static function validate($citizen_number)
    {
        if (isset(static::$cache[$citizen_number])) {
            return static::$cache[$citizen_number];
        }

        if (!preg_match('/^[1-9]{1}[0-9]{9}[0,2,4,6,8]{1}$/', $citizen_number)) {
            return static::$cache[$citizen_number] = false;
        }

        $array = array_map(function ($value) {
            return intval($value);
        }, str_split($citizen_number));

        $oddNumber = $array[0] + $array[2] + $array[4] + $array[6] + $array[8];
        $evenNumber = $array[1] + $array[3] + $array[5] + $array[7];
        $digit10 = ($oddNumber * 7 - $evenNumber) % 10;
        $total = ($oddNumber + $evenNumber + $array[9]) % 10;

        if ($digit10 !== $array[9] || $total !== $array[10]) {
            return static::$cache[$citizen_number] = false;
        }

        return static::$cache[$citizen_number] = true;
    }
}
