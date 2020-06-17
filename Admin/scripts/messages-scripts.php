<?php
// include database connection
include 'dbconnect.php';




if (isset($_POST['btn-delete']) && isset($_GET['delete'])) {
    $msgID = $_GET['delete'];

    mysqli_autocommit($db,FALSE);
    $sql = "DELETE FROM message WHERE MessageID = '$msgID'";

    if ($db->query($sql)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Message Successfully Deleted
                </div>";

//        echo $msg1;
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Deleting
                </div>";
    }

    header('location: ../pages-view-messages.php');
}

mysqli_close($db);
?>