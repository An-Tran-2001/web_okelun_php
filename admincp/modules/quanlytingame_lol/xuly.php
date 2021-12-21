<?php
include("../../config/config.php");

$tentingame_lol= $_POST['tentin'];
$matin= $_POST['matin'];
$ngaydang= $_POST['ngaydang'];
$quocgia= $_POST['quocgia'];
$tentacgia= $_POST['tacgia'];
$tomtat= $_POST['tomtat'];
$noidung= $_POST['noidung'];
$tinhtrang= $_POST['tinhtrang'];
$danhmuc= $_POST['danhmuc'];
#
$hinhanh= $_FILES['hinhanh']['name'];
$hinhanh_tmp= $_FILES['hinhanh']['tmp_name'];
$hinhanh=time().'_'.$hinhanh;
if(isset($_POST['themtingame_lol'])){
    $sql_them = "INSERT INTO tbl_tin_game(tentin, matin,ngaydang,quocgia,tentacgia,tomtat,noidung,hinhanh,tinhtrang,id_danhmuc) VALUES ('".$tentingame_lol."', '".$matin."', '".$ngaydang."', 
    '".$quocgia."', '".$tentacgia."', '".$tomtat."', '".$noidung."', '".$hinhanh."', '".$tinhtrang."', '".$danhmuc."')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp,"upload/".$hinhanh);
    header("location: ../../index.php?action=quanlitingame&query=them");
}elseif(isset($_POST['suatingame_lol'])){
    if($hinhanh_tmp==""){
        $sql_update = "UPDATE tbl_tin_game SET tentin ='".$tentingame_lol."', matin = '".$matin."', ngaydang = '".$ngaydang."', 
        quocgia = '".$quocgia."',tentacgia = '".$tentacgia."',tomtat = '".$tomtat."',noidung = '".$noidung."',tinhtrang = '".$tinhtrang."',id_danhmuc = '".$danhmuc."' WHERE id_tingame = '$_GET[idtingame]'";
    }
    else{

        move_uploaded_file($hinhanh_tmp,"upload/".$hinhanh);
        // 
        $sql_update = "UPDATE tbl_tin_game SET tentin ='".$tentingame_lol."', matin = '".$matin."', ngaydang = '".$ngaydang."', 
        quocgia = '".$quocgia."',tentacgia = '".$tentacgia."',tomtat = '".$tomtat."',noidung = '".$noidung."',hinhanh = '".$hinhanh."',tinhtrang = '".$tinhtrang."',id_danhmuc = '".$danhmuc."' WHERE id_tingame = '$_GET[idtingame]'";
        // 
        $sql = "SELECT * FROM tbl_tin_game WHERE id_tingame = '$_GET[idtingame]' LIMIT 1";
        $query=mysqli_query($mysqli, $sql);
        while($row=mysqli_fetch_array($query)){
            unlink('upload/'.$row['hinhanh']);
        }
    }
    mysqli_query($mysqli, $sql_update);
    header("location: ../../index.php?action=quanlitingame&query=them");
}else{
    $id=$_GET['idtingame'];
    $sql = "SELECT * FROM tbl_tin_game WHERE id_tingame = '$id' LIMIT 1";
    $query=mysqli_query($mysqli, $sql);
    while($row=mysqli_fetch_array($query)){
        unlink('upload/'.$row['hinhanh']);
    }
    $sql_xoa="DELETE FROM tbl_tin_game WHERE id_tingame = '".$id."'";
    mysqli_query($mysqli, $sql_xoa);
    header("location: ../../index.php?action=quanlitingame&query=them");
}
?>