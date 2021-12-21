<p>thêm tin game </p>
<table style="width:100%; color: #fff; border-collapse: collapse;" border="1px">
    <form method="POST" action="modules/quanlytingame_lol/xuly.php" enctype="multipart/form-data">
        <tr>
            <th>Điền tin game</th>
        </tr>
        <tr>
            <td>Tên tin </td>
            <td><input type="text" name="tentin"></td>
        </tr>
        <tr>
            <td>mã tin</td>
            <td><input type="text" name="matin"></td>
        </tr>
        <tr>
            <td>Ngày đăng</td>
            <td><input type="text" name="ngaydang"></td>
        </tr>
        <tr>
            <td>Quốc gia</td>
            <td><input type="text" name="quocgia"></td>
        </tr>
        <tr>
            <td>Tên tác gỉa</td>
            <td><input type="text" name="tacgia"></td>
        </tr>
        <tr>
            <td>tóm tắt</td>
            <td><textarea rows="5" name="tomtat" style="resize:none; width:90%;border:none;margin:0 auto;display:flex"></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="5" name="noidung" style="resize:none; width:90%;border:none;margin:0 auto;display:flex"></textarea></td>
        </tr>
        <tr>
            <td>hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Danh mục lol</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc_lol = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc_lol=mysqli_query($mysqli,$sql_danhmuc_lol);
                    while($row_danhmuc_lol=mysqli_fetch_array($query_danhmuc_lol)){
                    ?>
                    <option value="<?php echo $row_danhmuc_lol['id_danhmuc'] ?>"><?php echo $row_danhmuc_lol['tendanhmuc'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kích Hoạt</option>
                    <option value="0">Ẩn đi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themtingame_lol" value="Thêm tin game lol"></td>
        </tr>
    </form>
</table>