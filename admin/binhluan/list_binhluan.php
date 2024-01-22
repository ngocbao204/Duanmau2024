<div class="row">
            <div class="row headerAdmin">
                <h1>DANH SÁCH BÌNH LUẬN</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>NỘI DUNG BÌNH LUẬN</th>
                            <th>IDUSER</th>
                            <th>IDPRO</th>
                            <th>NGÀY BÌNH LUẬN</th>
                             
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listbinhluan as $binhluan) {
                          extract($binhluan);
                          $suabl="index.php?act=suabl&id=".$id;
                          $xoabl="index.php?act=xoabl&id=".$id;
                          echo'<tr>
                          <td><input type="checkbox" name="" id=""></td>
                          <td>'.$id.'</td>
                          <td>'.$noidung.'</td>
                          <td>'.$iduser.'</td>
                          <td>'.$idpro.'</td>
                          <td>'.$ngaybinhluan.'</td>
                          
                          <td>
                          <a href="'.$xoabl.'"><input type="button" value="XÓA" name="" id=""> </a>
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