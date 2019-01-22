<?php 
session_start();
if(isset($_SESSION["id_user"])){
$id_user = $_SESSION["id_user"];
require("../common/connect.php");


$sql_money = "select sum(TotalAmount) as tong from orders join orderdetails on orderdetails.OrderID = orders.OrderID where paid = 0 and 
 CustemerID =  ".$_SESSION["id_user"]." group by CustemerID";

$rs = $mysqli->query($sql_money);
 $data = $rs->fetch_assoc();
 
echo $data["tong"]>0? $data["tong"] : 0;
}else {
    echo 0;
}