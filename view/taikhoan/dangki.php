<div class="row mb ">
    <div class="boxLeft mr ">
    <div class="row mb">
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                Email:
                <input type="email" name="email" id="">
                <br>
                <br>
                Username:
                <input type="text" name="user" id="">
                <br>
                <br>
                Password:
                <input type="password" name="pass" id="">
                <br>
                <br>
                <input type="submit" value="Đăng ký" name="dangky">
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