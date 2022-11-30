<?php

namespace Staditek\App\Core;
// class Database
// {
//     public $conn = null;
//     protected $username = 'root';
//     protected $password = 'root';
//     protected $dbname = 'staditek';
//     protected $hostname = 'localhost';

//     public static function setConnection(){
//         self::$conn = new \PDO{
//             "mysql:host".self::$hostname.";dbname=".
//             self::$dbname,
//             self::$username,
//             self::$password
//         };
//         self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//     }
// }
class Database
{
    public static $conn = null;
    protected static $username = 'root';
    protected static $password = '';
    protected static $hostname = 'localhost';
    protected static $dbname = 'akun';
    //protected dan public bisa langsung dipanggil turunannya 
    //private digunakan diri sendiri 

    public function __constructor()
    // otomatis dipanggil
    {
        //$db2 = new Database;
        // $db2->setConnection();
        Database::setConnection();
    }

    public static function setConnection()
    {
        // cara lain sama mysqli dan lebih aman menggunakan preoare statement 
        self::$conn = new \PDO(
            "mysql:host=" . self::$hostname . ";dbname=" .
                self::$dbname,
            self::$username,
            self::$password
        );

        self::$conn->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }
    public function setConnection2()
    {
        self::$conn = new \PDO(
            "mysql:host=" . self::$hostname . ";dbname=" .
                self::$dbname,
            self::$username,
            self::$password
        );
        return self::$conn;

        // self::$conn->setAttribute(
        //     \PDO::ATTR_ERRMODE,
        //     \PDO::ERRMODE_EXCEPTION
        // );
    }
}

// try {
//     $db = Database::setConnection();
//     // $db2 = new Database;
//     // $db2 ->setConnection2();
//     echo "test";
// } catch (\Throwable $th) {
//     echo $th->getMessage();
// }
