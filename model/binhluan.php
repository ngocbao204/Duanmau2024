<?php

function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) value('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);

}

function loadall_binhluan($idpro){
    // where idpro='".$idpro."' : lấy những loại bình luận thuộc sản phẩm đó
    $sql="select * from binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}


function delete_binhluan($id){
    $sql="delete from binhluan where id=".$_GET['id'];
    pdo_execute($sql);
}






?>