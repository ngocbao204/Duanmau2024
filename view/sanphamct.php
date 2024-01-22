<div class="row mb ">
            <div class="boxLeft mr ">
            <div class="row mb">
                <?php
                extract($onesp);

?>
                    <div class="boxtitle"><?=$name_sanpham?></div>
                    <div class="row boxcontent">
                      <?php
                      
                      $img=$img_part.$img;
                      echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                      echo $mota;
                      ?>

                    </div>
                </div>
                
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                
                <script>
                    $(document).ready(function(){
                        // nếu có nhiều giá trị thì ta sẽ cách khoảng với nhau bằng dấu ,
                        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                    });
                    
                </script>
                <div class="row" id="binhluan">

                  
                </div>


                <div class="row mb">
                    <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
                    <div class="row boxcontent">
                        <?php
                            foreach ($sp_cungloai as $sp_cungloai) {
                                extract($sp_cungloai);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                echo'<li><a href="'.$linksp.'">'.$name_sanpham.'</a></li>';
                            }

?>

                    </div>
                </div>


            </div>
            <div class="boxRight ">
            <?php
                include "boxright.php";

?>
            </div>

        </div>