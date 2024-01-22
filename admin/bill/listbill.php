<div class="row">
            <div class="row frmtitle mb">
                <h1>DANH SÁCH ĐƠN HÀNG</h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw">
                    <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                        <?php
                    foreach ($listdanhmuc as $danhmuc) {
                       extract($danhmuc);
                       echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                        ?>
                        
                        </select>
                    <input type="submit" name="listok" id="" value="Go">
                </form>
            <div class="row frmcontent">
                
            <form action="#" method="post">
                <div class="row mb10 frmdsloai">
                    <table style="text-align: center;">
                        <tr>
                            <th>Chọn</th>
                            <th>Mã Đơn Hàng</th>
                            <th>Khách Hàng</th>
                            <th>Số Lượng Khách Hàng</th>
                            <th>Thanh Toán</th>
                            <th>Tình Trạng Đơn Hàng</th>
                            <th>Ngày Đặt Hàng</th>
                            <th>Thao Tác</th>
                            
                            
                        </tr>
                        <?php
                            foreach($listbill as $bill){
                                extract($bill);
                                $suadh = "index.php?act=suadh&id=" . $id;
                                $xoadh = "index.php?act=xoadh&id=" . $id;
                                $kh=$bill["bill_name"].'
                                <br> '.$bill["bill_email"].'
                                <br> '.$bill["bill_address"].'
                                <br> '.$bill["bill_tel"];
                                $countsp=loadall_cart_count($bill["id"]);
                                $ttdh=get_ttdh($bill["bill_status"]);
                                echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>DAM-'.$bill['id'].'</td>
                                <td>'.$kh.'</td>
                                <td>'.$countsp.'</td>
                                <td><strong>'.$bill["total"].'  </strong>$</td>
                                <td>'.$ttdh.'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>
                                   <a href="' . $suadh . '"><input type="button" value="Sửa"></a>
                                   <a href="' . $xoadh . '"><input type="button" value="Xóa"></a>
                                </td>
                                </tr>';
                            }
                        ?>
                    
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
<a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
                </form>
            </div>