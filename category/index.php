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
            ?>
            <div class="right">
               <div class="title-main" >
                <i class="fas fa-arrow-right" style="color:green;"> CHI TIẾT SẢN PHẨM</i>
               </div>
               <!------------->
               <div class="list">


                          <div class="item-list">
                            <div class="image-product">
                                <img src="../images/products/a1.jpg" class="image-pro"/>
                            </div>
                            <div class="info-product">
                                Tên: Prophere <br>
                                Mô tả: cực chất  <br>
                                giá: <span style="color:red">700.000</span><br>
                                <a href="details/" > Chi tiết </a>
                            </div>
                          </div>


                          <div class="item-list">
                            <div class="image-product">
                                <img src="../images/products/a2.jpg" class="image-pro"/>
                            </div>
                            <div class="info-product">
                                Tên: Utralboost đen<br>
                                Mô tả: cực êm<br>
                                giá: <span style="color:red"> 700 000 </span><br>
                                <a href="details/">Chi tiết</a>
                            </div>
                          </div>


                          <div class="item-list">
                            <div class="image-product">
                                <img src="../images/products/a3.jpg" class="image-pro"/>
                            </div>
                            <div class="info-product">
                                Tên: Adidas neo<br>
                                Mô tả: vải mềm <br>
                                giá: <span style="color:red">290 000</span><br>
                                <a href="details/">Chi tiết</a>
                            </div>
                          </div>


                        <div class="item-list">
                          <div class="image-product">
                                <img src="../images/products/a4.jpg" class="image-pro"/>
                            </div>
                            <div class="info-product">
                                Tên: Das XPRL <br>
                                Mô tả: supper fake <br>
                                giá: <span style="color:red">700 000</span><br>
                                <a href="details/">Chi tiết</a>
                            </div>
                          </div>  
                        </div>
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
    function countsub(){// Hàm xử lý tăng giảm số lượng khi click vào button ,cái này là trừ

        var value = document.getElementById("count-number").value;
        if(Number(value) > 1 ){
            var num  = Number(value) - 1;
            value = document.getElementById("count-number").value = num;
            var money = document.getElementById("total-money").innerHTML;
            document.getElementById("total-money").innerHTML =  Number(money) - 99;
        }
        console.log(num);
    }

    function countplus(){ // đây là cộng
        var value = document.getElementById("count-number").value;
            var num  = Number(value) + 1;
            value = document.getElementById("count-number").value = num;
            var money = document.getElementById("total-money").innerHTML;
            document.getElementById("total-money").innerHTML =  Number(money) + 99;
        console.log(num);
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