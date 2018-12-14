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
       ?>
       
       
        <div class="main-body">
        
        <?php
                require("../common/left.php");
            ?>
            <div class="right" style="color: gray">
               <div class="title-main" >
                <i class="fas fa-arrow-right" style="color:green;"> Sản phẩm</i>
               </div>
               <!------------->
               <div class="list">


                          <div class="item-list">
                            <div class="image-product">
                                <img src="../images/products/a1.jpg" class="image-pro"/>
                            </div>
                            <div class="intro">
                                <span>Tên sản phẩm</span><hr>
                                <span>Mô tả</span><hr>
                                <span>Đơn giá</span><hr>
                                <span>Màu sắc</span>
                            </div>
                            <div class="countPro">
                                <div class="dongia">
                                    <span>Số lượng</span>
                                </div>
                                <div class="soluong">
                                    <button onclick="countsub(1)" class="fas fa-minus-circle" 
                                    style="width:20px;height:20px;
                                    background:none;
                                    border:none;
                                    outline:none;
                                    cursor:pointer;"> </button>
                                    <input type="number" name="count" id="count-number-1" value="1"
                                     style="border:.5px solid lightgray;
                                     width:40px;height:20px;
                                     font-size:15px;
                                     text-align:center;
                                     border-radius:9px;
                                     outline:none;">
                                    <button onclick="countplus(1)" class="fas fa-plus-circle"
                                     style="width:20px;height:20px;
                                     background:none;
                                     border:none;
                                     outline:none;
                                     cursor:pointer;"></button>
                                </div>
                                <div class="thanhtien">
                                    <span id="money-1">500000</span> đồng
                                </div>
                            </div>
                          </div>


                          <div class="item-list">
                            <div class="image-product">
                                <img src="../images/products/a2.jpg" class="image-pro"/>
                            </div>
                            <div class="intro">
                                <span>Tên sản phẩm</span><hr>
                                <span>Mô tả</span><hr>
                                <span>Đơn giá</span><hr>
                                <span>Màu sắc</span>
                            </div>
                            <div class="countPro">
                                <div class="dongia">
                                    <span>Số lượng</span>
                                </div>
                                <div class="soluong">
                                    <button onclick="countsub(2)" class="fas fa-minus-circle" 
                                    style="width:20px;height:20px;
                                    background:none;
                                    border:none;
                                    outline:none;
                                    cursor:pointer;"> </button>
                                    <input type="number" name="count" id="count-number-2" value="1"
                                     style="border:.5px solid lightgray;
                                     width:40px;height:20px;
                                     font-size:15px;
                                     text-align:center;
                                     border-radius:9px;
                                     outline:none;">
                                    <button onclick="countplus(2)" class="fas fa-plus-circle"
                                     style="width:20px;height:20px;
                                     background:none;
                                     border:none;
                                     outline:none;
                                     cursor:pointer;"></button>
                                </div>
                                <div class="thanhtien">
                                    <span id="money-2">500000</span> đồng
                                </div>
                            </div>
                          </div>


                          <div class="item-list">
                            <div class="image-product">
                                <img src="../images/products/a3.jpg" class="image-pro"/>
                            </div>
                            <div class="intro">
                                <span>Tên sản phẩm</span><hr>
                                <span>Mô tả</span><hr>
                                <span>Đơn giá</span><hr>
                                <span>Màu sắc</span>
                            </div>
                            <div class="countPro">
                                <div class="dongia">
                                    <span>Số lượng</span>
                                </div>
                                <div class="soluong">
                                    <button onclick="countsub(3)" class="fas fa-minus-circle" 
                                    style="width:20px;height:20px;
                                    background:none;
                                    border:none;
                                    outline:none;
                                    cursor:pointer;"> </button>
                                    <input type="number" name="count" id="count-number-3" value="1"
                                     style="border:.5px solid lightgray;
                                     width:40px;height:20px;
                                     font-size:15px;
                                     text-align:center;
                                     border-radius:9px;
                                     outline:none;">
                                    <button onclick="countplus(3)" class="fas fa-plus-circle"
                                     style="width:20px;height:20px;
                                     background:none;
                                     border:none;
                                     outline:none;
                                     cursor:pointer;"></button>
                                </div>
                                <div class="thanhtien">
                                    <span id="money-3">500000</span> đồng
                                </div>
                            </div>
                          </div>


                        
               <!--------------->
                <div class="div-clear"></div>
                <div class="xacnhan">
                    <span  class="break">Số loại sản phầm: 3</span>
                    <span  class="break">Số lượng sản phẩm: 4</span>
                    <span  class="break">Tổng tiền: 1.000.000 đồng</span>
                    <button class="fas fa-check-circle btnChiTiet"> Xác nhận</button>
                    <button class="fas fa-ban btnChiTiet"> Để sau</button>
                    <button class="fas fa-trash-alt btnChiTiet"> Xóa tất cả</button>
                </div>
            </div>
        </div>
        <div class="div-clear"></div>
        <?php
                require("../common/footer.php");
            ?>
    </div>
    <script>
    function countsub(numb){// Hàm xử lý tăng giảm số lượng khi click vào button ,cái này là trừ

        var value = document.getElementById("count-number-"+numb).value;
        if(Number(value) > 1 ){
            var num  = Number(value) - 1;
            value = document.getElementById("count-number-"+numb).value = num;
            var money = document.getElementById("money-"+numb).innerHTML;
            document.getElementById("money-"+numb).innerHTML =  Number(money) -500000;
        }
       
    }

    function countplus(numb){ // đây là cộng
        var value = document.getElementById("count-number-"+numb).value;
            var num  = Number(value) + 1;
            value = document.getElementById("count-number-"+numb).value = num;
            var money = document.getElementById("money-"+numb).innerHTML;
            document.getElementById("money-"+numb).innerHTML =  Number(money) +500000;
        
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