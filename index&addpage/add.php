<?php

require_once 'dbs.php';

class Add
{
    private $connection;

    public function __construct()
    {
        $dc = new Dbs();
        $this->connection = $dc->getConnection();
    }

    public function enter()
    {
        if (isset($_POST['submit'])) {

            $uname = $_POST['name'];
            $uemail = $_POST['mail'];
            $urole = $_POST['role'];
            $ulocation = $_POST['location'];

            $sql = "INSERT INTO customer  (name, email, job_role, location) VALUES ('$uname', '$uemail', '$urole', '$ulocation')";

            if (mysqli_query($this->connection, $sql)) {
                echo "Data successfully entered";
            } else {
                echo "Data not entered";
            }
        }
    }
}

$datain = new Add();
$datain->enter();

?>
<form action="" method="POST">

    <input type="text" name="name" placeholder="Enter the name" required><br><br>

    <input type="email" name="mail" placeholder="Enter the email" required><br><br>

    <input type="text" name="role" placeholder="Enter the Job role" required><br><br>

    <input type="text" name="location" placeholder="Enter the Location" required><br><br>

    <button type="submit" name="submit">Submit</button>

    <a href="index.php" style="text-decoration:none; color:white;background-color:green;margin:30px; padding:2px; border-radius:2px;">See on List</a>


</form>