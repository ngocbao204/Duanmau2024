<div class="row mb">
    <div class="boxLeft mr">


    <div class="row mb">
        <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
        <div class="row boxcontent cart">
            <table style="text-align: center;">
                <tr>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>SỐ LƯỢNG MẶT HÀNG</th>
                    <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TRẠNG THÁI ĐƠN</th>
                </tr>
                <?php 
                    if(is_array($listbill)){
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill['id']);
                          echo'  <tr>
                            <td>DAM-'.$bill['id'].'</td>
                            <td>'.$bill['ngaydathang'].'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$bill['total'].'</td>
                            <td>'.$ttdh.'</td>
                            </tr>';
                        }
                    }
                ?>
                
            </table>
        </div>
    </div>
    </div>
    <div class="boxRight">
        <?php include "view/boxright.php";?>
    </div>
</div>