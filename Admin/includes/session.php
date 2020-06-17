<?php
if (!isset($_SESSION['adminsession'])) {
    session_start();

}
if (isset($_SESSION['adminsession'])) {
    $email = $_SESSION['adminsession'];

} else {

    header("refresh:1;url=pages-login.php");

}

?>