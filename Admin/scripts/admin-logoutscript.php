<?php

//echo "hellllllo";
session_start();
unset($_SESSION['adminsession']);
//session_destroy();
header("Location: ../index.php");

?>