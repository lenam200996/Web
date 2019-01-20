<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <title>Đăng ký</title>
</head>
<body>
    <h1 class="web-name">
        <a href="../">    
             SHOES STORE
        </a>
    </h1>
    <div class="login-div"> <br>  
            <span style="font-size:40px;color:green;">ĐĂNG KÝ</span>
        <div class="input-div">
            <table>
                <tr><td><span class="fas fa-user"> Username</span></td></tr><br>
                <tr><td><input type="text" placeholder="Username" id="us"></td></tr><br>
                <tr><td><span  class="fas fa-key" > Password</span></td></tr><br>
                <tr><td><input type="password" placeholder="password" id="pw"></td></tr><br>
                <tr><td><span  class="fas fa-key" >Re-password</span></td></tr><br>
                <tr><td><input type="password" placeholder="re-password" id="re_pw"></td></tr><br>
                <tr><td><span  class="fas fa-envelope" >Firstname</span></td></tr><br>
                <tr><td><input type="text" placeholder="Fisrtname" id="fn"></td></tr><br>
                <tr><td><span  class="fas fa-envelope" >Lastname</span></td></tr><br>
                <tr><td><input type="text" placeholder="Lastname" id="ln"></td></tr><br>
                <tr><td><span  class="fas fa-envelope" >Address</span></td></tr><br>
                <tr><td><input type="text" placeholder="Address" id="addr"></td></tr><br>
                <tr><td><span  class="fas fa-envelope" >Phone</span></td></tr><br>
                <tr><td><input type="text" placeholder="Phone" id="phone"></td></tr><br>
                <tr><td><span  class="fas fa-envelope" >Gmail</span></td></tr><br>
                <tr><td><input type="text" placeholder="Gmail" id="gm"></td></tr><br>
                <tr style="text-align:center;"><td><input id="btn" type="submit" value="Đăng ký"style="color:white;"></td></tr><br>
                <br>
                <tr style="text-align: center;"><td>Đã có tài khoản? <a href="../login" >Đăng nhâp</a></td></tr><br>
            </table>
        </div>
    </div>
<script>
    window.onload = function() {
                document.getElementById("btn").addEventListener("click", js);

                function js() {
                    var us = document.getElementById("us").value;
                    var pw = document.getElementById("pw").value;
                    var re_pw = document.getElementById("re_pw").value;
                    var gm = document.getElementById("gm").value;
                    var fn = document.getElementById("fn").value;
                    var ln = document.getElementById("ln").value;
                    var addr = document.getElementById("addr").value;
                    var phone = document.getElementById("phone").value;
                    var xhttp = new XMLHttpRequest();
                   xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            alert(this.responseText);
                            var conf = confirm("Đăng nhập ngay?");
                            if(conf){
                                location.replace('../login');
                            }
                        }
                    };
                    xhttp.open("GET", "../process/register.php?us="+us+"&pw="+pw+"&re_pw="+re_pw+"&gm="+gm+"&fn="+fn+"&ln="+ln+"&addr="+addr+"&phone="+phone, true);
                    xhttp.send();
                }
            }
    
</script>
</body>
</html>