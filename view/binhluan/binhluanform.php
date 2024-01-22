<?php
    
    session_start();
    
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    
    
    $idpro=$_REQUEST['idpro'];
    $dsbl=loadall_binhluan($idpro);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    

<div class="row mb">
<div class="boxtitle">BÌNH LUẬN</div>
<div class="binhluan">
<table>
    <tr>
        <th>Nội dung bình luận</th>
        <th>ID</th>
        <th>Ngày bình luận</th>
    </tr>  
        <?php
       
    foreach ($dsbl as $bl) {
        extract($bl);
        echo '<tr><td>'.$noidung.'</td>';
        echo '<td>'.$iduser.'</td>';
        echo '<td>'.$ngaybinhluan.'</td></tr>';
        
        # code...
    }


?>

       
</table>  
</div>
<div class="boxcontent2  ">
   
</div>

<div class="boxfooter binhluanform">
<!-- $_SERVER['PHP_SELF'] : Trả về tên tệp của tập lệnh đang thực thi hiện tại. -->
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="idpro" id="" value="<?=$idpro?>">
        <input type="text" name="noidung" id="" placeholder="Bình luận">
        <input type="submit" name="guibinhluan" value="Gửi bình luận">
    </form>
</div>

        <?php
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                $noidung=$_POST['noidung'];
                $idpro=$_POST['idpro'];
                $iduser=$_SESSION['user']['id'];
                date_default_timezone_set('Asia/Ho_Chi_Minh'); // Đặt múi giờ Việt Nam (ICT)
                $ngaybinhluan=date('H:i a d/m/Y',$current_time);
                insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }

            
?>
</div>

</body>
</html>