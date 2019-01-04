<?php 
session_start();
$id = $_REQUEST["id"];
$sl = $_REQUEST["sl"];
$money = $_REQUEST["money_change"];
require("../common/connect.php");
$sql_order = "update orders set TotalAmount = " .$money." where OrderID = ".$id;

$sql_order_detail = "update orderdetails set Quantiny =".$sl." where OrderID = ".$id;

$mysqli->query($sql_order);
$mysqli->query($sql_order_detail);  
echo $sql_order;