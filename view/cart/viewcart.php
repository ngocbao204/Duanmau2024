<!-- <style>
    .cart-boxcontent {
    max-height: 400px; /* Điều chỉnh giá trị tùy theo nhu cầu */
    overflow-y: auto; /* Hiển thị thanh cuộn nếu nội dung vượt quá max-height */
} -->
</style>
<div class="row mb">
    <div class="boxLeft mr">
        <div class="row mb">
            <div class="boxtitle">DANH SÁCH SẢN PHẨM TRONG GIỎ HÀNG</div>
            <div class="row boxcontent cart mb10 frmdsloai ">
            <table style="text-align: center;">        
                    <?php 
                       viewcart(1);
                    ?>
                 </table>
                </div>
                </div>
                 <div class="row mb bill">
                 <a href="index.php?act=bill"> <input type="button" value="Tiếp Tục Đặt Hàng"> </a> <a href="index.php?act=delcart"> <input type="button" value="Xóa Giỏ Hàng"></a>
            <a href="index.php"> <input type="button" value="Trang Mua Hàng"></a>
        </div>
        </div>
       
        <div class="boxRight">
        <?php include "view/boxright.php"?>
    </div>
</div>