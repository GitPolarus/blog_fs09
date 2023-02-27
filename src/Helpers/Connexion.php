<?php
namespace App\Helpers;

use PDO;

class Connexion
{
    const SERVER = "localhost";
    const USER = "root";
    const PASS = "";
    const DB = "blog_fs09";

    public static function getConnexion()
    {
        try {
            $conn = new PDO("mysql:host=" . self::SERVER . ";dbname=" . self::DB, self::USER, self::PASS);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Connexion successfull';
            return $conn;
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}