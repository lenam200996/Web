<?php 

if(!isset($_REQUEST["submit"])){
require("../common/connect.php");
$id = $_REQUEST["id"];
$sql_select = "select * from categories where categoryID = " .$id;

$rs = $mysqli->query($sql_select);
$data = $rs->fetch_assoc();

$result = $data["categoryID"].":".$data["CategoryName"].":".$data["Description"];

echo $result;
}else{
    if($_REQUEST["submit"] == 'true'){
        require("../common/connect.php");
        $id = $_REQUEST["id"];
        $name = $_REQUEST["name"];
        $des = $_REQUEST["des"];
       

        $sql_update = "update categories set  CategoryName= '".$name."',Description='".$des."' where categoryID=".$id;

        $mysqli->query($sql_update);
    }else{
        require("../common/connect.php");
        $name = $_REQUEST["name"];
        $des = $_REQUEST["des"];
        

        $sql_insert = "INSERT INTO categories (CategoryName,Description) values ('".$name."','".$des."')";

        $mysqli->query($sql_insert);
    }
    
}