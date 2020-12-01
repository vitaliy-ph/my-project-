<?php

namespace app\helpers;

/**
 * Class StringsHelper
 * @package app\helpers
 */
class StringsHelper
{
    /**
     * @param string $subject
     * @param string $symbols
     * @return string
     */
    public static function trim(string $subject, string $symbols = ''): string
    {
        return trim($subject, " \t\n\r\0\x0B{$symbols}");
    }

    /**
     * @param string $name
     * @param string $delimiter
     * @return string
     */
    public static function camelize(string $name, string $delimiter = '-'): string
    {
        $processedName = ucwords($name, $delimiter);
        return str_replace('-', '', $processedName);
    }
}