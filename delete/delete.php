<?php

require_once 'dbs.php';

class Remove
{
    private $connection;

    public function __construct()
    {
        $dc = new Dbs();
        $this->connection = $dc->getConnection();
    }

    public function delete()
    {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {

            $id = $_GET['id'];

            $del = "DELETE FROM customer WHERE id = $id";

            if (mysqli_query($this->connection, $del)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Deleting Error: " . mysqli_error($this->connection);
            }
        } else {
            echo "Invalid ID";
        }
    }
}

$del = new Remove();
$del->delete();
