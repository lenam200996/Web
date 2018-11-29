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
        <div class="topmenu" id="topmn" >
            <ul class="ul-topmenu"> 
            <li>
                <div class="user">
                    <a href="login" class="user-item">Login</a>
                    <a href="register" class="user-item">Register</a>
                </div>
                </li>
                <li>
                    <form action="" method="GET">
                        <input type="text" name="key-word" placeholder="Search..."/>
                        <input type="submit" value="Search">
                    </form>
                </li>
                <li>Hotline: 0981240562 </li>
                <li>
                    <ul class="ul-topmenu">
                        <li style="color: blue ;"><i class="fab fa-facebook-square"></i></li>
                        <li ><i class="fab fa-twitter-square"></i></li>
                        <li style="color: red ;"><i class="fab fa-google-plus-square"></i></li>
                    </ul>
                </li>
                
            </ul>
        </div>
        
        <div class="header" id="hed">
            <div class="menu">
                <div class="logo">
                    <img src="images/images/logo.png" style="width:80px;height:60px"/>
                </div>
                <div class="menu-main">
                    <ul class="ul-menu">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giày mới</a></li>
                        <li><a href="#">Giày nam</a></li>
                        <li><a href="#">Giày nữ</a></li>
                        <li><a href="#">Khuyến mãi</a></li>
                        <li><i id="cart" style="font-size:25px;" class="fas fa-cart-plus"></i></li>
                    </ul>
                </div>   
                
            </div>
        </div>
        <div id="mybanner">
        <!-- 
                <img src="images/banner.png" style="width:100%;height:200px;"/> -->

                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="images/slide/baner.jpg" style="width:100%;height:250px;">
                        <div class="text"> *** CHÀO MỪNG BẠN TỚI VỚI THẾ GIỚI GIÀY *** </div>
                    </div>
                    
                    <div class="mySlides fade">
                        <img src="images/slide/banner7.jpg" style="width:100%;height:250px;">
                        <div class="text">*** CHƯƠNG TRÌNH ƯU ĐÃI *** </div>
                    </div>
                    
                    <div class="mySlides fade">
                        <img src="images/slide/baner.jpg" style="width:100%;height:250px;">
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
        
            <div class="left">
                
               <div class="category">
                   <ul class="group-list" >
                       <li class="title active" style="text-align:center;line-height: 30px;">DANH MỤC SẢN PHẨM</li>
                       <li class="title item"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i>Giày Adidas cao cấp</li>
                       <li class="title item"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i>Giày Nike cao cấp</li>
                       <li class="title item"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i>Giày Balenciage</li>
                       <li class="title item"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i>Giày New Balance</li>
                       <li class="title item"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i>Giày Converse</li>
                       <li class="title item"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i>Giày Puma</li>        
                       <li class="title item last"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i>Giày Vans</li>
                   </ul>
               </div>
               <div class="news">
               <ul class="group-list">
                       <li class="title active" style="text-align:center;line-height: 30px;"> TIN TỨC </li>
                       <li class="title item"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i> Converse Star Eyercw Cut Out</li>
                       <li class="title item last"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i>Giày Chuck Taylor </li>
                   </ul>
               </div>
               <div class="news">
               <ul class="group-list">
                       <li class="title active" style="text-align:center;line-height: 30px;">MAP</li>
                       <li class="title last" style="height:200px;">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1935958.6772653137!2d102.6143093625!3d18.611453783306406!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cdde5e40a551%3A0x543b433120d5699b!2zVHJ1bmcgdMOibSBDTlRUIC0gVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWaW5o!5e0!3m2!1svi!2s!4v1539440468030" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                       </li>
                   </ul>
               </div>
            </div>
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
                                <a href="details/" > Chi tiết </a>
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
                                <a href="details/">Chi tiết</a>
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
                                <a href="details/">Chi tiết</a>
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
                                <a href="details/">Chi tiết</a>
                            </div>
                          </div>  
                        </div>
                </div>


                <div class="div-clear"></div>
                <!----giay nam-->
                <div class="giay-nam">
                    <div class="title-main" style="color: blue" >
                            <a href="#"><i class="fas fa-arrow-right"></i> Giày nam</a>
                    </div>

                         <div class="item-list">
                       <div class="image-product">
                           <img src="images/products/sp16.png" class="image-pro"/>
                       </div>
                       <div class="info-product">
                            Tên: Prophere full black  <br>
                           Mô tả: Super fake <br>
                           giá: <span style="color:red">1 000 000</span><br>
                           <a href="details/">Chi tiết</a>
                       </div>
                   </div>


                   <div class="item-list">
                      <div class="image-product">
                           <img src="images/products/sp18.jpg" class="image-pro"/>
                       </div>
                       <div class="info-product">
                            Tên: Prophere<br>
                           Mô tả: Trắng hồng <br>
                           giá: <span style="color:red">950 000</span><br>
                           <a href="details/">Chi tiết</a>
                       </div>
                   </div>


                   <div class="item-list">
                      <div class="image-product">
                           <img src="images/products/a22.jpg" class="image-pro"/>
                       </div>
                       <div class="info-product">
                            Tên: Propher - Replica <br>
                           Mô tả: Phong cách  <br>
                           giá: <span style="color:red">1 300 000</span><br>
                           <a href="details/">Chi tiết</a>
                       </div>
                   </div>


                   <div class="item-list">
                        <div class="image-product">
                           <img src="images/products/sp20.jpg" class="image-pro"/>
                        </div>
                        <div class="info-product">
                            Tên: Prophere xám<br>
                           Mô tả: Style <br>
                           giá: <span style="color:red">1 200 000</span><br>
                           <a href="details/">Chi tiết</a>
                        </div>
                   </div>

                </div>



                 <!----giay nu-->
                <div class="giay-nam">
                    <div class="title-main" style="color: blue">
                            <a href="#"><i class="fas fa-arrow-right"></i> Giày nữ</a>
                    </div>


                    <div class="item-list">
                       <div class="image-product">
                           <img src="images/products/a9.jpg" class="image-pro"/>
                       </div>
                       <div class="info-product">
                           Tên: Sản phẩm 1<br>
                           Mô tả: mô tả <br>
                           giá: <span style="color:red">650 000</span><br>
                           <a href="details/" >Chi tiết</a>
                       </div>
                   </div>


                   <div class="item-list">
                       <div class="image-product">
                           <img src="images/products/a13.jpg" class="image-pro"/>
                       </div>
                       <div class="info-product">
                            Tên: Sản phẩm 2<br>
                           Mô tả: mô tả <br>
                           giá: <span style="color:red">870 000</span><br>
                           <a href="details/">Chi tiết</a>
                       </div>
                   </div>




                       <div class="item-list">
                          <div class="image-product">
                           <img src="images/products/a11.jpg" class="image-pro"/>
                          </div>
                          <div class="info-product">
                           Tên: Yeezy-350 <br>
                           Mô tả: vải <br>
                           giá: <span style="color:red">750 000</span><br>
                           <a href="details/" >Chi tiết</a>
                          </div>
                       </div>


                       <div class="item-list">
                          <div class="image-product">
                           <img src="images/products/a6.jpg" class="image-pro"/>
                          </div>
                          <div class="info-product">
                            Tên: XPRL<br>
                           Mô tả: Form gọn chân<br>
                           giá: <span style="color:red">1 000 000</span><br>
                           <a href="details/">Chi tiết</a>
                          </div>
                       </div>
                

                </div>


                <div class="div-clear"></div>
              
                <div class="paging">
                    <ul class="ul-paging">
                        <li style="border-left: .1px solid lightslategray;" >Prev</li>
                        <li class="act">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>Next</li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="div-clear"></div>
        <div class="footer" style= "color: lightgray">
            <div class="column">
                    Thông tin về shop Huyền Lê Sport<br/>
                    Liên hệ: 0981240562<br>
                    Địa chỉ: 10 Phạm Kinh vỹ<br>
                    Mail: huyenle220797@gmail.com
            </div>
            <div class="column">
                    Giải đáp thắc mắc<br>
                    Các câu hỏi thường gặp<br>
                    Các thông tin cần biết
            </div>
            <div class="column">
                    Chính sách bảo mật<br>
                    Hướng dẫn sử dụng<br>
                    Trợ giúp
            </div>
        </div>
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