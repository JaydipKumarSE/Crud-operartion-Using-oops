<?php

require_once 'dbs.php';

class Signup
{

    private $connection;


    public function __construct()
    {
        $dc = new Dbs();
        $this->connection = $dc->getconnection();
    }


    public function entry()
    {

        header("content-Type:application/json");

        $data = json_decode(file_get_contents("php://input"), true);

        $name = $data['name'] ?? '';
        $email = $data['email'] ?? '';
        $mobile = $data['mobile'] ?? '';
        $location = $data['location'] ?? '';
        $password = $data['password'] ?? '';

        $hashed = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO users (name, email, mobile, location, password) VALUES ('$name', '$email', '$mobile', '$location', '$hashed')";

        if ($this->connection->query($sql) === True) {
            echo  json_encode([
                "Status" => "Success",
                "Message" => "The data successfully entered",

                "data" => [
                    "name" => $name,
                    "email" => $email,
                    "mobile" => $mobile,
                    "location" => $location,
                    "password" => $password
                ]
            ]);
        } else {
            echo json_encode([
                "Status" => "Error",
                "Message" => "The data not entered"
            ]);
        }
    }
}

$show = new Signup();
$show->entry();
