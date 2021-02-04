<?php

include("../connection.php");
include("../include/Trip.php");

session_start();

if ($_SESSION['Check'] = "yes" ) {

        $admin_id = $_SESSION['admin_id'] ;


   if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 

        $trip = new Trip;

        $trip->admin_id     = $_SESSION['admin_id'];
        $trip->trip_name    = $_POST['trip_name'];
        $trip->trip_price   = $_POST['trip_price'];
        $trip->trip_id      = $_POST['trip_id'];
        $trip->trip_agency = $_POST['trip_agency'];


        $trip->insert($connection);
}
}
?>




