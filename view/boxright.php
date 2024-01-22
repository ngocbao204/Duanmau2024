<div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                    ?>
                        <div class="row mb10">
                            Xin chào :  <br>
                        <h1 class="xinchao"><?=$user?></h1> 
                        </div>
                        <div class="row mb10">
                            <li>
                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                            </li>
                            <?php
                            if($role==1){
                            ?>
                            <li>
                                <a href="admin/index.php">Đăng nhập admin</a>
                            </li>
                            <?php }  ?>
                            <li>
                                <a href="index.php?act=thoat">Đăng xuất</a>
                            </li>
                        </div>

                    
                    <?php 
                        }else{ 
                    ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">

                            Tên đăng nhập <br>
                            <input type="text" name="user" id="">
                            
                        </div>
                        <div class="row mb10">

                            Mật Khẩu <br>
                            <input type="password" name="pass" id=""> 

                        </div>
                        <div class="row mb10">

                            <input type="checkbox" name="" id=""> Ghi nhớ tài khoản ? 

                        </div>
                        <div class="row mb10">

                            <input type="submit" value="Đăng nhập" id="" name="dangnhap">

                        </div>
                        </form>

                        <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký thành viên</a>
                        </li>
                    
                        
                        <?php }?>


                    </div>
                </div>




                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                          <ul>
                            <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linksp="index.php?act=sanpham&iddm=".$id;
                            echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                            # code...
                        }


?>
                            <!-- <li><a href="#">Iphone</a></li>
                          

                          
                            <li><a href="#">SamSung</a></li>
                          


                          
                            <li><a href="#">Macbook</a></li>
                          

                          
                            <li><a href="#">Đồng hồ</a></li>
                          
                         
                            <li><a href="#">Laptop</a></li>
                           
                          
                            <li><a href="#">Xiaomi</a></li>
                           
                          
                            <li><a href="#">Redmi</a></li>
                           
                          
                            <li><a href="#">Nokia</a></li>
                           
                          
                            <li><a href="#">Oppo</a></li>
                          
                          
                            <li><a href="#">Vertu</a></li> -->
                          </ul>  

                    </div>
                    <div class="boxfooter searchbox">
                        <form action="index.php?act=sanpham" method="post">
                            <div class="h">
                            <div class="h1"><input type="text" name="kyw1" id="" placeholder="Tìm kiếm"></div>
                            <div class="h2"><input type="submit" name="timkiem" value="Search"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <?php
                    foreach ($dstop10 as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $img=$img_part.$img;
                        echo '<div class="row mb10 top10">
                        <a href="'.$linksp.'"> <img src="'.$img.'" alt="" width="100%" height="100%"> </a>
                        <a href="'.$linksp.'">'.$name_sanpham.'</a>
                    </div>';
                    }


?>
                        <!-- <div class="row mb10 top10">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                            <a href="#">iPHONE 13 PRO MAX</a>
                        </div>

                        <div class="row mb10 top10">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                            <a href="#">iPHONE 13 PRO MAX</a>
                        </div>

                        <div class="row mb10 top10">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                            <a href="#">iPHONE 13 PRO MAX</a>
                        </div>

                        <div class="row mb10 top10">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                            <a href="#">iPHONE 13 PRO MAX</a>
                        </div>

                        <div class="row mb10 top10">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                            <a href="#">iPHONE 13 PRO MAX</a>
                        </div>

                        <div class="row mb10 top10">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                            <a href="#">iPHONE 13 PRO MAX</a>
                        </div>

                        <div class="row mb10 top10">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                            <a href="#">iPHONE 13 PRO MAX</a>
                        </div>

                        <div class="row mb10 top10">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                            <a href="#">iPHONE 13 PRO MAX</a>
                        </div>

                        <div class="row mb10 top10">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                            <a href="#">iPHONE 13 PRO MAX</a>
                        </div>

                        <div class="row mb10 top10">
                            <img src="view/image/h1.jpg" alt="" width="100%" height="100%">
                            <a href="#">iPHONE 13 PRO MAX</a>
                        </div> -->

                    </div>
                </div>