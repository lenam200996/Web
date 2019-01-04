<?php 
session_start();
$id_user = $_SESSION["id_user"];
require("../common/connect.php");
$sql_money = "select sum(TotalAmount) as tong from orders 
where CustemerID =  ".$_SESSION["id_user"]." group by CustemerID";

$rs = $mysqli->query($sql_money);
 $data = $rs->fetch_assoc();
echo $data["tong"]>0? $data["tong"] : 0;
 