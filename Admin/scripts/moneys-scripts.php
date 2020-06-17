<?php
// include database connection
include 'dbconnect.php';





if (isset($_POST['btn-update-money']) && isset($_GET['update'])) {


    // Get all values
    $amount = $_POST['amount'];
    $location = $_POST['contact'];

    $riderID = $_POST['RiderID'];
    $userID = $_POST['UserID'];




    mysqli_autocommit($db,FALSE);
    $query = "UPDATE moneys SET MoneyAmount='$amount',Location='$location',RiderID='$riderID' WHERE MoneyID = '$money_id'";

    // execute query


    if ($db->query($query)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; money Donations Successfully Updated
                </div>";
        header('location: pages-view-moneys.php');
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Updating the money donation
                </div>";

    }


}



if (isset($_POST['btn-delete']) && isset($_GET['delete'])) {
    $moneyID = $_GET['delete'];

    mysqli_autocommit($db,FALSE);
    $sql = "DELETE FROM moneys WHERE moneyID = '$moneyID'";

    if ($db->query($sql)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; money donations Successfully Deleted
                </div>";

//        echo $msg1;
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Deleting
                </div>";
    }

    header('location: ../pages-view-moneys.php');
}

mysqli_close($db);
?>