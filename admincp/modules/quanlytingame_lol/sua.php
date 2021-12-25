<?php
    $sql_sua_tingame= "SELECT * FROM tbl_tin_game WHERE id_tingame = '$_GET[idtingame]' LIMIT 1";
    $query_sua_tingame= mysqli_query($mysqli, $sql_sua_tingame);
?>
<h3>Sửa Tin Game</h3>
<table style="width:100%; color: #fff; border-collapse: collapse;" border="1px">
    <?php while($row= mysqli_fetch_array($query_sua_tingame)){ ?>
        <form method="POST" action="modules/quanlytingame_lol/xuly.php?idtingame=<?php echo $row['id_tingame']?>" enctype="multipart/form-data">
            <tr>
                <th>Điền tin game</th>
            </tr>
            <tr>
                <td>Danh mục lol</td>
                <td>
                    <select name="danhmuc">
                        <?php
                        $sql_danhmuc_lol = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc_lol=mysqli_query($mysqli,$sql_danhmuc_lol);
                        while($row_danhmuc_lol=mysqli_fetch_array($query_danhmuc_lol)){
                            if($row_danhmuc_lol['id_danhmuc'] == $row['id_danhmuc']){
                        ?>
                        <option selected value="<?php echo $row_danhmuc_lol['id_danhmuc'] ?>"><?php echo $row_danhmuc_lol['tendanhmuc'] ?></option>
                        <?php
                            }else{
                        ?>
                        <option value="<?php echo $row_danhmuc_lol['id_danhmuc'] ?>"><?php echo $row_danhmuc_lol['tendanhmuc'] ?></option>
                        <?php        
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tên tin </td>
                <td><input type="text" value="<?php echo $row['tentin'] ?>" name="tentin"></td>
            </tr>
            <tr>
                <td>mã tin</td>
                <td><input type="text" value="<?php echo $row['matin'] ?>" name="matin"></td>
            </tr>
            <tr>
                <td>Ngày đăng</td>
                <td><input type="text" value="<?php echo $row['ngaydang'] ?>" name="ngaydang"></td>
            </tr>
            <tr>
                <td>Quốc gia</td>
                <td><input type="text" value="<?php echo $row['quocgia'] ?>" name="quocgia"></td>
            </tr>
            <tr>
                <td>Tên tác gỉa</td>
                <td><input type="text" value="<?php echo $row['tentacgia'] ?>" name="tacgia"></td>
            </tr>
            <tr>
                <td>tóm tắt</td>
                <td><textarea rows="5" name="tomtat" style="resize:none; width:90%;border:none;margin:0 auto;display:flex"><?php echo $row['tomtat'] ?></textarea></td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td><textarea rows="5" value="<?php $row['noidung'] ?>" name="noidung" style="resize:none; width:90%;border:none;margin:0 auto;display:flex"><?php echo $row['noidung'] ?></textarea></td>
            </tr>
            <tr>
                <td>hình ảnh</td>
                <td>
                    <input type="file" name="hinhanh">
                    <img src="modules/quanlytingame_lol/upload/<?php echo $row['hinhanh'] ?> " style="width:350px;height:200px;">
                </td>
            </tr>
            <tr>
                <td>Tình trạng</td>
                <td>
                    <select name="tinhtrang">
                        <?php
                        if($row['tinhtrang']==1){
                        ?>
                        <option value="1" selected>Kích Hoạt</option>
                        <option value="0">Ẩn đi</option>
                        <?php
                        }
                        else{
                        ?>
                        <option value="1">Kích Hoạt</option>
                        <option value="0" selected>Ẩn đi</option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="suatingame_lol" value="Sửa tin game lol"></td>
            </tr>
        </form>
    <?php } ?>
</table>