<?php


class DB
{
    private $pdo;

    public function __construct()
    {
        $param = include_once (ROOT.'/config/db.php');
        $host = $param['host'];
        $user = $param['user'];
        $pass = $param['password'];
        $dbname = $param['dbname'];
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]) or die('error connection');
    }

    public  function query($query){
       // echo $query;
        return $this->pdo->query($query);
    }
}