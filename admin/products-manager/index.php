<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SẢN PHẨM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
        require("../../common/connect.php");
        require("../../common/url.php");
        session_start();
        if(!isset($_SESSION["id_user"])){
            header("Location:".$url);
            exit();
        }

        $sql_select = "SELECT * FROM products JOIN categories ON categories.categoryID = products.CategoryID 
        
        JOIN suppliers on suppliers.SupplierID = products.SupplierID  ORDER BY products.ProductName DESC";
        $rs_select = $mysqli->query($sql_select);


    ?>
        <div class="container">
            <div class="header">
                <span style="font-size: 40px;color:white;">Welcom, ADMIN | <a href="javascript:logout()">(Logout)</a></span>
                
            </div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo $url;?>">Home</a></li>
                    <li><a href="../users-manager">Users</a></li>
                    <li><a href="../categories-manager">Categoris</a></li>
                    <li><a href="../products-manager">Products</a></li>
                </ul>
            </div>
            <div class="body-main">
                <div class="table-view">
                    <table border="1">
                       
                        <tr>
                            <th>ID</th>
                            <th>CategoryName</th>
                            <th>SupplierName</th>
                            <th>ProductName</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Description</th>
                            <th>gender</th>
                            <th>sale</th>
                            <th>date</th>
                            <th>image</th>
                            <th>price_sale</th>
                            <th>options</th>
                        </tr>
                       
                       
                        <?php 
                            while($data_select = $rs_select->fetch_assoc()){
                        ?>
                        <tr>
                            <th><?php echo $data_select["ProductID"];?></th>
                            <th><?php echo $data_select["CategoryName"];?></th>
                            <th><?php echo $data_select["CompanyName"];?></th>
                            <th><?php echo $data_select["ProductName"];?></th>
                            <th><?php echo $data_select["Unit"];?></th>
                            <th><?php echo $data_select["Price"];?></th>
                            <th><?php echo $data_select["Size"];?></th>
                            <th><?php echo $data_select["Color"];?></th>
                            <th><?php echo $data_select["Description"];?></th>
                            <th><?php echo $data_select["gender"];?></th>
                            <th><?php echo $data_select["sale"];?></th>
                            <th><?php echo $data_select["date"];?></th>
                            <th><?php echo $data_select["image"];?></th>
                            <th><?php echo $data_select["price_sale"];?></th>
                            <td><a href="javascript:edit_product(<?php echo trim($data_select["ProductID"]);?>)">Edit</a> | <a href="javascript:delete_product(<?php echo trim($data_select["ProductID"]);?>)">Delete</a></td>
                        </tr>
                       
                        <?php
                            }
                            $sql_select = "SELECT * FROM categories ";
                            $rs_select = $mysqli->query($sql_select);

                        ?>
                        
                    </table>
                </div>
                <hr>
                <div class="input-view">
                <form method="post" action="" enctype="multipart/form-data">
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
                                <select id="ctname">
                                <?php 
                                    while($data_select = $rs_select->fetch_assoc()){
                                ?>
                                    <option value="<?php echo $data_select["categoryID"] ;?>"><?php echo trim($data_select["CategoryName"]) ;?></option>
                                <?php
                                }

                                $sql_select = "SELECT * FROM suppliers ";
                                $rs_select = $mysqli->query($sql_select);
                                ?>
                                <select>
                            </td>
                        </tr>
                        <tr>
                            <td>SupplierName</td>
                            <td>
                                <select id="slname">
                                <?php 
                                    while($data_select = $rs_select->fetch_assoc()){
                                ?>
                                    <option value="<?php echo $data_select["SupplierID"] ;?>"><?php echo trim($data_select["CompanyName"]) ;?></option>
                                <?php
                                }
                                ?>
                                <select>
                            </td>
                        </tr>
                        <tr>
                            <td>ProductName</td>
                            <td>
                                <input type="text" id="pname">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Unit</td>
                            <td>
                                <select id="unit">
                                    <option value="VND">VND</option>
                                    <option value="USD">USD</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>
                                 <input type="text" id="price">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Size</td>
                            <td>
                                <select id="size">
                                    <?php for($i = 30 ;$i<51;$i++){?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php }?>
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Color</td>
                            <td>
                                <select id="color">
                                    <option value="green">green</option>
                                    <option value="white">white</option>
                                    <option value="pink">pink</option>
                                    <option value="Orange">Orange</option>
                                    <option value="black">black</option>
                                    <option value="yellow">yellow</option>
                                    <option value="red">red</option>
                                    <option value="blue">blue</option>
                                </select>
                            </td>
                        </tr>
                       
                        <tr>
                            <td>Description</td>
                            <td>
                                <textarea  cols="30" rows="5" id="des"></textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>gender</td>
                            <td>
                                <select id="gender">
                                    <option value="F">Female</option>
                                    <option value="M">Male</option>
                                    <option value="FM">Male or Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>sale</td>
                            <td>
                                <select id="sale">
                                    <option value="0">Không khuyến mãi</option>
                                    <option value="1">Khuyễn mãi</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>date</td>
                            <td>
                                <input type="date" id="date">
                            </td>
                        </tr>

                        <tr>
                            <td>image</td>
                            <td>
                            <form method="post" action="" enctype="multipart/form-data">
                                <input type="file" id="image" accept="image/x-png,image/gif,image/jpeg"  name="img">
                            </td>
                        </tr>
                        <tr>
                            <td>price_sale</td>
                            <td>
                                <input type="text" id="prsale">
                            </td>
                        </tr>
                        
                        
                        
                        <tr style="border:none;">
                            <td style="border:none;"></td>
                            <td style="border:none;"><button  name="uploadclick" type="submit" onclick="edit_product('submit')">Xác nhận</button><a href="javascript:clear()">Thêm</a></td>
                        </tr>
                    </table>
                </form>

                <?php // Xử Lý Upload
  
  // Nếu người dùng click Upload
  if (isset($_POST['uploadclick']))
  {
      // Nếu người dùng có chọn file để upload
      if (isset($_FILES['img']))
      {
          // Nếu file upload không bị lỗi,
          // Tức là thuộc tính error > 0
          if ($_FILES['img']['error'] > 0)
          {
              echo 'File Upload Bị Lỗi';
          }
          else{
              // Upload file
              move_uploaded_file($_FILES['img']['tmp_name'], '../../images/products/'.$_FILES['img']['name']);
          }
      }

  }
?>
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
                        document.getElementById("ctname").value = "";//k can
                        document.getElementById("slname").value = "";//k
                        document.getElementById("pname").value = ""; 
                        document.getElementById("unit").value = "";//
                        document.getElementById("price").value = "";
                        document.getElementById("size").value = ""; 
                        document.getElementById("color").value = "";//
                        document.getElementById("des").value = "";
                        document.getElementById("gender").value = ""; //
                        document.getElementById("sale").value = "";//
                        document.getElementById("date").value = "";
                        document.getElementById("image").value = ""; 
                        document.getElementById("prsale").value = "";
            }

            function edit_product(id){
                if(id != 'submit'){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        //do
                        //location.reload();
                        var rs = this.responseText;

                        var arr = rs.split(":");

                        document.getElementById("id").value = arr[0];
                        document.getElementById("ctname").value = arr[1];//k can
                        document.getElementById("slname").value = arr[2];//k
                        document.getElementById("pname").value = arr[3]; 
                        document.getElementById("unit").value = arr[4];//
                        document.getElementById("price").value = arr[5];
                        document.getElementById("size").value = arr[6]; //
                        document.getElementById("color").value = arr[7];//
                        document.getElementById("des").value = arr[8];
                        document.getElementById("gender").value = arr[9]; //
                        document.getElementById("sale").value = arr[10];//
                        document.getElementById("date").value = arr[11];
                        
                        document.getElementById("prsale").value = arr[13]; 
                    }
                };
                xhttp.open("GET", "../../process/edit_product.php?id="+id, true);
                xhttp.send();
                }else{
                    if(document.getElementById("id").value != ""){

                        var fileInput = document.getElementById('image');
          
                        var fileName = fileInput.value.split(/(\\|\/)/g).pop();

                    var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                       location.reload();
                    }
                };
                xhttp.open("GET", "../../process/edit_product.php?id="+document.getElementById("id").value+
                "&ctname="+document.getElementById("ctname").value+
                "&slname="+document.getElementById("slname").value+
                "&pname="+document.getElementById("pname").value+
                "&unit="+document.getElementById("unit").value+
                "&price="+document.getElementById("price").value+
                "&size="+document.getElementById("size").value+
                "&color="+document.getElementById("color").value+
                "&des="+document.getElementById("des").value+
                "&gender="+document.getElementById("gender").value+
                "&sale="+document.getElementById("sale").value+
                "&date="+document.getElementById("date").value+
                "&image="+fileName+
                "&prsale="+document.getElementById("prsale").value+
                "&submit=true", true);
                xhttp.send();
                    }else{
                        
                        if(document.getElementById("pname").value.trim() == "") {
                            alert("vui lòng nhập đầy đủ thông tin!");
                            return;
                        }
                        if(document.getElementById("price").value.trim() == ""){
                            alert("vui lòng nhập đầy đủ thông tin!");
                            return;
                        }
                        if( document.getElementById("color").value.trim() == ""){
                            alert("vui lòng nhập đầy đủ thông tin!");
                            return;
                        }
                        if( document.getElementById("des").value.trim() == ""){
                            alert("vui lòng nhập đầy đủ thông tin!");
                            return;
                        }
                        if( document.getElementById("date").value.trim() == ""){
                            alert("vui lòng nhập đầy đủ thông tin!");
                            return;
                        }
                        
                        if( document.getElementById("prsale").value.trim() == ""){
                            alert("vui lòng nhập đầy đủ thông tin!");
                            return;
                        }
                        var fileInput = document.getElementById('image');
          // Use a regular expression to pull the file name only
          var fileName = fileInput.value.split(/(\\|\/)/g).pop();
                        var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                       location.reload();
                    }
                };
                xhttp.open("GET", "../../process/edit_product.php"+
                "?ctname="+document.getElementById("ctname").value+
                "&slname="+document.getElementById("slname").value+
                "&pname="+document.getElementById("pname").value+
                "&unit="+document.getElementById("unit").value+
                "&price="+document.getElementById("price").value+
                "&size="+document.getElementById("size").value+
                "&color="+document.getElementById("color").value+
                "&des="+document.getElementById("des").value+
                "&gender="+document.getElementById("gender").value+
                "&sale="+document.getElementById("sale").value+
                "&date="+document.getElementById("date").value+
                "&image="+fileName+
                "&prsale="+document.getElementById("prsale").value+
                "&submit=false", true);
                xhttp.send();

                    }
                }
            }
        

            function delete_product(id){
                var conf = confirm("bạn muốn xóa sản phẩm có mã "+id+" không?");
                if(conf){
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            //do
                            location.reload();
                        }
                    };
                    xhttp.open("GET", "../../process/delete_product.php?id="+id, true);
                    xhttp.send();
                }
            }
        
        </script>

    </body>
</html>