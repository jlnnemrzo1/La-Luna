<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lalunadatabase";
// Create connection
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
$result = $connect->query("SELECT * FROM `hotel_services`,`customer_details` WHERE `hotel_services`.`Owners_ID`= `customer_details`.`Owners_ID` AND cast(App_Date AS date) = CURDATE();") or die($connect->error);
$result1 = $connect->query("SELECT * FROM `hotel_services_daycare`,`customer_details` WHERE `hotel_services_daycare`.`Owners_ID`= `customer_details`.`Owners_ID` AND cast(App_Date AS date) = CURDATE();") or die($connect->error);
$connect->close();
?>