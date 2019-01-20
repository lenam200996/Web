<?php 
session_start();



$id_user = $_SESSION["id_user"];
require("../common/connect.php");

$sql_update = "UPDATE orderdetails set paid = 1 
where OrderID in (select OrderID from orders where CustemerID = ".$id_user."  )";

$sql_update_add = "UPDATE customers set Address = '".$_REQUEST["addr"]."' where CustomerID = ".$id_user;


$mysqli->query($sql_update);
$mysqli->query($sql_update_add);
echo "Xác nhận thành công!!";