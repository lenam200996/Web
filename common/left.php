<div class="left">
                
               <div class="category">
                   <ul class="group-list" >
                       <li class="title active" style="text-align:center;line-height: 30px;font-weight:700;">DANH MỤC SẢN PHẨM</li>
                        <?php 
                                $sql_left = "select CategoryName from categories ";

                                $result_left = $mysqli->query($sql_left);
                                while($data_result_left = $result_left->fetch_assoc())
                                { 
                                    ?>
                                         <li class="title item"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i><?php echo $data_result_left["CategoryName"]; ?></li>
                                    <?php
                                    
                                }
                                
                        ?>
                   </ul>
               </div>
               <div class="news">
               <hr>
               <ul class="group-list">
                       <li class="title active" style="text-align:center;line-height: 30px;font-weight:700;"> TIN TỨC </li>
                       <li class="title item"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i> Converse Star Eyercw Cut Out</li>
                       <li class="title item"><i class="fas fa-atom" style="margin: 0 10px 0 10px;"></i>Giày Chuck Taylor </li>
                   </ul>
               </div>
               <div class="news">
               <hr>
               <ul class="group-list">
                       <li class="title active" style="text-align:center;line-height: 30px;font-weight:700;">MAP</li>
                       <li class="title last" style="height:200px;">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1935958.6772653137!2d102.6143093625!3d18.611453783306406!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cdde5e40a551%3A0x543b433120d5699b!2zVHJ1bmcgdMOibSBDTlRUIC0gVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWaW5o!5e0!3m2!1svi!2s!4v1539440468030" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                       </li>
                   </ul>
               </div>
            </div>