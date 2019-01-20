<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LIÊN HỆ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="../style/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    </head>
    <body>
    <div class="container" id="cont">
        <?php
            require("header_child.php");
            require("connect.php"); 
            require("left.php");
       ?>
       
        <div class="main-body">
        
            <div class="right">
               <div class="title-main" >
                <i class="fas fa-arrow-right" style="color:green;">LIÊN HỆ</i>
               </div>
               <!------------->
               <div class="list">
               
                   <!--- noi dung-->
                </div>
               
               <!--------------->
                <div class="div-clear"></div>
            </div>
        </div>
        <div class="div-clear"></div>
        <?php
                require("footer.php");
        ?>
    </div>

    </body>
</html>