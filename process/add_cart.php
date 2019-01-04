<?php 
  if(isset($_SESSION["admin"]) && $_SESSION["admin"] != ""){
    echo "Bạn là quản trị viên không thể thức hiện chức năng này!!";
    return;
  }else{
$id = $_REQUEST["id"] ;
$money = $_REQUEST["money"] ;
$quantiny = $_REQUEST["quantiny"] ;
session_start();
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

$sql_count = "select count(*) as sl from orders where CustemerID = ".$id_user;
$rs = $mysqli->query($sql_count);
$data = $rs->fetch_assoc();
echo "đã thêm vào giỏ hàng!!".$data["sl"];

}