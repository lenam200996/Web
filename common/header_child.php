<div class="topmenu" id="topmn" >
            <ul class="ul-topmenu"> 
            <li>
                <div class="user">
                <?php
                session_start();
                    require("url.php");
                    require("connect.php");
                      
                        if(isset($_SESSION["admin"]) && $_SESSION["admin"] != ""){
                           echo '<a href="../admin/users-manager" class="user-item" style="color:green;">Manager('.$_SESSION["admin"].')</a>';
                        }
                        else if(isset($_SESSION["user"]) && $_SESSION["user"] != ""){
                            echo '<a href="javascript:logout()" class="user-item">Logout('.$_SESSION["user"].')</a>';
                        }else{
                ?>
                    <a href="../login" class="user-item">Login</a>
                    <a href="../register" class="user-item">Register</a>
                    <?php
                        }
                        if(isset($_SESSION["id_user"])){
                        $sql_count = "select count(*) as sl from orders join orderdetails on orderdetails.OrderID = orders.OrderID where paid = 0 and CustemerID = ".$_SESSION["id_user"];
                       
                        $rs = $mysqli->query($sql_count);
                        $data = $rs->fetch_assoc();
                        }
                    ?>
                </div>
                </li>
                <li>
                    <form action="" method="GET">
                        <input type="text" name="key-word" placeholder="Search..."/>
                        <input type="submit" value="Search">
                        <?php if(isset($_GET["id"])){
                        echo '<input type="hidden" name="id" value="'.$_GET["id"].'"/>';}
                            else if(isset($_GET["id_products"])){
                                echo '<input type="hidden" name="id_products" value="'.$_GET["id_products"].'"/>';
                            }
                        ?>
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
                        <li><a href="<?php echo $url;?>/common/about.php" class="menu-item-li">Giới thiệu</a></li>
                        <li><a href="<?php echo $url;?>/common/contact.php" class="menu-item-li">Liên hệ</a></li>
                        <li><a href="<?php echo $url;?>#new" class="menu-item-li">Giày mới</a></li>
                        <li><a href="<?php echo $url;?>/gender?id=M" class="menu-item-li">Giày nam</a></li>
                        <li><a href="<?php echo $url;?>/gender?id=F" class="menu-item-li">Giày nữ</a></li>
                        <li><a href="<?php echo $url;?>/category?id=sale" class="menu-item-li">Khuyến mãi</a></li>
                        <li><a href="../carts"><i id="cart" style="font-size:25px; transition: all 0.2s;" class="fas fa-cart-plus"></i>Giỏ hàng</a><span style="border:1px solid red;border-radius: 5px;background-color: red;color: white;    padding: 0 2px 0 2px;" id="count_cart"><?php if(isset($_SESSION["id_user"])) echo $data["sl"];else echo 0;?></span></li>
                    </ul>
                </div>   
                
            </div>
        </div>
        <div class="div-clear"></div>
        <script>
    function logout(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //do
                    location.reload();
                }
            };
            xhttp.open("GET", "../process/logout.php", true);
            xhttp.send();
            }
        

</script>