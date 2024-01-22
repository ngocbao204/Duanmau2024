<div class="row">
    <div class="row mb">
    <div class="boxLeft mr">
    <div class="row mb">
        <div class="boxtitle">CẢM ƠN</div>
        <div class="row boxcontent" style="text-align: center;">
            <h2>Cảm ơn quý khách đã đặt hàng!</h2>
    </div>
</div>
    <?php 
        if(isset($bill)&&(is_array($bill))){
            extract($bill);
        }
    ?>

<div class="row mb">
        <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
        <div class="row boxcontent" style="text-align: center;">
        <li>- Mã đơn hàng: DAM-<?=$bill['id'];?></li>
        <li>- Ngày đặt hàng: <?=$bill['ngaydathang'];?></li>
        <li>- Tổng đơn hàng: <?=$bill['total'];?></li>
        <li>- Phương thức thanh toán: <?=$bill['bill_pttt'];?></li>
        </div></div>

            <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row boxcontent billfrom">
                <table>
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
                        <td><?=$bill['bill_name'];?></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td><?=$bill['bill_address'];?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?=$bill['bill_email'];?></td>
                    </tr>
                    <tr>
                        <th>Điện thoại</th>
                        <td><?=$bill['bill_tel'];?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mb mb10 frmdsloai">
        <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
        <div class="row boxcontent cart ">
            <table style="text-align: center;">
                <?php 
                    bill_chitiet($billct);
                ?>
                 </table>
                </div>
        </div>
    </div>
    <div class="boxRight">
        <?php include "view/boxright.php" ?>
    </div>
</div>
</div>