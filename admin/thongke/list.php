<div class="row">
    <div class="row frmtitle">
        <h1>Thống kê sản phẩm trong danh mục </h1>
    </div>
    <div class="row fromcontent">
        <div class="row mb frmdsloai table">
            <table>
                <tr>
                    
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th>Số Lượng</th>
                    <th>Giá nhỏ nhất</th>
                    <th>Giá lớn nhất</th>
                    <th>Giá trung bình</th>
                </tr>
                <?php
                foreach ($dsthongke as $thongke) {
                    extract($thongke);
                    ?>
                    <tr>
                        <td><?php echo $id?></td>
                        <td><?php echo $name?></td>
                        <td><?php echo $soluong?></td>
                        <td>$ <?php echo $gia_min?></td>
                        <td>$ <?php echo $gia_max?></td>
                        <td>$ <?php echo number_format($gia_avg, 2)?></td>
                    </tr>
                    <?php
                }

                ?>


            </table>
        </div>
    </div>
    <div class="row mb">
       
        <a href="?act=bieudo"> <input type="button" name="" id="" value="Xem biểu đồ"></a>
    </div>
</div>