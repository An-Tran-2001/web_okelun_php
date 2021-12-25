<?php
    $sql_sua_danhmuclol= "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmuclol= mysqli_query($mysqli, $sql_sua_danhmuclol);
?>
<h3>Sửa Danh Mục</h3>
<table style="width:100%; color: #fff; border-collapse: collapse;" border="1px">
    <form method="POST" action="modules/quanlydanhmuc_lol/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
        <?php
        while($dong= mysqli_fetch_array($query_sua_danhmuclol)){
        ?>
        <tr>
            <th>Sửa mục game</th>
        </tr>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suadanhmuc_lol" value="Sửa danh mục game"></td>
        </tr>
        <?php
        }
        ?>
    </form>
</table>