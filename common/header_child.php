<div class="topmenu" id="topmn" >
            <ul class="ul-topmenu"> 
            <li>
                <div class="user">
                <?php
                    require("url.php");
                        session_start();
                        if(isset($_SESSION["admin"]) && $_SESSION["admin"] != ""){
                           echo '<a href="../admin/users-manager" class="user-item" style="color:green;">Manager('.$_SESSION["admin"].')</a>';
                        }
                        else if(isset($_SESSION["username"]) && $_SESSION["username"] != ""){
                            echo '<a href="#" class="user-item">Logout('.$_SESSION["username"].')</a>';
                        }else{
                ?>
                    <a href="../login" class="user-item">Login</a>
                    <a href="../register" class="user-item">Register</a>
                    <?php
                        }
                    ?>
                </div>
                </li>
                <li>
                    <form action="" method="GET">
                        <input type="text" name="key-word" placeholder="Search..."/>
                        <input type="submit" value="Search">
                    </form>
                </li>
                <li style="color:black;">Hotline: 0981240562 </li>
                <li>
                    <ul class="ul-topmenu">
                        <li style="color: blue ;"><i class="fab fa-facebook-square"></i></li>
                        <li style="color:#1da1f2"><i class="fab fa-twitter-square"></i></li>
                        <li style="color: red ;"><i class="fab fa-google-plus-square"></i></li>
                    </ul>
                </li>
                
            </ul>
        </div>
        
        <div class="header" id="hed">
            <div class="menu">
                <div class="logo">
                    <img src="../images/images/logo.png" style="width:80px;height:60px"/>
                </div>
                <div class="menu-main">
                    <ul class="ul-menu">
                        <li><a href="<?php echo $url;?>" class="menu-item-li">Trang chủ</a></li>
                        <li><a href="#" class="menu-item-li">Giày mới</a></li>
                        <li><a href="#" class="menu-item-li">Giày nam</a></li>
                        <li><a href="#" class="menu-item-li">Giày nữ</a></li>
                        <li><a href="#" class="menu-item-li">Khuyến mãi</a></li>
                        <li><a href="../carts"><i id="cart" style="font-size:25px;" class="fas fa-cart-plus"></i>Giỏ hàng</a></li>
                    </ul>
                </div>   
                
            </div>
        </div>