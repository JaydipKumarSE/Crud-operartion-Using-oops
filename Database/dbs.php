<?php


class Dbs
{
    private $connection;

    private $server_name = "localhost";
    private $user_name = "root";
    private $password = "";
    private $database_name = "crud";

    public function __construct()
    {
        $this->connection = mysqli_connect(
            $this->server_name,
            $this->user_name,
            $this->password,
            $this->database_name
        );

        if (!$this->connection) {
            die("Database connection failed: " . mysqli_connect_error());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

$db = new Dbs();

// echo "Successfully Connected";
