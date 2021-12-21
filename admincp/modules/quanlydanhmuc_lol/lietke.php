<?php
    $sql_lietke_danhmuclol= "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmuclol= mysqli_query($mysqli, $sql_lietke_danhmuclol);
?>
<p>liệt kê ra rùi nè</p>
<table style=" background-color: rgba(28, 28, 28, 0.796);width:100%; color: #fff; border-collapse: collapse;" border="1px">
    <tr>
        <th>id</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
        <!-- <th>thứ tự</th> -->
    </tr>
    <?php
    $i=0;
    while($row= mysqli_fetch_array($query_lietke_danhmuclol)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <!-- <td><?php //echo $row['thutu'] ?></td> -->
        <td>
            <a href="modules/quanlydanhmuc_lol/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>" >xóa</a> | <a href="?action=quanlidanhmucgame&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>