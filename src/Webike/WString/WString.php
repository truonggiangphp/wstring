<?php

namespace Webike\WString;

class WString
{
    /**
     * Replace the last occurrence of a string
     *
     * @param string $search
     * @param string $replace
     * @param string $subject
     *
     * @return string
     *
     */
    public static function strReplaceLast($search, $replace, $subject)
    {
        $lengthOfSearch = strlen($search);
        $positionOfSearch = strrpos($subject, $search);
        if ($positionOfSearch !== false) {
            $subject = substr_replace($subject, $replace, $positionOfSearch, $lengthOfSearch);
        }
        return $subject;
    }

    /**
     * Checks whether a string starts with given chars
     *
     * @param string $haystack
     * @param string $needle
     *
     * @return bool starts_with
     *
     */
    public static function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    /**
     * Checks whether a string ends with given chars
     *
     * @param string $haystack
     * @param string $needle
     *
     * @return bool ends_with
     *
     */
    public static function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }

    /**
     * Find the position of the Xth occurrence of a substring in a string
     * @param $haystack
     * @param $needle
     * @param $number integer > 0
     * @return int
     */
    public static function strposX($haystack, $needle, $number)
    {
        if ($number == '1') {
            return strpos($haystack, $needle);
        } elseif ($number > '1') {
            return strpos($haystack, $needle, self::strposX($haystack, $needle, $number - 1) + strlen($needle));
        } else {
            return error_log('Error: Value for parameter $number is out of range');
        }
    }

    /**
     * Replace accented characters in string by non-accented
     *
     * @param string $str
     *
     * @return string $string without accents
     *
     * @todo To be really hard tested for reliability ...
     */
    public static function removeAccents($str)
    {
        return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), utf8_decode('aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY'));
    }
}
