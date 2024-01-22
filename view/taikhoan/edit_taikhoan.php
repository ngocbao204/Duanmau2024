<div class="row mb ">
    <div class="boxLeft mr ">
    <div class="row mb">
            <div class="boxtitle">CẬP NHẬT THÔNG TIN</div>
            <div class="row boxcontent formtaikhoan">
                <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);

                }
                
            
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                Email:
                <input type="email" name="email" id="" value="<?=$email?>">
                <br>
                <br>
                Username:
                <input type="text" name="user" id="" value="<?=$user?>">
                <br>
                <br>
                Password:
                <input type="password" name="pass" id="" value="<?=$pass?>">
                <br>
                <br>
                Địa chỉ:
                <input type="text" name="address" id="" value="<?=$address?>">
                <br>
                <br>
                Điện thoại:
                <input type="text" name="tel" id="" value="<?=$tel?>">
                <br>
                <br>
                <input type="hidden" name="id" id="" value="<?=$id?>">
                <input type="submit" value="Cập nhật tài khoản" name="capnhat">
                <input type="reset" value="Nhập lại" id="">
            </div>
            </form>
            <h2 class="thongbao">
            <?php
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
        }

?>
</h2>
        </div>
        
        
        


    </div>
    <div class="boxRight ">
    <?php
        include "view/boxright.php";

?>
    </div>

</div>