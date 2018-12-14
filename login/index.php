<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <title>Đăng nhập</title>
</head>
<body>
    <?php
        require("../common/connect.php");
        session_start();
    ?>

    <?php
        if(isset($_POST["login"])){
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "select * from users where Username = '".$username."' and Password = '".$password."'";

            $result = $mysqli->query($sql);
            $data_result = mysqli_fetch_assoc($result);


            if(mysqli_num_rows($result) != 0){
                $_SESSION["admin"] = $data_result["Username"];
                
                header("Location:../");
                exit();
            }else{
                echo '<script>
                    alert("Đăng nhập thất bại, vui lòng kiểm tra lại!!");
                </script>';
            }
    }
    ?>


    <h1 class="web-name">
    <a href="../" style="color:red;">    
             SHOES STORE
        </a>
    </h1>
    <div class="login-div">
        <div class="image">
            <img src="images/user.png" style="width: 100px;height:100px;"/><br>
            <span style="font-size:40px;color:green;"> Đăng nhập</span>
        </div>
        
        <div class="input-div">
            <form action="index.php" method="POST">
            <table>
                <tr><td><span class="fas fa-user"> Username </span></td></tr><br>
                <tr><td><input type="text" placeholder="Username" name="username"></td></tr><br>
                <tr><td><span  class="fas fa-key" > Password </span></td></tr><br>
                <tr><td><input type="password" placeholder="password" name="password"></td></tr><br>
                <hr>
                <tr style="text-align:center;"><td><input type="submit" value="Đăng nhập" name="login"></td></tr><br>
                <tr><th>Chưa có tài khoản? <a href="../register"> Đăng ký </a></th></tr><br>
            </table>
        </form>
        </div>
    </div>
</body>
</html>