<?php

require_once 'dbs.php';

class View
{
    private $connection;

    public function __construct()
    {
        $dc = new Dbs();
        $this->connection = $dc->getConnection();
    }

    public function fetch()
    {
        $find = "SELECT * FROM customer";
        $check = mysqli_query($this->connection, $find);

        if ($check->num_rows > 0) {

?>
            <table border='1' cellpadding='10' cellspacing='0'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Job Role</th>
                    <th>Location</th>
                    <th>Add</th>
                    <th>View</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>

                <?php
                while ($show = $check->fetch_assoc()) {

                ?>

                    <tr>
                        <td> <?php echo $show['id'] ?> </td>

                        <td> <?php echo $show['name'] ?> </td>

                        <td> <?php echo $show['email'] ?> </td>

                        <td> <?php echo $show['job_role'] ?> </td>

                        <td> <?php echo $show['location'] ?> </td>

                        <td> <a href="add.php?id=<?php echo $show['id']; ?>">
                                <img src="img/add.png" style="height:20px;width:20px;"> </a> </td>

                        <td> <a href="view.php?id=<?php echo $show['id']; ?>">
                                <img src="img/view.png" style="height:20px;width:20px;"> </a> </td>

                        <td> <a href="update.php?id=<?php echo $show['id']; ?>">
                                <img src="img/edit-icon.png" style="height:20px;width:20px;"> </a> </td>
                        <td>
                            <a href="delete.php?id=<?php echo $show['id']; ?>">
                                <img src="img/delete.png" style="height:20px;width:20px;">
                            </a>
                        </td>

                    <tr>


        <?php
                }
            } else {
                echo "No data found";
            }
        }
    }

        ?>
            </table>

            <?php
            $seend = new View();
            $seend->fetch();
