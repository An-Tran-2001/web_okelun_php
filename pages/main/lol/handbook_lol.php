<?php
    $sql_product = "SELECT * FROM tbl_tin_game WHERE tbl_tin_game.id_danhmuc='$_GET[id]' ORDER BY id_tingame DESC";
    $query_product=mysqli_query($mysqli,$sql_product);
    // 
    $sql_catgory = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
    $query_catgory=mysqli_query($mysqli,$sql_catgory);
    $row_title=mysqli_fetch_array($query_catgory);
?>
<div class="grid_row_list">
    <?php
    while($row_product=mysqli_fetch_array($query_product)){
    ?>
        <div class="grid_column_2_5">
            <a href="index.php?news_lol=handbook&id= <?php echo $row_product['id_tingame'] ?>" style="color:#fff">
                <div class="menu_item_information">
                    <div class="menu_item_information_img"
                        style='background-image: url(admincp/modules/quanlytingame_lol/upload/<?php echo $row_product['hinhanh'] ?>) ;'>
                    </div>
                    <h3 class="menu_item_information_name"><a href="index.php?news_lol=handbook&id=<?php echo $row_danhmuc_lol['id_tingame'] ?>" style="color:#fff"><?php echo $row_product['tentin'] ?></a></h3>
                    <div class="menu_item_information_like_date">
                        <span class="menu_item_information_like">
                            <i class="far fa-heart"></i>
                            <!-- <i class="fas fa-heart"></i> -->
                        </span>
                        <div class="menu_item_information_date">
                        <?php echo $row_product['ngaydang'] ?>
                            <i class="far fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="menu_item_information_origin_author">
                        <span class="menu_item_information_origin"><?php echo $row_product['quocgia'] ?></span>
                        <span class="menu_item_information_author">著者:<?php echo $row_product['tentacgia'] ?></span>
                    </div>
                    <div class="menu_item_information_hotnews">
                        <i class="fab fa-hotjar"></i>
                        HOT
                    </div>
                    </dov>
                </div>
            </a>
        </div>
    <?php
    }
    ?>
</div>