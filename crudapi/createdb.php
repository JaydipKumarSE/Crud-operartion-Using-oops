<?php

class Database
{
    private $connection;

    private $server_name = "localhost";
    private $user_name = "root";
    private $password = "";

    public function connect()
    {
        $this->connection = mysqli_connect(
            $this->server_name,
            $this->user_name,
            $this->password
        );

        if (!$this->connection) {
            die("Database connection failed: " . mysqli_connect_error());
        }
    }

    public function createDatabase()
    {
        $query = "CREATE DATABASE IF NOT EXISTS crudapi";

        if (mysqli_query($this->connection, $query)) {
            echo "Database successfully created <br>";
        } else {
            echo "Error Creating Database: " . mysqli_error($this->connection) . "<br>";
        }

        mysqli_select_db($this->connection, "crudapi");
    }

    public function createTable()
    {
        $query = "CREATE TABLE IF NOT EXISTS users (
            id INT PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(210) NOT NULL,
            email VARCHAR(255) NOT NULL,
            mobile VARCHAR(255),
            location VARCHAR(255),
            password VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if (mysqli_query($this->connection, $query)) {
            echo "Table successfully created <br>";
        } else {
            echo "Error Creating Table: " . mysqli_error($this->connection) . "<br>";
        }
    }

    public function close()
    {
        mysqli_close($this->connection);
    }
}


$db = new Database();

$db->connect();
$db->createDatabase();
$db->createTable();
$db->close();
