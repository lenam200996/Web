<?php 

require("../common/connect.php");

$id = $_REQUEST["id"];

$sql_delete = "delete from products where ProductID = ".$id;

$mysqli->query($sql_delete);

