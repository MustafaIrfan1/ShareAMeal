<?php
// include database connection
include 'dbconnect.php';





if (isset($_POST['btn-update-food']) && isset($_GET['update'])) {


    // Get all values
    $portion = $_POST['portion'];
    $location = $_POST['contact'];


    $organisationID = $_POST['OrganisationID'];
    $riderID = $_POST['RiderID'];
    $userID = $_POST['UserID'];




    mysqli_autocommit($db,FALSE);
    $query = "UPDATE foods SET foodPortion='$portion',Location='$location',RiderID='$riderID' WHERE FoodID = '$food_id'";

    // execute query


    if ($db->query($query)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Food Donations Successfully Updated
                </div>";
        header('location: pages-view-foods.php');
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Updating the food donation
                </div>";

    }


}



if (isset($_POST['btn-delete']) && isset($_GET['delete'])) {
    $foodID = $_GET['delete'];

    mysqli_autocommit($db,FALSE);
    $sql = "DELETE FROM foods WHERE FoodID = '$foodID'";

    if ($db->query($sql)) {
        mysqli_commit($db);
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Food donations Successfully Deleted
                </div>";

//        echo $msg1;
    } else {
        mysqli_rollback($db);
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry! Error while Deleting
                </div>";
    }

    header('location: ../pages-view-foods.php');
}

mysqli_close($db);
?>