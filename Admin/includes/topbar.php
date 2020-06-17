<?php

//session_start();
include 'session.php';
include 'scripts/dbconnect.php';
//$db = mysqli_connect("localhost", "root", "", "shareameal");

$select = "SELECT * FROM admins WHERE Email = '$email'";
$result = mysqli_query($db, $select);

$row = mysqli_fetch_array($result);


?>


<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="index.php" class="logo">
                        <span>
                            <img src="assets/images/favicon.ico" alt=""> Share A Meal
                        </span>
        </a>
    </div>

    <nav class="navbar-custom">

        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <li class="dropdown notification-list hide-phone">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                   href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-earth"></i> English
                </a>
            </li>




            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                   href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="images/profile-picture.jpg" alt="img" class="rounded-circle"> <span
                            class="ml-1"><?php echo $row['AdminName']; ?> <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <a href="scripts/admin-logoutscript.php" class="dropdown-item notify-item">
                        <i class="ti-power-off"></i> <span>Logout</span>
                    </a>

                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
            <!--            <li class="hide-phone app-search">-->
            <!--                <form role="search" class="">-->
            <!--                    <input type="text" placeholder="Search..." class="form-control">-->
            <!--                    <a href=""><i class="fa fa-search"></i></a>-->
            <!--                </form>-->
            <!--            </li>-->
        </ul>

    </nav>

</div>