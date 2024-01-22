<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }

    $hinhpart="../upload/".$img;
        if(is_file($hinhpart)){
        $hinh="<img src='".$hinhpart."' height='80'>";
        }else{
        $hinh="No photo";
}

?>
<div class="row">
            <div class="row headerAdmin">
                <h1>CẬP NHẬT LOẠI HÀNG</h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">

            <select name="iddm" id="">
            <option  value="<?=$iddm?>"  selected>Tất cả</option>
                    <?php foreach($listdanhmuc as $danhmuc): ?>
                    <option value="<?php echo $danhmuc['id']; ?>"<?php echo ($sanpham['iddm'] == $danhmuc['id']) ? ' selected' : ''; ?>><?php echo $danhmuc['name']; ?></option>
                    <?php endforeach; ?>
                        
                        </select>     
                        
                        
            </div>
            <div class="row mb10">
                        Tên sản phẩm: <br>
                        <input type="text" name="tensp" id="" value="<?=$name_sanpham?>">
            </div>

            <div class="row mb10">
                        Giá: <br>
                        <input type="text" name="giasp" id="" value="<?=$price?>">
            </div> 

            <div class="row mb10">
                        Hình ảnh: <br>
                        <input type="file" name="hinh" id=""> <br>
                        <?=$hinh?>
            </div>

            <div class="row mb10">
                        Mô tả: <br>
                        <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
            </div>

            

            <div class="row mb10">
                <input type="hidden" name="id" value="<?=$id?>" id="">
                <input type="submit" name="capnhat" value="Cập nhật" id="">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>

            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;


?>
            </form>
        </div>
    </div>
    </div>