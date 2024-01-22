<div class="row">
            <div class="row headerAdmin">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI </th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                          extract($danhmuc);
                          $suadm="index.php?act=suadm&id=".$id;
                          $xoadm="index.php?act=xoadm&id=".$id;
                          echo'<tr>
                          <td><input type="checkbox" name="" id=""></td>
                          <td>'.$id.'</td>
                          <td>'.$name.'</td>
                          <td><a href="'.$suadm.'"><input type="button" value="SỬA" name="" id=""></a>
                          <a href="'.$xoadm.'"><input type="button" value="XÓA" name="" id=""> </a>
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
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" name="" id=""></a>
                </div>
                
           
        </div>
    </div>