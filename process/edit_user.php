<?php 

if(!isset($_REQUEST["submit"])){
require("../common/connect.php");
$id = $_REQUEST["id"];
$sql_select = "select * from users where UserID = " .$id;

$rs = $mysqli->query($sql_select);
$data = $rs->fetch_assoc();

$result = $data["UserID"].":".$data["Fullname"].":".$data["Username"].":".$data["Password"];

echo $result;
}else{
    if($_REQUEST["submit"] == 'true'){
        require("../common/connect.php");
        $id = $_REQUEST["id"];
        $us = $_REQUEST["us"];
        $pw = $_REQUEST["pw"];
        $fn = $_REQUEST["fn"];

        $sql_update = "update users set  Username= '".$us."',Password='".$pw."',Fullname='".$fn."' where UserID=".$id;

        $mysqli->query($sql_update);
    }else{
        require("../common/connect.php");
        $us = $_REQUEST["us"];
        $pw = $_REQUEST["pw"];
        $fn = $_REQUEST["fn"];

        $sql_insert = "INSERT INTO users (Username,Password,Fullname) values ('".$us."','".$pw."','".$fn."')";

        $mysqli->query($sql_insert);
    }
    
}