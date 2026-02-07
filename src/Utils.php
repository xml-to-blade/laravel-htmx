<?php

namespace XmlBlade\LaravelHtmx;

class Utils
{
    public static function containsANonNullableElement(array $arr): bool
    {
        return count($arr) !== count(array_filter($arr, 'is_null'));
    }
}
