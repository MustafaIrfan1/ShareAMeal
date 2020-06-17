<?php

include 'session.php';
include 'scripts/dbconnect.php';
//$db = mysqli_connect("localhost", "root", "", "shareameal");
$result = mysqli_query($db, "SELECT * FROM admins WHERE Email='$email'");
$num = 0;

$row = mysqli_fetch_array($result)

?>

<div class="left side-menu">
    <div class="user-details">
        <div class="pull-left">
            <img src="images/profile-picture.jpg ?>" alt="" class="thumb-md rounded-circle">
        </div>
        <div class="user-info">
            <a href="#"><?php echo $row['AdminName']; ?></a>
            <p class="text-muted m-0">Administrator</p>
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu" id="side-menu">
            <li class="menu-title">Navigation</li>
            <li>
                <a href="index.php">
                    <i class="ti-home"></i><span> Dashboard </span>
                </a>
            </li>

            <li>
                <?php
                //$db = mysqli_connect("localhost", "root", "", "shareameal");
                $result = mysqli_query($db, "SELECT * FROM admins");
                $num = 0;

                while ($row = mysqli_fetch_array($result)) {
                    $num++;
                }
                ?>

                <a href="pages-view-admin.php">
                    <i class="ti-stamp"></i><span class="badge badge-custom pull-right"><?php echo $num; ?></span>
                    <span> Admins </span>
                </a>
            </li>

            <li>
                <?php
                //$db = mysqli_connect("localhost", "root", "", "shareameal");
                $result = mysqli_query($db, "SELECT * FROM users");
                $num = 0;

                while ($row = mysqli_fetch_array($result)) {
                    $num++;
                }
                ?>

                <a href="pages-view-users.php">
                    <i class="ti-user"></i><span class="badge badge-custom pull-right"><?php echo $num; ?></span> <span> Users </span>
                </a>
            </li>

            <li>
                <?php
                //$db = mysqli_connect("localhost", "root", "", "shareameal");
                $result = mysqli_query($db, "SELECT * FROM riders");
                $num = 0;

                while ($row = mysqli_fetch_array($result)) {
                    $num++;
                }
                ?>

                <a href="pages-view-riders.php">
                    <i class="ti-car"></i><span class="badge badge-custom pull-right"><?php echo $num; ?></span> <span> Riders </span>
                </a>
            </li>


            <li>
                <?php
                //$db = mysqli_connect("localhost", "root", "", "shareameal");
                $result = mysqli_query($db, "SELECT * FROM vehicles");
                $num = 0;

                while ($row = mysqli_fetch_array($result)) {
                    $num++;
                }
                ?>

                <a href="pages-view-vehicles.php">
                    <i class="ti-truck"></i><span class="badge badge-custom pull-right"><?php echo $num; ?></span>
                    <span> Vehicles </span>
                </a>
            </li>


            <li>
                <?php
               // $db = mysqli_connect("localhost", "root", "", "shareameal");
                $result = mysqli_query($db, "SELECT * FROM foods");
                $num = 0;

                while ($row = mysqli_fetch_array($result)) {
                    $num++;
                }
                ?>

                <a href="pages-view-foods.php">
                    <i class="ti-apple"></i><span class="badge badge-custom pull-right"><?php echo $num; ?></span>
                    <span> Food Donations </span>
                </a>
            </li>

            <li>
                <?php
                //$db = mysqli_connect("localhost", "root", "", "shareameal");
                $result = mysqli_query($db, "SELECT * FROM moneys");
                $num = 0;

                while ($row = mysqli_fetch_array($result)) {
                    $num++;
                }
                ?>

                <a href="pages-view-moneys.php">
                    <i class="ti-money"></i><span class="badge badge-custom pull-right"><?php echo $num; ?></span>
                    <span> Money Donations </span>
                </a>
            </li>

            <li>
                <?php
                //$db = mysqli_connect("localhost", "root", "", "shareameal");
                $result = mysqli_query($db, "SELECT * FROM message");
                $num = 0;

                while ($row = mysqli_fetch_array($result)) {
                    $num++;
                }
                ?>

                <a href="pages-view-messages.php">
                    <i class="ti-email"></i><span class="badge badge-custom pull-right"><?php echo $num; ?></span>
                    <span> Messages </span>
                </a>
            </li>

            <li>
                <?php
                //$db = mysqli_connect("localhost", "root", "", "shareameal");
                $result = mysqli_query($db, "SELECT * FROM organisations");
                $num = 0;

                while ($row = mysqli_fetch_array($result)) {
                    $num++;
                }
                ?>

                <a href="pages-view-organisations.php">
                    <i class="ti-star"></i><span class="badge badge-custom pull-right"><?php echo $num; ?></span>
                    <span> Organisation </span>
                </a>
            </li>


        </ul>

    </div>
    <!-- Sidebar -->
    <div class="clearfix"></div>

</div>