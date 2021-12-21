<?php
include("../../config/config.php");

$tenloaithanhphan_lol= $_POST['tendanhmuc'];
$thutu= $_POST['thutu'];
if($_POST['themdanhmuc_lol']){
    $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc, thutu) VALUES ('".$tenloaithanhphan_lol."', '".$thutu."')";
    mysqli_query($mysqli, $sql_them);
    header("location: ../../index.php?action=quanlidanhmucgame&query=them");
}elseif(isset($_POST['suadanhmuc_lol'])){
    $sql_update = "UPDATE tbl_danhmuc SET tendanhmuc ='".$tenloaithanhphan_lol."', thutu = '".$thutu."' WHERE id_danhmuc = '$_GET[iddanhmuc]'";
    mysqli_query($mysqli, $sql_update);
    header("location: ../../index.php?action=quanlidanhmucgame&query=them");
}else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa="DELETE FROM tbl_danhmuc WHERE id_danhmuc = '".$id."'";
    mysqli_query($mysqli, $sql_xoa);
    header("location: ../../index.php?action=quanlidanhmucgame&query=them");
}
?>