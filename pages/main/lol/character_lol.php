<?php
    $sql_product = "SELECT * FROM tbl_tin_game,tbl_danhmuc WHERE tbl_tin_game.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_tin_game.id_tingame DESC LIMIT 25";
    $query_product=mysqli_query($mysqli,$sql_product);
?>
<div class="button_menu">
    <button class="button_information">料金表</button>
    <button class="button_information">文字</button>
</div>
<div class="grid_row_list">
    <?php
    while($row_character=mysqli_fetch_array($query_product)){
    ?>
        <div class="grid_column_2_5">
            <a href="index.php?news_lol=handbook&id= <?php echo $row_character['id_tingame'] ?>" style="color:#fff">
                <div class="menu_item_information">
                    <div class="menu_item_information_img"
                        style='background-image: url(admincp/modules/quanlytingame_lol/upload/<?php echo $row_character['hinhanh'] ?>) ;'>
                    </div>
                    <h3 class="menu_item_information_name"><?php echo $row_character['tentin'] ?></h3>
                    <div class="menu_item_information_like_date">
                        <span class="menu_item_information_like">
                            <i class="far fa-heart"></i>
                            <!-- <i class="fas fa-heart"></i> -->
                        </span>
                        <div class="menu_item_information_date">
                        <?php echo $row_character['ngaydang'] ?>
                            <i class="far fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="menu_item_information_origin_author">
                        <span class="menu_item_information_origin"><?php echo $row_character['quocgia'] ?></span>
                        <span class="menu_item_information_author"><?php echo $row_character['tendanhmuc'] ?></span>
                        <span class="menu_item_information_author">著者:<?php echo $row_character['tentacgia'] ?></span>
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