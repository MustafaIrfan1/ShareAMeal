<?php

require_once 'dbconnect.php';


if (isset($_SESSION['adminsession'])) {?>

    <script type="text/javascript">location.href = 'index.php';</script>
    <?php
    //header("Location: index.php");
    exit;
} else {

    if (isset($_POST['btn-login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $query = "SELECT * FROM admins WHERE Email='$email'" OR die(mysqli_error());
        $execute = $db->query($query);
        $row_count = $execute->num_rows;


        if ($row_count > 0) {
            //encoding password
            $admin = mysqli_fetch_array($execute);//fetching all row data from database
            $id = $admin['Email'];
            $verifypassword = md5($password) . "_admin";

            if ($verifypassword == $admin['Password']) {
                $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Logging in Admin !
                </div>";
                $msg1 = ":)";
                session_start();
                $_SESSION['adminsession'] = $email;
                //header("refresh:1;url=index.php");?>
                <script type="text/javascript">location.href = 'index.php';</script>
<?php
            } else {
                $msg = "<div class='alert alert-danger'>
             <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid email or password !
             </div>";
                $msg1 = ":(";
            }
        } else {
            $msg = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; No such Admin exists !
        </div>";
            $msg1 = ":'(";

        }


    }


}


$db->close();
?>