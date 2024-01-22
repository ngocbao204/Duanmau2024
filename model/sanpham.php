<?php
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        $sql="insert into sanpham(name_sanpham,price,img,mota,iddm)value('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
        
    }

    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$_GET['id'];
        pdo_execute($sql);
    }


    function loadall_sanpham_top10(){
        
// Truy vấn SQL bạn cung cấp là

// Nó chọn tất cả các cột từ bảng "sanpham"
// Mệnh đề WHERE chứa "
// Nó sắp xếp kết quả theo thứ tự giảm dần theo cột “luotxem”, tức là sẽ
// Mệnh đề "LIMIT" giới hạn tập kết quả ở 10 hàng đầu tiên, bắt đầu từ hàng thứ 0. Điều này truy xuất hiệu quả 10 hàng trên cùng được sắp xếp theo lệnh
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
        
        // Nối sql phải có .= và nháy đôi rồi cách khoảng
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_home(){
        $sql="select * from sanpham where 1 order by id desc limit 0,9";
        
        // Nối sql phải có .= và nháy đôi rồi cách khoảng
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham($kyw="",$iddm=0){
        $sql="select * from sanpham where 1";
        if($kyw!=""){
            // nếu như có từ giống như kyw này sẽ show ra
            $sql.=" and name_sanpham like '%".$kyw."%'";

        }

        if($iddm>0){
            
            $sql.=" and iddm='".$iddm."'";

        }
        // Nối sql phải có .= và nháy đôi rồi cách khoảng
        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="select * from danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
         return "";  
        }
        


    }

    function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;


    }

    function loadone_sanpham_cungloai($id,$iddm){
        $sql="select * from sanpham where iddm=".$iddm." AND id <>".$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham;


    }

    function update_sanpham($id,$tensp,$giasp,$mota,$hinh,$iddm){
        if($hinh!="")
        // $sql = "UPDATE `product` SET `views` = '$views' WHERE idproduct = $id" ;
        $sql="UPDATE `sanpham`  SET `name_sanpham`= '$tensp', `price` = '$giasp' , `mota`= '$mota',`img`= '$hinh',`iddm` = '$iddm'  WHERE id = $id";
        // $sql="update sanpham set iddm='".$iddm."',name_sanpham='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        else 
        // $sql="update sanpham set iddm='".$iddm."',name_sanpham='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        $sql="UPDATE `sanpham`  SET   `name_sanpham`= '$tensp', `price` = '$giasp' , `mota`= '$mota',`iddm` = '$iddm' WHERE id = $id";
        pdo_execute($sql);
    }


    

?>