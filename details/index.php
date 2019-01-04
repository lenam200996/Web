<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    <link rel="stylesheet" type="text/css" href="../style/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <title>Chi tiết sản phẩm</title>
</head>
<body>
<div class="container" id="cont">
        <?php
            require("../common/header_child.php");
            require("../common/connect.php");
            session_start();
            $_GET["count"] = 1;
       ?>
      
       
        <div class="main-body">
        
        <?php
                require("../common/left.php");
            ?>
             <?php
            if(isset($_GET["id_products"])){
             $sql = "select * from products where ProductID =  ".$_GET["id_products"];

             $result = $mysqli->query($sql);
             $data_result = mysqli_fetch_assoc($result);
            }
       ?>
            <div class="right">
               <div class="title-main" >
               <a href="#"><i class="fas fa-arrow-right"></i> CHI TIẾT SẢN PHẨM</a>
               </div>
               <!------------->
               <div>
                   <div class="image-details">
                       <img src="../images/products/<?php echo $data_result["image"]; ?>" style="width: 80%;height: 70%"/><br>
                       <p>Hình ảnh sản phẩm</p>
                   </div>
                   <div class="details">
                        <p style="font-size:25px;margin-top:20px;text-transform: uppercase;"><?php echo $data_result["ProductName"];?></p>
                       <table style="text-align:left;margin: 10px 0 10px 0;width:100%;">
                           
                           <tr style="height: 20px;"></tr>
                           <tr><td><hr></td><td><hr></td></tr>
                           <tr style="height: 20px;"></tr>
                           <tr>
                       <td class="col-1"><?php if($data_result["sale"] == 1) {?><strike>Giá cũ: <?php  echo $data_result["Price"];?> <?php  echo $data_result["Unit"];?></strike> <br><br>Giá mới: <?php  echo $data_result["price_sale"];?><?php } else {?>
                        Giá: <?php  echo $data_result["Price"];}?><?php  echo $data_result["Unit"];?>
                    
                    </td>
                               <td class="col-2"></td>
                           </tr>
                           <tr style="height: 20px;"></tr>
                           <tr><td><hr></td><td><hr></td></tr>
                           <tr style="height: 20px;"></tr>
                           <tr>
                               <td class="col-1">Màu sắc: </td>
                               <td class="col-2">
                                    <ul style="list-style-type: none;">
                                        <li style="float:left;margin:10px;"><div style="width:20px;height: 20px; background-color: <?php echo $data_result["Color"]; ?>;"></div></li>
                                    </ul>
                                    <div class="div-clear"></div>
                               </td>
                           </tr>
                           <tr>
                               <td class="col-1">Kích thước: </td>
                               <td class="col-2">
                                    <ul style="list-style-type: none;">
                                        <li style="float:left;margin:10px;"><input type="radio" name="size"> <?php echo $data_result["Size"]; ?></li>
                                        
                                    </ul>
                                    <div class="div-clear"></div>
                               </td>
                           </tr>
                           <tr>
                               <td class="col-1">Số lượng: </td>
                               <td class="col-2">
                               <div class="count">

                                    <button onclick="countsub(<?php  if($data_result['sale'] == 0) echo $data_result['Price'];
                                        else echo $data_result['price_sale'];
                                    ?>
                                    )" class="fas fa-minus-circle" 
                                    style="width:20px;height:20px;
                                    background:none;
                                    border:none;
                                    outline:none;
                                    cursor:pointer;">
                                    </button>

                                    <input type="number" name="count" id="count-number" value="1"
                                     style="border:.5px solid lightgray;
                                     width:40px;height:20px;
                                     font-size:15px;
                                     text-align:center;
                                     border-radius:9px;
                                     outline:none;">

                                    <button onclick="countplus(<?php if($data_result['sale'] == 0) echo $data_result['Price'];
                                        else echo $data_result['price_sale'];?>
                                        )" class="fas fa-plus-circle"
                                     style="width:20px;height:20px;
                                     background:none;
                                     border:none;
                                     outline:none;
                                     cursor:pointer;">
                                     </button>

                                </div>
                               </td>
                           </tr>
                           <tr>
                               <td class="col-1">Tổng tiền: </td>
                               <td class="col-2">
                                    <span id="total-money"><?php  if($data_result['sale'] == 0) echo $data_result['Price'];
                                        else echo $data_result['price_sale'];?></span><?php  echo $data_result["Unit"];?>
                               </td>
                           </tr>
                           <tr>
                               <td class="col-1"></td>
                               <td class="col-2"> <!--class để button có thêm cái icon bên trong -->
                                    <button class="fas fa-cart-arrow-down" 
                                    style="
                                    overflow:hidden;
                                    margin: 0 10px 0 10px;
                                    width:50px;
                                    height:37px;
                                    transition:all .2s;
                                    border:.5px solid lightblue;
                                    background:none;
                                    outline:none;
                                    padding:5px;
                                    background-color: white;
                                    border-radius: 9px;
                                    cursor:pointer;
                                    " 
                                    onmouseover="hovermouse(this)" onmouseout="unhovermouse(this)"
                                    onclick="addCart(<?php echo trim($data_result['ProductID']) ;?> 
                                   
                                    )"
                                    > 
                                   
                                     
                                        <p id="label-button" style="font-size:15px;">Thêm vào giỏ hàng</p>  
                                    </button>
                                    <button class="far fa-credit-card" 
                                    style="overflow:hidden;
                                    margin: 0 10px 0 10px;
                                    width:50px;height:37px;
                                    transition:all .2s;
                                     border:.5px solid lightblue;
                                     background:none;
                                     outline:none;
                                    padding:5px;
                                    background-color: white;
                                    font-weight: 700;
                                    border-radius: 9px;
                                    cursor:pointer;
                                    " onmouseover="hovermouse(this)"  onmouseout="unhovermouse(this)">
                                        <p id="label-button" style="font-size:15px;">Mua ngay</p>  
                                    </button>
                               </td>
                           </tr>
                           <tr>
                               <td class="col-1">Chính sách giao hàng</td>
                               <td class="col-2">
                                   Giao hàng nhanh 
                               </td>
                           </tr>
                       </table>
                       
                   </div>
                   
               </div>
               <div class="details-product" style="text-align: center;" >
                        <p>     Chi tiết sản phầm  </p>
                        <span id="demo"></span>
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

    function addCart(id){
        var money = document.getElementById("total-money").innerHTML;
        var quantiny =  document.getElementById("count-number").value;
        var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").style.display = "block";


      document.getElementById("demo").innerHTML =
      this.responseText.substring(0,22);
      document.getElementById("cart").style.fontSize  = "40px";
      document.getElementById("count_cart").innerHTML = this.responseText.substring(22);
      
    }
  };
  xhttp.open("GET", "../process/add_cart.php?id="+id+"&money="+money+"&quantiny="+quantiny, true);
  xhttp.send();
  setTimeout(() => {
    document.getElementById("demo").style.display = "none";
    document.getElementById("cart").style.fontSize  = "25px";
  }, 2000);
    }

    function countsub(money){// Hàm xử lý tăng giảm số lượng khi click vào button ,cái này là trừ

        var value = document.getElementById("count-number").value;
        if(Number(value) > 1 ){
            var num  = Number(value) - 1;
            value = document.getElementById("count-number").value = num;
            document.getElementById("total-money").innerHTML =  money*value;
        }
        console.log(num);
    }

    function countplus(money){ // đây là cộng
        var value = document.getElementById("count-number").value;
            var num  = Number(value) + 1;
            value = document.getElementById("count-number").value = num;
         
            document.getElementById("total-money").innerHTML =  money *value;
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

        <script>
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" activedot", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " activedot";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 5s
      setTimeout(showSlides, 5000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
</script>
</body>
</html>