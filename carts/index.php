<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Giỏ hàng</title>
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
            require("../common/url.php");
       ?>
       
       
        <div class="main-body">
        
        <?php
            
                require("../common/left.php");
                if(isset($_SESSION["id_user"])){
                $sql_cart = "select * from orders join orderdetails on orderdetails.OrderID = orders.OrderID
                join products on products.ProductID = orderdetails.ProductID join customers on customers.CustomerID = orders.CustemerID 
                where customers.CustomerID =  ".$_SESSION["id_user"];//.$_GET["id"];
               
            }
            ?>
            <div class="right" style="color: gray">
               <div class="title-main" >
                <i class="fas fa-arrow-right" style="color:green;"> Sản phẩm<span id="demo"></span></i>
               </div>
               <!------------->
               <div class="list">
                   <?php 
                   if(isset($_SESSION["id_user"])){
                    $result_cart = $mysqli->query($sql_cart);
                   while($result_data = mysqli_fetch_assoc($result_cart)){?>
                          <div class="im-li" >
                            <div class="im-pr" >
                                <img src="../images/products/<?php echo $result_data['image'];?>" class="im-pro"/>
                            </div>
                            <div class="intro">
                                <span>Tên sản phẩm: <?php echo $result_data['ProductName'];?></span><hr>
                                <span>Mô tả : <?php echo $result_data['Description'];?></span><hr>
                                <span>Đơn giá : <span  id='dongia-<?php echo $result_data['OrderID'];?>'><?php if($result_data['sale'] == 0) echo $result_data['Price'];
                                else echo $result_data['price_sale'];
                                ?></span></span><hr>
                                <span>Màu sắc: <?php echo $result_data['Color'];?></span>
                            </div>
                            <div class="countPro">
                                <div class="dongia">
                                    <span>Số lượng</span>
                                </div>
                                <div class="soluong">
                                    <button onclick="countsub(<?php echo $result_data['OrderID'];?>)" class="fas fa-minus-circle" 
                                    style="width:20px;height:20px;
                                    background:none;
                                    border:none;
                                    outline:none;
                                    cursor:pointer;"> </button>
                                    <input type="number" name="count" id="count-number-<?php echo $result_data['OrderID'];?>" value="<?php echo $result_data["Quantiny"];?>"
                                     style="border:.5px solid lightgray;
                                     width:40px;height:20px;
                                     font-size:15px;
                                     text-align:center;
                                     border-radius:9px;
                                     outline:none;">
                                    <button onclick="countplus(<?php echo $result_data['OrderID'];?>)" class="fas fa-plus-circle"
                                     style="width:20px;height:20px;
                                     background:none;
                                     border:none;
                                     outline:none;
                                     cursor:pointer;"></button>
                                </div>
                                <div class="thanhtien">
                                    <span id="money-<?php echo $result_data['OrderID'];?>"><?php  echo $result_data['TotalAmount'];
                                ?></span> đồng
                                </div>
                                <div class="delete" style="width: 3%;float: left;padding-left: 3%;color: red;font-size: 15px;">
                                 <button onclick="delete_Cart(<?php echo $result_data['OrderID'];?>)" class="fas fa-trash-alt" 
                                    style="width:40px;height:40px;
                                    background:none;
                                    border:none;
                                    outline:none;
                                    cursor:pointer;
                                    color:red;
                                    "> </button>
                                    </div>
                            </div>
                          </div>

<hr>
                   <?php  }}?>
                                   
                   
                   <?php 
                   if(isset($_SESSION["id_user"])){
                   $sql_money = "select sum(TotalAmount) as tong from orders 
                   where CustemerID =  ".$_SESSION["id_user"]." group by CustemerID";

                   $rs = $mysqli->query($sql_money);
                    $data = $rs->fetch_assoc();
                   }
                   ?>
               <!--------------->
                <div class="div-clear"></div>
                <div class="xacnhan">
                    
                    <span  class="break">Tổng tiền: <span id="total"><?php if(isset($_SESSION["id_user"])) echo $data["tong"]; else echo 0;?> </span> đồng</span>
                    <button disabled = "<?php echo isset($_SESSION['id_user'])?'false':'true';  ?>" class="fas fa-check-circle btnChiTiet"> Xác nhận</button>
                    <a href="<?php echo $url;?>"><button class="fas fa-ban btnChiTiet"> Để sau</button></a>
                    <button disabled = "<?php echo isset($_SESSION['id_user'])?'false':'true';  ?>" class="fas fa-trash-alt btnChiTiet" onclick="delete_all()"> Xóa tất cả</button>
                </div>
            </div>
        </div>
        <div class="div-clear"></div>
        <?php
                require("../common/footer.php");
            ?>
    </div>
    <script>

setInterval(() => {
    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("total").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../process/total_money.php", true);
        xhttp.send();
}, 100);

function delete_all(){
    var conf = confirm("Xóa toàn bộ đơn hàng?");
    if(conf){
    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").style.display = "block";


            //document.getElementById("demo").innerHTML =this.responseText.substring(0,22);//chinh sua
            document.getElementById("count_cart").innerHTML = this.responseText;
            location.reload();
            }
        };
        xhttp.open("GET", "../process/delete_cart.php?all=true", true);
        xhttp.send();
    }
}

    function delete_Cart(id){
        //var money = document.getElementById("total-money").innerHTML;
        //var quantiny =  document.getElementById("count-number").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").style.display = "block";


            //document.getElementById("demo").innerHTML =this.responseText.substring(0,22);//chinh sua
            document.getElementById("count_cart").innerHTML = this.responseText;
            location.reload();
            }
        };
        xhttp.open("GET", "../process/delete_cart.php?id="+id, true);
        xhttp.send();
        setTimeout(() => {
            document.getElementById("demo").style.display = "none";
        }, 2000);
    }
    
    function countsub(numb){// Hàm xử lý tăng giảm số lượng khi click vào button ,cái này là trừ

        var value = document.getElementById("count-number-"+numb).value;
        if(Number(value) > 1 ){
            var num  = Number(value) - 1;
            value = document.getElementById("count-number-"+numb).value = num;
            var money = document.getElementById("money-"+numb).innerHTML;
            var dongia = document.getElementById("dongia-"+numb).innerHTML;
           
            document.getElementById("money-"+numb).innerHTML =  dongia * value;
              
         var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //do
               
            }
        };
        xhttp.open("GET", "../process/edit_cart.php?id="+numb+"&money_change="+document.getElementById("money-"+numb).innerHTML+"&sl="+value, true);
        xhttp.send();
        }
       
    }

    function countplus(numb){ // đây là cộng
        var value = document.getElementById("count-number-"+numb).value;
            var num  = Number(value) + 1;
            value = document.getElementById("count-number-"+numb).value = num;
            var money = document.getElementById("money-"+numb).innerHTML;
            var dongia = document.getElementById("dongia-"+numb).innerHTML;
            document.getElementById("money-"+numb).innerHTML = dongia * value;// *Number(value);
          
         var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //do
               
            }
        };
        xhttp.open("GET", "../process/edit_cart.php?id="+numb+"&money_change="+document.getElementById("money-"+numb).innerHTML+"&sl="+value, true);
        xhttp.send();
    }

    function hovermouse(obj){ //lúc rê chuột thì tăng kích thước cái button 
        obj.style.width = "150px";    //từ 50 lên 150px

    }

    function unhovermouse(obj){
        obj.style.width = "50px"; // cái này là giảm khi rê chuột ra khỏi button
    }
    window.addEventListener('scroll', function() {
      if( this.scrollY >50)
        {
            document.getElementById("hed").style.transform = "scaleY(0.8)";// bóp nhỏ cái menu trên cùng
            document.getElementById("topmn").style.transform = "scaleY(0.8)";//bóp nhỏ menu chính
            document.getElementById("topmn").style.top = "-8px"; //lúc thu nhỏ nó bị lệch nên chỉnh lại 
            document.getElementById("hed").style.top = "23px";
        }
        else 
         {
             document.getElementById("hed").style.transform = "scaleY(1)"; //trả về kích cỡ ban đầu
             document.getElementById("topmn").style.transform = "scaleY(1)"; // trả về kích cỡ ban đầu
             document.getElementById("topmn").style.top = "0px";
            document.getElementById("hed").style.top = "40px";
         }
  });
        
        </script>
    </body>
</html>