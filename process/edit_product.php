<?php 

if(!isset($_REQUEST["submit"])){
require("../common/connect.php");
$id = $_REQUEST["id"];
$sql_select = "SELECT * FROM products WHERE ProductID =".$id;

$rs = $mysqli->query($sql_select);
$data = $rs->fetch_assoc();

$result = 
$data["ProductID"].":".$data["CategoryID"]
.":".$data["SupplierID"].":".$data["ProductName"]
.":".$data["Unit"].":".$data["Price"]
.":".$data["Size"].":".$data["Color"]
.":".$data["Description"].":".$data["gender"]
.":".$data["sale"].":".$data["date"]
.":".$data["image"].":".$data["price_sale"]
;


echo $result;
}else{
    if($_REQUEST["submit"] == 'true'){
        require("../common/connect.php");
        $id = $_REQUEST["id"];

        $ctname=$_REQUEST["ctname"];
        $slname=$_REQUEST["slname"];
        $pname=$_REQUEST["pname"];
        $unit=$_REQUEST["unit"];
        $price=$_REQUEST["price"];
        $size=$_REQUEST["size"];
        $color=$_REQUEST["color"];
        $des=$_REQUEST["des"];
        $gender=$_REQUEST["gender"];
        $sale=$_REQUEST["sale"];
        $date=$_REQUEST["date"];
        $image=$_REQUEST['image'];
        $prsale=$_REQUEST["prsale"];
       
if($_REQUEST['image'] != "" ){
        $sql_update = "update products set  CategoryID= '".$ctname."'
        ,SupplierID='".$slname."' 
        ,ProductName='".$pname."' 
        ,Unit='".$unit."' 
        ,Price='".$price."' 
        ,Size='".$size."' 
        ,Color='".$color."' 
        ,Description='".$des."' 
        ,gender='".$gender."'
        ,sale='".$sale."' 
        ,date='".$date."' 
        ,image='".$image."' 
        ,price_sale='".$prsale."'     
        where ProductID=".$id;
}else{
    $sql_update = "update products set  CategoryID= '".$ctname."'
    ,SupplierID='".$slname."' 
    ,ProductName='".$pname."' 
    ,Unit='".$unit."' 
    ,Price='".$price."' 
    ,Size='".$size."' 
    ,Color='".$color."' 
    ,Description='".$des."' 
    ,gender='".$gender."'
    ,sale='".$sale."' 
    ,date='".$date."' 
    ,price_sale='".$prsale."'     
    where ProductID=".$id;
}
        $mysqli->query($sql_update);
    }else{
        require("../common/connect.php");

        $ctname=$_REQUEST["ctname"];
        $slname=$_REQUEST["slname"];
        $pname=$_REQUEST["pname"];
        $unit=$_REQUEST["unit"];
        $price=$_REQUEST["price"];
        $size=$_REQUEST["size"];
        $color=$_REQUEST["color"];
        $des=$_REQUEST["des"];
        $gender=$_REQUEST["gender"];
        $sale=$_REQUEST["sale"];
        $date=$_REQUEST["date"];
        $image=$_REQUEST['image'];
        $prsale=$_REQUEST["prsale"];
        

        $sql_insert = "insert into products  (CategoryID,SupplierID,ProductName,Unit,Price,Size,Color,Description,gender,sale,date,image,price_sale)
         values ( '".$ctname."'
        ,'".$slname."' 
        ,'".$pname."' 
        ,'".$unit."' 
        ,'".$price."' 
        ,'".$size."' 
        ,'".$color."' 
        ,'".$des."' 
        ,'".$gender."'
        ,'".$sale."' 
        ,'".$date."'
        ,'".$image."'  
        ,'".$prsale."') ";
        echo $sql_insert;
        $mysqli->query($sql_insert);
    }
    
}