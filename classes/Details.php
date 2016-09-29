<?php
// Define database connection constants

namespace debmego;
define('DB_HOST', 'localhost');
define('DB_USER', 'dmg_user');
define('DB_PASSWORD', 'debmegoCoimbatore14');
define('DB_NAME', 'dmg_database');

class Details
{
    public static $company_name = "wrubus";

    public static $website_name = "wrubus.in";

    public static function getDBC()
    {
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $dbc;
    }

    public static function getPDO()
    {
        $conn = new \PDO(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
        return $conn;
    }

    public static function getAdminEmail()
    {
        return "info@wrubus.in"; // This should be the email from your own domain
    }

    public static function getAdminPass()
    {
        return "wrubus.in@123"; // this is the password for the above email id
    }

    public static function getSMPTHostname()
    {
        return "mail.wrubus.in";
    }

    public static function getBaseUrl()
    {
        return 'http://wrubus.in/';
    }
}

?>
