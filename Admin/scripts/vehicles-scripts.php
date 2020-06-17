<?php
// include database connection
include 'dbconnect.php';


if (isset($_POST['btn-update-vehicle']) && isset($_GET['update'])) {


    // Get all values
    $vtype = $_POST['name'];



    mysqli_autocommit($db,FALSE);
    $query = "UPDATE vehicles SET VehicleType='$vtype' WHERE vehicleID = '$vehicle_id'";

    // execute query


    if ($db->query($query)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Vehicle Successfully Updated
                </div>";
        header('location: pages-view-vehicles.php');
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Updating the vehicle
                </div>";

    }


}



if (isset($_POST['btn-delete']) && isset($_GET['delete'])) {
    $vehicleID = $_GET['delete'];

    mysqli_autocommit($db,FALSE);
    $sql = "DELETE FROM vehicles WHERE vehicleID = '$vehicleID'";

    if ($db->query($sql)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; vehicle Successfully Deleted
                </div>";

//        echo $msg1;
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Deleting
                </div>";
    }

    header('location: ../pages-view-vehicles.php');
}

mysqli_close($db);
?>