<?php 
$us = $_REQUEST["us"];
$pw = $_REQUEST["pw"];
$re_pw = $_REQUEST["re_pw"];
$gm = $_REQUEST["gm"];

$fn = $_REQUEST["fn"];
$ln =  $_REQUEST["ln"];
$addr = $_REQUEST["addr"];
$phone =  $_REQUEST["phone"];

require("../common/connect.php");
if($us == "" ||$pw == "" || $re_pw == "" || $gm == "" || $fn == "" || $ln == "" || $addr == "" || $phone == ""){
    echo "Vui lòng nhập đủ thông tin!";
    return;
}else
if($pw != $re_pw){
        echo "Mật khẩu nhập lại không trùng !";
        return;
    }else{

$sql = "insert into customers (FirstName,LastName,UserName,Password,Address,Phone,Email)
values ('".$fn."','".$ln."','".$us."','".$pw."','".$addr."','".$phone."','".$gm."')
";


$mysqli->query($sql);
echo "Đăng ký thành công";
    }