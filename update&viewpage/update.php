<?php

require_once 'dbs.php';

class Update
{
    private $connection;

    public function __construct()
    {
        $dc = new Dbs();
        $this->connection = $dc->getconnection();
    }


    public function change()
    {

        if (isset($_GET['id']) &&  is_numeric($_GET['id'])) {

            $id = $_GET['id'];

            $select  = "SELECT * FROM customer WHERE id = $id";

            $result = mysqli_query($this->connection, $select);

            $row = mysqli_fetch_assoc($result);




            if (isset($_POST['update'])) {
                $cname = $_POST['cname'];
                $cemail = $_POST['cmail'];
                $cjob = $_POST['cjob'];
                $clocation = $_POST['clocation'];



                $up = "UPDATE customer SET name = '$cname',  email = '$cemail',  job_role = '$cjob',  location = '$clocation'  WHERE id = $id";



                if (mysqli_query($this->connection, $up)) {
                    header("Location: index.php");
                    exit();
                } else {
                    echo "Error Updating " . mysqli_error($this->connection);
                }
            }

            return $row;
        }
    }
}

$update = new Update();
 $row = $update->change();

?>

<form action="" method="POST">
    <input type="text" id="cname" name="cname" value="<?php echo $row['name'] ?>" required><br><br>
    <input type="text" id="cmail" name="cmail" value="<?php echo $row['email'] ?>" required><br><br>
    <input type="text" id="ejob" name="cjob" value="<?php echo $row['job_role'] ?>" required><br><br>
    <input type="text" id="clocation" name="clocation" value="<?php echo $row['location'] ?>" required><br><br>

    <button type="text" name="update"> Update</button>
</form>