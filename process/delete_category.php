<?php 

require("../common/connect.php");

$id = $_REQUEST["id"];

$sql_delete = "delete from categories where categoryID = ".$id;

$mysqli->query($sql_delete);

