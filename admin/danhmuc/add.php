
     <div class="row">
            <div class="row headerAdmin">
                <h1>THÊM MỚI LOẠI HÀNG</h1>
            </div>
            <div class="row formcontent">
                <form action="" method="post">
                    <div class="row mb10">
                        Mã loại: <br>
                        <input type="number" name="maloai" id="" disabled placeholder="Mã Loại">
                    </div>
                    <div class="row mb10">
                        Tên loại: <br>
                    <input type="text" name="tenloai" id="">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới" id="">
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