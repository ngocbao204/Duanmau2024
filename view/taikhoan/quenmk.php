<div class="row mb ">
    <div class="boxLeft mr ">
    <div class="row mb">
            <div class="boxtitle">LẤY LẠI MẬT KHẨU</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=quenmk" method="post">
                Email:
                <input type="email" name="email" id="">
                <br>
                <br>
               
                <input type="submit" value="Gửi" name="guiemail">
                <input type="reset" value="Nhập lại" id="">
                <h2 class="thongbao">
            <?php
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
        }

?>
</h2>
            </div>
            </form>
            
        </div>
        
        
        


    </div>
    <div class="boxRight ">
    <?php
        include "view/boxright.php";

?>
    </div>

</div>