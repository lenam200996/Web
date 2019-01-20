<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Danh mục</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="../style/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    </head>
    <body>
    <div class="container" id="cont">
        <?php
            require("../common/header_child.php");
            require("../common/connect.php");
            
       ?>
       
        <div class="main-body">
        
            <?php
               require("../common/left.php");
              /*  if($_GET["id"] != "sale"){
                    $sql_name = "select CategoryName from categories where CategoryID = ".$_GET["id"];
                    $resultCateName = $mysqli->query($sql_name);
                    $name_sql = $resultCateName->fetch_assoc();
                    $name =  $name_sql["CategoryName"];
               }else{
                   $name = "Khuyến mãi";
               }*/

               $sql_select = 'SELECT ProductName,FirstName,LastName,Phone,Email,Address 
               from customers join orders on customers.CustomerID = orders.CustemerID 
               join orderdetails on orderdetails.OrderID = orders.OrderID 
               join products on products.ProductID = orderdetails.ProductID 
               where paid = 0 and orders.CustemerID = '.$_SESSION["id_user"];
               $sql_total = "SELECT sum(TotalAmount) as tongtien from orders join orderdetails on orderdetails.OrderID = orders.OrderID where paid = 0 and  CustemerID = 3";
               $result_select = $mysqli->query($sql_select);
               $result_total = $mysqli->query($sql_total);



            ?>
            <div class="right">
               <div class="title-main" >
                <i class="fas fa-arrow-right" style="color:green;"> Xác nhận đơn hàng</i>
               </div>
               <!------------->
               <div class="list">
                    <fieldset>
                        <legend>Thông tin đơn hàng</legend>
                        <table class="tb_xn">
                            
                            <tr>
                                <td class="tilte_tb">Tổng tiền</td>
                                <td><?php echo $result_total->fetch_assoc()["tongtien"];?></span></td>
                            </tr>
                            <tr>
                                <td class="tilte_tb">Tên khách hàng</td>
                                <td><?php echo $result_select->fetch_assoc()["FirstName"]." ".$result_select->fetch_assoc()["LastName"] ;?></td>
                            </tr>
                            <tr>
                                <td class="tilte_tb">Số điện thoại</td>
                                <td><?php  $result_select = $mysqli->query($sql_select); echo $result_select->fetch_assoc()["Phone"];?></td>
                            </tr>
                            <tr>
                                <td class="tilte_tb">Gmail</td>
                                <td><?php  $result_select = $mysqli->query($sql_select); echo $result_select->fetch_assoc()["Email"];?></td>
                            </tr>
                            <tr>
                                <td class="tilte_tb">Địa chỉ giao hàng</td>
                                <td>
                                    <input type="text" name="" id="textAddress" disabled value="<?php  $result_select = $mysqli->query($sql_select); echo $result_select->fetch_assoc()["Address"];?>">
                                    <a href="javascript:edit()">Chỉnh sửa</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="tilte_tb">Danh sách sản phẩm</td>
                                <td><?php  $result_select = $mysqli->query($sql_select);
                                        while($data = $result_select->fetch_assoc()){
                                            echo "<span style='color:red;text-transform:uppercase;'>".$data["ProductName"]."</span><br>";
                                            
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btnChiTiet" name="" id="" onclick="confirm_Cart()">Xác nhận</button>
                                </td>
                            </tr>
                        </table>
                        <span style="color:green;" id="messeger"></span>
                    </fieldset>

                </div>
               <!--------------->
                <div class="div-clear"></div>
            </div>
        </div>
        <div class="div-clear"></div>
        <?php
                require("../common/footer.php");
        ?>
    </div>
    <script>
        function edit(){
            document.getElementById("textAddress").disabled = false;
        }

        function confirm_Cart(){
            var addr = document.getElementById("textAddress").value;
            var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //do
                document.getElementById("messeger").innerHTML = this.responseText;
               
            }
        };
        xhttp.open("GET", "../process/confirm_cart.php?addr="+addr, true);
        xhttp.send();
        }
        
    </script>
    </body>
</html>