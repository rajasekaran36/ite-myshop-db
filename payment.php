<?php
session_start();
$productname = $_POST["productname"];
$productprice = $_POST["productprice"];
$usename = $_SESSION["username"]."<br>";
echo "User: ".$usename;
echo "Selected: ".$productname."<br>";
echo "Price : ".$productprice;
?>