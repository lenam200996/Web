<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <title> Shoes Store </title>
</head>
<body>
    <div class="container" id="cont">
        <?php
            require("common/header.php");
            require("common/connect.php");
        ?>
        <div id="mybanner">
        <!-- 
                <img src="images/banner.png" style="width:100%;height:200px;"/> -->

                <div class="slideshow-container" >
                    <div class="mySlides fade">
                        <img src="images/slide/baner.jpg" style="width:100%;height:380px;">
                        <div class="text"> *** CHÀO MỪNG BẠN TỚI VỚI THẾ GIỚI GIÀY *** </div>
                    </div>
                    
                    <div class="mySlides fade">
                        <img src="images/slide/banner7.jpg" style="width:100%;height:380px;">
                        <div class="text">*** CHƯƠNG TRÌNH ƯU ĐÃI *** </div>
                    </div>
                    
                    <div class="mySlides fade">
                        <img src="images/slide/baner.jpg" style="width:100%;height:380px;">
                        <div class="text">*** SNEAKER GIÁ RẺ *** </div>
                    </div>
                </div>
                    <br>
                    
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(0)"></span> 
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                </div>
        </div>
        <div class="main-body">
        
            <?php
                require("common/left.php");
            ?>
            <div class="right">
                <div class="all">
                    <div class="title-main" >
                            <a href="#"><i class="fas fa-arrow-right"></i> Sản phẩm mới</a>
                    </div>
                        <div class="list">
                          <div class="item-list">
                            <div class="image-product">
                                <img src="images/products/a1.jpg" class="image-pro"/>
                            </div>
                            <div class="info-product">
                                Tên: Prophere <br>
                                Mô tả: cực chất  <br>
                                giá: <span style="color:red">700.000</span><br>
                                <a href="details/" >  <button class="btnChiTiet">Chi tiết</button> </a>
                               
                            </div>
                          </div>


                          <div class="item-list">
                            <div class="image-product">
                                <img src="images/products/a2.jpg" class="image-pro"/>
                            </div>
                            <div class="info-product">
                                Tên: Utralboost đen<br>
                                Mô tả: cực êm<br>
                                giá: <span style="color:red"> 700 000 </span><br>
                                <a href="details/" >  <button class="btnChiTiet">Chi tiết</button> </a>
                            </div>
                          </div>


                          <div class="item-list">
                            <div class="image-product">
                                <img src="images/products/a3.jpg" class="image-pro"/>
                            </div>
                            <div class="info-product">
                                Tên: Adidas neo<br>
                                Mô tả: vải mềm <br>
                                giá: <span style="color:red">290 000</span><br>
                                <a href="details/" >  <button class="btnChiTiet">Chi tiết</button> </a>
                            </div>
                          </div>


                        <div class="item-list">
                          <div class="image-product">
                                <img src="images/products/a4.jpg" class="image-pro"/>
                            </div>
                            <div class="info-product">
                                Tên: Das XPRL <br>
                                Mô tả: supper fake <br>
                                giá: <span style="color:red">700 000</span><br>
                                <a href="details/" >  <button class="btnChiTiet">Chi tiết</button> </a>
                            </div>
                          </div>  
                        </div>
                </div>


                <div class="div-clear"></div>
                <hr>
                <!----giay nam-->
                <div class="giay-nam">
                    <div class="title-main" style="color: blue" >
                            <a href="#"><i class="fas fa-arrow-right"></i> Giày nam</a>
                    </div>
                        <?php

                                $sql_giaynam = "select * from products where gender = 'M' or gender='FM' limit 8";

                                $result = $mysqli->query($sql_giaynam);
                                while($data_result = $result->fetch_assoc())
                                { 
                                    ?>
                                    <div class="item-list">
                                        <div class="image-product">
                                            <img src="images/products/<?php echo $data_result["image"];?>" class="image-pro"/>
                                        </div>
                                        <div class="info-product">
                                            Tên: <?php echo $data_result["ProductName"];?>  <br>
                                            Mô tả: <?php echo $data_result["Description"]; ?> <br>
                                            giá: <span style="color:red"><?php echo $data_result["Price"]; ?></span><br>
                                            <a href="details?id_products=<?php echo $data_result["ProductID"];?>" >  <button class="btnChiTiet">Chi tiết</button> </a>
                                        </div>
                                    </div>
                                    <?php
                                    
                                }
                        ?>
                    
                </div>


                <div class="div-clear"></div>
                <hr>
                 <!----giay nu-->
                <div class="giay-nam">
                    <div class="title-main" style="color: blue">
                            <a href="#"><i class="fas fa-arrow-right"></i> Giày nữ</a>
                    </div>


                    <?php

                            $sql_giaynam = "select * from products where gender = 'F' or gender='FM' limit 8";

                            $result = $mysqli->query($sql_giaynam);
                            while($data_result = $result->fetch_assoc())
                            { 
                                ?>
                                <div class="item-list">
                                    <div class="image-product">
                                        <img src="images/products/<?php echo $data_result["image"];?>" class="image-pro"/>
                                    </div>
                                    <div class="info-product">
                                        Tên: <?php echo $data_result["ProductName"];?>  <br>
                                        Mô tả: <?php echo $data_result["Description"]; ?> <br>
                                        giá: <span style="color:red"><?php echo $data_result["Price"]; ?></span><br>
                                        <a href="details?id_products=<?php echo $data_result["ProductID"];?>" >  <button class="btnChiTiet">Chi tiết</button> </a>
                                    </div>
                                </div>
                                <?php
                                
                            }
                    ?>

                </div>


                <div class="div-clear"></div>
              
                <!-- <div class="paging">
                    <ul class="ul-paging">
                        <li style="border-left: .1px solid lightslategray;" >Prev</li>
                        <li class="act">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>Next</li>
                    </ul>
                </div> -->
                
            </div>
        </div>
        <div class="div-clear"></div>
       <?php
            require("common/footer.php");
       ?>
    </div>
    <script>
    
    window.addEventListener('scroll', function() {
      if( this.scrollY >50)
        {
            document.getElementById("hed").style.transform = "scaleY(0.8)";
            document.getElementById("topmn").style.transform = "scaleY(0.8)";
            document.getElementById("topmn").style.top = "-8px";
            document.getElementById("hed").style.top = "23px";
        }
        else 
         {
             document.getElementById("hed").style.transform = "scaleY(1)";
             document.getElementById("topmn").style.transform = "scaleY(1)";
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