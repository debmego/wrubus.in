<?php
/**
 * Created by Sudipta Deb
 * Date: 13/12/15
 * Time: 6:52 AM
 */

namespace debmego;


class AutoLoader
{
    public static function loadAllClasses($dirpath = '')
    {
        $dirname = dirname(__FILE__);
        if ($dirpath != '') {
            $dirpath = $dirname . DIRECTORY_SEPARATOR . $dirpath;
        }
        if (is_dir($dirname)) {
            $files = glob($dirname . DIRECTORY_SEPARATOR . '*.php');
            if (!empty($files)) {
                foreach ($files as $file) {
                    require_once $file;
                }
            }
        }
    }

    /**
     * @param $classname
     */
    public static function loadClass($classname)
    {
        //Can't use __DIR__ as it's only in PHP 5.3+
        $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . $classname;
        if (is_readable($filename)) {
            require_once $filename;
        }
    }
}