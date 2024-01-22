<div class="row">
            <div class="row headerAdmin">
                <h1>DANH SÁCH KHÁCH HÀNG</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ TÀI KHOẢN </th>
                            <th>TÊN ĐĂNG NHẬP</th>
                            <th>PASSWORD</th>
                            <th>EMAIL</th>
                            <th>ADDRESS</th>
                            <th>SỐ ĐIỆN THOẠI</th>
                            <th>ROLE</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listtaikhoan as $taikhoan) {
                          extract($taikhoan);
                          $suatk="index.php?act=suatk&id=".$id;
                          $xoatk="index.php?act=xoatk&id=".$id;
                          echo'<tr>
                          <td><input type="checkbox" name="" id=""></td>
                          <td>'.$id.'</td>
                          <td>'.$user.'</td>
                          <td>'.$pass.'</td>
                          <td>'.$email.'</td>
                          <td>'.$address.'</td>
                          <td>'.$tel.'</td>
                          <td>'.$role.'</td>
                          <td><a href="'.$suatk.'"><input type="button" value="SỬA" name="" id=""></a>
                          <a href="'.$xoatk.'"><input type="button" value="XÓA" name="" id=""> </a>
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
                    
                </div>
                
           
        </div>
    </div>