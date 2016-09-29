<?php

/**
 * Created by Sudipta Deb
 * Date: 25/9/15
 * Time: 7:58 AM
 */
class Basic
{

    public static function print_pre_r($arr)
    {
        echo '<pre>';
        var_dump($arr);
        echo '</pre>';
    }

    public static function addScript($script)
    {
        echo '<script>' . $script . '</script>';
    }

    public static function addAssetLink($string)
    {
        self::safe_echo(\debmego\Details::getBaseUrl() . '/assets/' . $string);
    }

    public static function safe_echo($var)
    {
        if (isset($var) && !empty($var)) {
            echo $var;
        }
    }

    public static function safe_var($var)
    {
        if (isset($var) && !empty($var)) {
            return $var;
        } else {
            return '';
        }
    }

}

