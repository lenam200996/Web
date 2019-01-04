<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <?php
        require("../../common/connect.php");
        require("../../common/url.php");


        $sql_select = "SELECT * FROM categories ORDER BY categories.CategoryName DESC";
        $rs_select = $mysqli->query($sql_select);


    ?>

        <div class="container">
            <div class="header">
                <span style="font-size: 40px">Welcom, ADMIN | <a href="javascript:logout()">(Logout)</a></span>
                
            </div>
            <div class="menu">
                <ul>
                    <li>Home</li>
                    <li>Users</li>
                    <li>Categoris</li>
                    <li>Products</li>
                </ul>
            </div>
            <div class="body-main">
                <div class="table-view">
                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>CategoryName</th>
                            <th>Description</th>
                            <th>Options</th>
                        </tr>
                <?php 
                    while($data_select = $rs_select->fetch_assoc()){
                ?>
                        <tr>
                            <td><?php echo $data_select["categoryID"];?></td>
                            <td><?php echo $data_select["CategoryName"];?></td>
                            <td><?php echo $data_select["Description"];?></td>
                            <td><a href="javascript:edit_category(<?php echo trim($data_select["categoryID"]);?>)">Edit</a> | <a href="javascript:delete_category(<?php echo trim($data_select["categoryID"]);?>)">Delete</a></td>
                        </tr>

                <?php
                    }
                ?>
                       
                    </table>
                </div>
                <div class="input-view">
                    <table border="1">
                        <tr>
                            <td>ID</td>
                            <td>
                                <input type="text" disabled id="id">
                            </td>
                        </tr>
                        <tr>
                            <td>CategoryName</td>
                            <td>
                                <input type="text" id="ctname">
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>
                                <textarea  cols="30" rows="5" id="description"></textarea>
                            </td>
                        </tr>
                        
                        <tr style="border:none;">
                            <td style="border:none;"></td>
                            <td style="border:none;"><button onclick="edit_category('submit')">Xác nhận</button><a href="javascript:clear()">Thêm</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="div-clear"></div>
            <div class="footer">
                <span>Sport shop</span><br>
                <span>Huyen Le</span><br>
            </div>
        </div>
    </body>
</html>

<script>
    function logout(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                       location.replace("../../");
                    }
                };
                xhttp.open("GET", "../../process/logout.php", true);
                xhttp.send();
            }

            function clear(){
                        document.getElementById("id").value = "";
                        document.getElementById("ctname").value = "";
                        document.getElementById("description").value = "";
                       
            }

            function edit_category(id){
                if(id != 'submit'){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        //do
                        //location.reload();
                        var rs = this.responseText;

                        var arr = rs.split(":");

                        document.getElementById("id").value = arr[0];
                        document.getElementById("ctname").value = arr[1];
                        document.getElementById("description").value = arr[2];
                       
                    }
                };
                xhttp.open("GET", "../../process/edit_category.php?id="+id, true);
                xhttp.send();
                }else{
                    if(document.getElementById("id").value != ""){
                    var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                       location.reload();
                    }
                };
                xhttp.open("GET", "../../process/edit_category.php?id="+document.getElementById("id").value+"&name="+document.getElementById("ctname").value+"&des="+document.getElementById("description").value+"&submit=true", true);
                xhttp.send();
                    }else{
                        if(document.getElementById("ctname").value.trim() == "") {
                            alert("vui lòng nhập đầy đủ thông tin!");
                            return;
                        }
                        if(document.getElementById("description").value.trim() == ""){
                            alert("vui lòng nhập đầy đủ thông tin!");
                            return;
                        }
                        
                        var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                       location.reload();
                    }
                };
                xhttp.open("GET", "../../process/edit_category.php?name="+document.getElementById("ctname").value+"&des="+document.getElementById("description").value+"&submit=false", true);
                xhttp.send();

                    }
                }
            }
        

            function delete_category(id){
                var conf = confirm("bạn muốn xóa loại sản phẩm có mã "+id+" không?");
                if(conf){
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            //do
                            location.reload();
                        }
                    };
                    xhttp.open("GET", "../../process/delete_category.php?id="+id, true);
                    xhttp.send();
                }
            }
        
</script>