<?php
    $sql_lietke_tingame= "SELECT * FROM tbl_tin_game, tbl_danhmuc WHERE tbl_tin_game.id_danhmuc =  tbl_danhmuc.id_danhmuc ORDER BY id_tingame DESC";
    $query_lietke_tingame= mysqli_query($mysqli, $sql_lietke_tingame);
?>
<h3>Liệt Kê Ra Rồi Này</h3>
<table style=" background-color: rgba(28, 28, 28, 0.796);width:100%; color: #fff; border-collapse: collapse;" border="1px">
    <tr>
        <th>id</th>
        <th>Danh Mục</th>
        <th>Tên Tin</th>
        <th>Hình ảnh</th>
        <th>Mã tin</th>
        <th>Tác Giả</th>
        <th>Quốc gia</th>
        <th>Ngày đăng</th>
        <th>Tóm tắt</th>
        <th>Nội Dung</th>
        <th>Tình Trạng</th>
        <th>Thay đổi</th>
    </tr>
    <?php
    $i=0;
    while($row= mysqli_fetch_array($query_lietke_tingame)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td><?php echo $row['tentin'] ?></td>
        <td> <img src="modules/quanlytingame_lol/upload/<?php echo $row['hinhanh'] ?> " style="width:350px;height:200px;"></td>
        <td><?php echo $row['matin'] ?></td>
        <td><?php echo $row['tentacgia'] ?></td>
        <td><?php echo $row['quocgia'] ?></td>
        <td><?php echo $row['ngaydang'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php echo $row['noidung'] ?></td>
        <td><?php if( $row['tinhtrang'] ==1){
             echo " Kích Hoạt";
             }else{
                 echo "Ẩn"; } ?></td>
        <td>
        <a href="modules/quanlytingame_lol/xuly.php?idtingame=<?php echo $row['id_tingame']?>" >xóa</a> 
        | <a href="?action=quanlitingame&query=sua&idtingame=<?php echo $row['id_tingame']?>">sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>