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


        $sql_select = "SELECT * FROM users ORDER BY users.Username DESC";
        $rs_select = $mysqli->query($sql_select);


    ?>

        <div class="container">
            <div class="header">
                <span style="font-size: 40px">Welcom, ADMIN huyenle | <a href="javascript:logout()">(Logout)</a></span>
                
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
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Options</th>
                        </tr>
                        <?php 
                            while($data_select = $rs_select->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $data_select["UserID"]; ?></td>
                            <td><?php echo $data_select["Username"]; ?></td>
                            <td><?php echo $data_select["Fullname"]; ?></td>
                            <td><a href="javascript:edit_user(<?php echo trim($data_select["UserID"]);?>)">Edit</a> | <a href="javascript:delete_user(<?php echo trim($data_select["UserID"]);?>)">Delete</a></td>
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
                                <input id="id" type="text" disabled>
                               
                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input id="username" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input id="password" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>Fullname</td>
                            <td>
                                <input id="fullname" type="text">
                            </td>
                        </tr>
                        <tr style="border:none;">
                            <td style="border:none;"></td>
                            <td style="border:none;"><button onclick="edit_user('submit')">Xác nhận</button> <a href="javascript:clear()">Thêm</a></td>
                            
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
                        document.getElementById("username").value = "";
                        document.getElementById("password").value = "";
                        document.getElementById("fullname").value = ""; 
            }

            function edit_user(id){
                if(id != 'submit'){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        //do
                        //location.reload();
                        var rs = this.responseText;

                        var arr = rs.split(":");

                        document.getElementById("id").value = arr[0];
                        document.getElementById("username").value = arr[2];
                        document.getElementById("password").value = arr[3];
                        document.getElementById("fullname").value = arr[1]; 
                    }
                };
                xhttp.open("GET", "../../process/edit_user.php?id="+id, true);
                xhttp.send();
                }else{
                    if(document.getElementById("id").value != ""){
                    var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                       location.reload();
                    }
                };
                xhttp.open("GET", "../../process/edit_user.php?id="+document.getElementById("id").value+"&us="+document.getElementById("username").value+"&pw="+document.getElementById("password").value+"&fn="+document.getElementById("fullname").value+"&submit=true", true);
                xhttp.send();
                    }else{
                        if(document.getElementById("username").value.trim() == "") {
                            alert("vui lòng nhập đầy đủ thông tin!");
                            return;
                        }
                        if(document.getElementById("password").value.trim() == ""){
                            alert("vui lòng nhập đầy đủ thông tin!");
                            return;
                        }
                        if( document.getElementById("fullname").value.trim() == ""){
                            alert("vui lòng nhập đầy đủ thông tin!");
                            return;
                        }
                        var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                       location.reload();
                    }
                };
                xhttp.open("GET", "../../process/edit_user.php?us="+document.getElementById("username").value+"&pw="+document.getElementById("password").value+"&fn="+document.getElementById("fullname").value+"&submit=false", true);
                xhttp.send();

                    }
                }
            }
        

            function delete_user(id){
                var conf = confirm("bạn muốn xóa người dùng có mã "+id+" không?");
                if(conf){
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            //do
                            location.reload();
                        }
                    };
                    xhttp.open("GET", "../../process/delete_user.php?id="+id, true);
                    xhttp.send();
                }
            }
        
        </script>
    </body>
</html>