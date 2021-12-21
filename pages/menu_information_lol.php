<?php
    $sql_danhmuc_lol = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc_lol=mysqli_query($mysqli,$sql_danhmuc_lol);
?>
<ul class="menu_information_lol">
    <?php
    while($row_danhmuc_lol=mysqli_fetch_array($query_danhmuc_lol)){
    ?>
    <li><a href="index.php?news_lol=handbook_lol&id=<?php echo $row_danhmuc_lol['id_danhmuc'] ?>"><?php echo $row_danhmuc_lol['tendanhmuc'] ?></a></li>
    <?php
    }
    ?>
</ul>