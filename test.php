<?php require("common/connect.php");
$sql_new = "select * from products order by date desc limit 5";
$result_new = $mysqli->query($sql_new);
while ($data_new = $result_new->fetch_assoc()){
echo $data_new["date"]."<hr>";
}
?>