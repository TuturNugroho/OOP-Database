<?php
//require_once '../database.php';
namespace Staditek\App\Core;

class Akun extends Database
{
    public function all()
    {
        $conn =  Database::setConnection();
        $statement = self::$conn->prepare("select * from users");
        // var_dump($conn);     
        $statement->execute();
        // print_r($statement);

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}
