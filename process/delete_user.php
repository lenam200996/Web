<?php 

require("../common/connect.php");

$id = $_REQUEST["id"];

$sql_delete = "delete from users where UserID = ".$id;

$mysqli->query($sql_delete);

