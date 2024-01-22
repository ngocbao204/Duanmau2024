<?php
    if(is_array($dm)){
        extract($dm);
    }


?>
<div class="row">
            <div class="row headerAdmin">
                <h1>CẬP NHẬT LOẠI HÀNG</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã loại: <br>
                        <input type="number" name="maloai" id="" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại: <br>
                    <input type="text" name="tenloai" id="" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" id="" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                <input type="submit" name="capnhat" value="Cập nhật" id="">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=lisdm"><input type="button" value="Danh sách"></a>
            </div>

            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;


?>
            </form>
        </div>
    </div>
    </div>