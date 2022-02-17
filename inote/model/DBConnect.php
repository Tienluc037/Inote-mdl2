<?php
namespace App\model;
class DBConnect
{
    public $dsn;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=caseinote;charset=utf8";
        $this->username = "luc";
        $this->password = "123456@Abc";
    }

    public function connect()
    {
        try {
            return new \PDO($this->dsn,$this->username,$this->password);
        } catch(\PDOException $exception){
            die($exception->getMessage());
        }
    }
}