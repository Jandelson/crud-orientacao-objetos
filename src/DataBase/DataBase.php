<?php

namespace Crud\DataBase;

class DataBase extends \MySQLi
{
    public function __construct($host, $user, $passwd, $database)
    {
        $this->host = $host;
        $this->user = $user;
        $this->passwd = $passwd;
        $this->database = $database;

        parent::__construct($this->host, $this->user, $this->senha, $this->database);
    }
}
