<?php

require_once 'dbs.php';

class Login
{
    private $connection;

    public function __construct()
    {
        $dc = new Dbs();
        $this->connection = $dc->getconnection();
    }

    public function login()
    {

        header("content-Type:application/json");

        $data = json_decode(file_get_contents("php://input"), true);


        $email = $data['email'] ?? '';
        $password = $data['password'] ?? '';

        $sql = "SELECT email, password FROM users WHERE email = '$email'";
        $check = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($check) === 1) {

            $user = mysqli_fetch_assoc($check);

            if (password_verify($password, $user['password'])) {

                header("Location: welcome.php");
                exit();
            } else {
                echo "Wrong password";
            }
        } else {
            echo "User not found";
        }
    }
}

$result = new Login();
$result->login();
