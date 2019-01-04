<?php 
session_start();

if(!isset($_REQUEST["all"])){
$id = $_REQUEST["id"];

$id_user = $_SESSION["id_user"];
require("../common/connect.php");

$sql_delete_order = "delete from orders where OrderID = ".$id;

$sql_delete_order_detail = "delete from orderdetails where OrderID = ".$id;

$mysqli->query($sql_delete_order_detail);
$mysqli->query($sql_delete_order);

}else{
    
$id_user = $_SESSION["id_user"];
require("../common/connect.php");
    $sql_delete_order = "delete from orders where CustemerID = ".$id_user;

    $sql_delete_order_detail = "delete from orderdetails where OrderID = (select OrderID from orders where CustemerID = ".$id_user.")";
    $mysqli->query($sql_delete_order_detail);
    $mysqli->query($sql_delete_order);
   
}


$sql_count = "select count(*) as sl from orders where CustemerID = ".$id_user;
$rs = $mysqli->query($sql_count);
$data = $rs->fetch_assoc();
echo $data["sl"];