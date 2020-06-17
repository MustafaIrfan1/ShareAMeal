<?php
include 'dbconnect.php';
session_start();



if (isset($_POST['btn-donate-food'])) {



    $organisation = $_POST['OrganisationID'];
    $portion = $_POST['foodPortion'];
    $location = $_POST['foodLocation'];


    if (isset($_SESSION['userSession'])) {
        $email = $_SESSION['userSession'];
    }


    //to get user id
    $select = "SELECT * FROM users WHERE Email = '$email'";
    $execute = $db->query($select);
    $row = mysqli_fetch_array($execute);
    $userID = $row['UserID'];



        $query = "INSERT INTO foods(foodPortion,Location,OrganisationID,UserID)
                        VALUES ('$portion','$location','$organisation','$userID')" OR die(mysqli_error());
        if ($db->query($query)) {
            $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Thanks for Donating your share! Donate More
                </div>";

        } else {
            $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp;  Server Error Donate Later !
                </div>";
        }



}


if (isset($_POST['btn-donate-money'])) {

    $amount = $_POST['moneyAmount'];
    $location = $_POST['moneyLocation'];

    if (isset($_SESSION['userSession'])) {
        $email = $_SESSION['userSession'];
    }

    //to get user id
    $select = "SELECT * FROM users WHERE Email = '$email'";
    $execute = $db->query($select);
    $row = mysqli_fetch_array($execute);
    $userID = $row['UserID'];



    $amount = $_POST['moneyAmount'];
    $location = $_POST['moneyLocation'];


    $query = "INSERT INTO moneys(MoneyAmount,Location,UserID)
                        VALUES ('$amount','$location','$userID')" OR die(mysqli_error());
    if ($db->query($query)) {
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Thanks for Donating! Donate More
                </div>";

    } else {
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Server Error Donate Later !
                </div>";
    }


}


?>