<div class="row">
            <div class="row headerAdmin mb">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>

            <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw" id="">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                        <?php
                    foreach ($listdanhmuc as $danhmuc) {
                       extract($danhmuc);
                       echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                        ?>
                        
                        </select>
                        <input type="submit" name="listok" value="GO" id="">
                    </form>

            <div class="row formcontent">
                
                <div class="row mb10 formdanhsach">
                    
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI </th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>HÌNH ẢNH</th>
                            <th>GIÁ SẢN PHẨM</th>
                            <th>LƯỢT XEM</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listsanpham as $sanpham) {
                          extract($sanpham);
                          $suasp="index.php?act=suasp&id=".$id;
                          $xoasp="index.php?act=xoasp&id=".$id;
                        //   kiểm tra img có phải là một file hay không?
                            $hinhpart="../upload/".$img;
                            if(is_file($hinhpart)){
                                $hinh="<img src='".$hinhpart."' height='80'>";
                            }else{
                                $hinh="No photo";
                            }
                        
                          
                          echo'<tr>
                          <td><input type="checkbox" name="" id=""></td>
                          <td>'.$id.'</td>
                          <td>'.$name_sanpham.'</td>
                          <td>'.$hinh.'</td>
                          <td>'.$price.'</td>
                          <td>'.$luotxem.'</td>
                          
                          <td><a href="'.$suasp.'"><input type="button" value="SỬA" name="" id=""></a>
                          <a href="'.$xoasp.'"><input type="button" value="XÓA" name="" id=""> </a>
                          </td>
                      </tr>';
                    }

?>
                        
                        
                    </table>
                </div>
                <div class="row mb10 ">
                    <input type="button" name="" value="Chọn tất cả" id="">
                    <input type="button" name="" value="Bỏ chọn tất cả" id="">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" name="" id=""></a>
                </div>
                
           
        </div>
    </div>