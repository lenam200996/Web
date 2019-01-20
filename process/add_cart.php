<?php 
session_start();
  if(isset($_SESSION["admin"])){
    return;
  }else{
$id = $_REQUEST["id"] ;
$money = $_REQUEST["money"] ;
$quantiny = $_REQUEST["quantiny"] ;

$id_user = $_SESSION["id_user"];
require('../common/connect.php');



$sql_insert_orders = "insert into orders (CustemerID,OrderDate,TotalAmount) values(".$id_user.",'".date("Y-m-d H:i:s")."',".$money.")";
$mysqli->query($sql_insert_orders);

$sql_num = "select OrderID from  orders order by OrderDate DESC";
$num_rs = $mysqli->query($sql_num);
$data_num = $num_rs->fetch_assoc();

$sql_insert_orders_details = "insert into  orderdetails (OrderID,ProductID,Quantiny) 
values (".$data_num["OrderID"].",".$id.",".$quantiny.")
";

$mysqli->query($sql_insert_orders_details);

$sql_count = "select count(*) as sl from orders join orderdetails on orderdetails.OrderID = orders.OrderID where paid = 0 and  CustemerID = ".$id_user;
$rs = $mysqli->query($sql_count);
$data = $rs->fetch_assoc();
echo "Đã thêm vào giỏ hàng!!".$data["sl"];

}