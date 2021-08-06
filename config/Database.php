<?php

namespace Config;

class Database
{
    private $databaseInstance = null;
    private $conn = null;
    private $data = [
        'server' => 'localhost:3306',
        'username' => 'root',
        'password' => '123456',
        'database' => 'belleza-project'
    ];

    function __construct()
    {
        if ($this->databaseInstance == null) {
            $this->databaseInstance = $this;
            return $this->databaseInstance;
        }

        return $this->databaseInstance;
    }

    function connect()
    {
        if ($this->conn == null) {
            $env = $this->data;
            $this->conn = mysqli_connect($env['server'], $env['username'], $env['password'], $env['database']);
            if (!$this->conn) {
                return null;
            }
        }

        return $this->conn;
    }

    function getResult($query)
    {
        $data = mysqli_query($this->conn, $query);
        return $data;
    }
}
