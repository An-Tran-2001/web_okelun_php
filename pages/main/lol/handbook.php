<?php
    $sql_details = "SELECT * FROM tbl_tin_game,tbl_danhmuc WHERE tbl_tin_game.id_danhmuc=tbl_danhmuc.id_danhmuc AND
    tbl_tin_game.id_tingame='$_GET[id]' LIMIT 1";
    $query_details=mysqli_query($mysqli,$sql_details);
    while($row_details=mysqli_fetch_array($query_details)){
?>
<div class="mybody">
    <div class="container">
        <div class="grid_grow information_game">
            <h3><?php echo $row_details['tentin'] ?></h3>
            <img src="admincp/modules/quanlytingame_lol/upload/<?php echo $row_details['hinhanh'] ?>">
            <p><?php echo $row_details['tomtat'] ?></p>
            <p><?php echo $row_details['noidung'] ?></p>
            <div class="information_author">
                <p>国家: <?php echo $row_details['quocgia'] ?></p>
                <p>郵送日: <?php echo $row_details['ngaydang'] ?></p>
                <p>作家の名前: <?php echo $row_details['tentacgia'] ?></p>
            </div>
            <p>記事のソースコード: <?php echo $row_details['matin'] ?></p>
        </div>        
    </div>
</div>
<?php
    }
?>