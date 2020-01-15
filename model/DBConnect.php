<?php


namespace Note;


use PDO;

class DBConnect
{
public $dsn;
public $username;
public $password;
public function __construct($dsn,$username,$password)
{
    $this->dsn = $dsn;
    $this->username = $username;
    $this->password = $password;
}
public function connect(){
    return new PDO($this->dsn,$this->username,$this->password);
}
}