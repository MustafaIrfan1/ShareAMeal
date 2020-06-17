<?php

session_start();
require_once 'dbconnect.php';

if(isset($_SESSION['setsession'])){
    header("url=index.php");
    exit;
}else{

    if (isset($_POST['btn-login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $query = "SELECT * FROM users where Email='$email'" OR die(mysqli_error());
        $execute = $db->query($query);
        $row_count = $execute->num_rows;


        if ($row_count > 0) {
            //encoding password
            $user = mysqli_fetch_array($execute);//fetching all data from database
            $id = $user['Email'];
            $verifypassword = md5($password);

            if ($verifypassword == $user['Password']) {
                $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Logging in User !
                </div>";
                $_SESSION['userSession'] = $email;
                header("refresh:1;url=index.php");

            } else {
                $msg = "<div class='alert alert-danger'>
             <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Password !
             </div>";

            }
        } else {
            $msg = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; No such User exists !
        </div>";

        }
    }
}


$db->close();
?>