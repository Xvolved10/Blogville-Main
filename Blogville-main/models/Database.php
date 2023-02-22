<?php

class Database{
    protected $pdo = null;
    public function __construct()
    {
        try{
            $this->pdo = new PDO("mysql:host=" .HOST . ";dbname=" .DBNAME.";charset=utf8;",LOGIN,PASSWORD);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(Exception $ex){
            $ex->getMessage();
        }
    }
}
?>