<style>
    .boxtrai {
    float: left;
    width: 73%; 
}
.boxphai {
    float: right;
    width: 25%;
}
</style>
<div class="row mb">
    <div class="boxLeft">
        <form action="index.php?act=billcomfirm" method="post">
        <div class="row mb10">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row boxcontent billfrom">
                <table  style="text-align: center;">
                    <?php
                    if (isset($_SESSION['user'])) {
                        $user = $_SESSION['user']['user'];
                        $address = $_SESSION['user']['address'];
                        $email = $_SESSION['user']['email'];
                        $tel = $_SESSION['user']['tel'];
                    } else {
                        $user = "";
                        $address = "";
                        $email = "";
                        $tel = "";
                    }
                    ?>
                    <tr>
                        <th>Người đặt hàng</th>
                        <td><input type="text" name="user" value="<?= $user ?>"></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td><input type="text" name="address" value="<?= $address ?>"></td>
                    </tr>
                    <tr>
                        <th>Emial</th>
                        <td><input type="text" name="email" value="<?= $email ?>"></td>
                    </tr>
                    <tr>
                        <th>Điện thoại</th>
                        <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mb mb10 frmdsloai">
        <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
        <div class="row boxcontent">
            <table>
                <tr>
                    <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                    <td><input type="radio" name="pttt" checked>Chuyển khoản ngân hàng</td>
                    <td><input type="radio" name="pttt" checked>Thanh toán online</td>
                </tr>
            </table>
        </div>
        </div>
        <div class="row mb">
        <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
        <div class="row boxcontent cart mb10 frmdsloai">
            <table style="text-align: center;">
                    <?php 
                       viewcart(0);
                    ?>
                 </table>
                </div>
        </div>
            <div class="row mb bill">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
            </div></form>
    </div>
    <div class="boxRight">
        <?php include "view/boxright.php" ?>
    </div>
</div>