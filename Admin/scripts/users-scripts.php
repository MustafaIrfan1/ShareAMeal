<?php
// include database connection
include 'dbconnect.php';

if (isset($_POST['btn-update-user']) && isset($_GET['update'])) {


    // Get all values
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

    $encrypt_pass = md5($password) ;

    mysqli_autocommit($db,FALSE);
    $query = "UPDATE users SET Email='$email',Contact='$contact',Password='$encrypt_pass' WHERE UserID = '$user_id'";

    // execute query


    if ($db->query($query)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; User Successfully Updated
                </div>";
        header('location: pages-view-users.php');
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Updating the User
                </div>";

    }


}



if (isset($_POST['btn-delete']) && isset($_GET['delete'])) {
    $userID = $_GET['delete'];

    mysqli_autocommit($db,FALSE);
    $sql = "DELETE FROM users WHERE UserID = '$userID'";

    if ($db->query($sql)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; User Successfully Deleted
                </div>";

//        echo $msg1;
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Deleting
                </div>";
    }

    header('location: ../pages-view-users.php');
}

mysqli_close($db);
?>