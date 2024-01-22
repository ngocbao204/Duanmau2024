<div class="row mb ">
            <div class="boxLeft mr ">
            <div class="row mb">
               
                    <div class="boxtitle">SẢN PHẨM <strong><?=$tendm?></strong></div>
                    <div class="row boxcontent">
                      <?php
                       $i=0;
                       foreach ($dssp as $sp) {
                          extract($sp);
                          $linksp="index.php?act=sanphamct&idsp=".$id;
                          $hinh=$img_part.$img;
                          if(($i==3)||($i==5)||($i==8)||($i==11)){
                           $mr="mr";
                          }else{
                           $mr="";
                          }
                          echo '<div class="boxproduct '.$mr.'">
                               <div class="row img">
                               <a href="'.$linksp.'"> <img  src="'.$hinh.'" alt="" width="100%" height="100%"></a>
                           </div>
                               <p>$'.$price.'</p>
                               <a href="'.$linksp.'">'.$name_sanpham.'</a>
                           </div>';
                           
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