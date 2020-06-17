<?php
// include database connection
include 'dbconnect.php';





if (isset($_POST['btn-update-organisation']) && isset($_GET['update'])) {


    // Get all values
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $name = $_POST['name'];



    mysqli_autocommit($db,FALSE);
    $query = "UPDATE organisations SET organisationName='$name',Address='$address',Contact='$contact' WHERE OrganisationID = '$organisation_id'";

    // execute query


    if ($db->query($query)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Organisation Successfully Updated
                </div>";
        header('location: pages-view-organisations.php');
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Updating the organisation
                </div>";

    }


}



if (isset($_POST['btn-delete']) && isset($_GET['delete'])) {
    $organisationID = $_GET['delete'];

    mysqli_autocommit($db,FALSE);
    $sql = "DELETE FROM organisations WHERE OrganisationID = '$organisationID'";

    if ($db->query($sql)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; organisation Successfully Deleted
                </div>";

//        echo $msg1;
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Deleting
                </div>";
    }

    header('location: ../pages-view-organisations.php');
}

mysqli_close($db);
?>