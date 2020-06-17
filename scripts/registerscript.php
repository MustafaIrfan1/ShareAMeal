<?php

include 'dbconnect.php';


if (isset($_POST['btn-register'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $select = "SELECT * FROM users WHERE Email='$email'";
    $execute = $db->query($select);
    $row_count = $execute->num_rows;


    if ($row_count == 0) {
        $query = "INSERT INTO users(Email,Password,Contact)
                        VALUES ('$email','" . md5($password) ."','$phone')" OR die(mysqli_error());
        if ($db->query($query)) {
            $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; User Successfully Created !
                </div>";
            header("refresh:1;url=login.php");
        } else {
            $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while Creating !
                </div>";
        }
    } else {

        $msg = "<div class='alert alert-danger'>
             <span class='glyphicon glyphicon-info-sign'></span> &nbsp; User Already exists with same Email !
             </div>";

    }


}


?>