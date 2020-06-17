<?php
// include database connection
include 'dbconnect.php';





if (isset($_POST['btn-update-rider']) && isset($_GET['update'])) {


    // Get all values
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $vehicle = $_POST['VehicleID'];


    mysqli_autocommit($db,FALSE);
    $query = "UPDATE riders SET RiderName='$name',Email='$email',Contact='$contact',Salary='$salary',VehicleID='$vehicle' WHERE riderID = '$rider_id'";

    // execute query


    if ($db->query($query)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Rider Successfully Updated
                </div>";
        header('location: pages-view-riders.php');
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Updating the rider
                </div>";

    }


}



if (isset($_POST['btn-delete']) && isset($_GET['delete'])) {
    $riderID = $_GET['delete'];

    mysqli_autocommit($db,FALSE);
    $sql = "DELETE FROM riders WHERE riderID = '$riderID'";

    if ($db->query($sql)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Rider Successfully Deleted
                </div>";

//        echo $msg1;
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Deleting
                </div>";
    }

    header('location: ../pages-view-riders.php');
}

mysqli_close($db);
?>