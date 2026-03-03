<?php

require_once 'dbs.php';

class View
{
    private $connection;

    public function __construct()
    {
        $dc = new Dbs();
        $this->connection = $dc->getconnection();
    }

    public function show()
    {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {

            $id = (int) $_GET['id']; 

 
            $sh = "SELECT * FROM customer WHERE id = $id";

            $check = mysqli_query($this->connection, $sh);

          

            if (mysqli_num_rows($check) == 1) {

                $rows = mysqli_fetch_assoc($check);

 
                echo "<h2>Customer Details</h2>";
                echo "<p><strong>ID:</strong> " . $rows['id'] . "</p>";
                echo "<p><strong>Name:</strong> " . $rows['name'] . "</p>";
                echo "<p><strong>Email:</strong> " . $rows['email'] . "</p>";
                echo "<p><strong>JOb_Role:</strong>" . $rows['job_role'] . "</p>";
                echo "<p><strong> Location:</strong>" . $rows['location'] . "</p>";
            } else {
                echo "Record not found!";
            }
      
        } else {
            echo "Invalid ID!";
        }
    }
}

$result = new View();
$result->show();
