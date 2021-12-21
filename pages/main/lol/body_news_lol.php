<div class="mybody">
    <div class="container">
        <div class="grid_grow">
            <div class="grid_column_2">
                <h2 class="menu_str">
                    <i class="fas fa-list"></i>
                    献立
                </h2>
                <?php
                include("pages/menu_information_lol.php");
                ?>
            </div>
            <div class="grid_column_10">
                <h2 class="menu_str">
                    ニュース<h2>
                        <?php
                            if(isset($_GET['news_lol'])){
                                $news_lol = $_GET['news_lol'];
                                switch ($news_lol){
                                    case 'handbook_lol':
                                        include("handbook_lol.php");
                                        break;
                                    default:
                                        break;
                                }
                            }
                            else{
                                include("character_Lol.php");
                            }
                        ?>
                        <ul class="pagination pagination-margin">
                            <li class="pagalation-item">
                                <a href="" class="paganation-item_link">
                                    <i class="paganation-icon fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="pagalation-item pagalation-item-active">
                                <a href="" class="paganation-item_link">1</a>
                            </li>
                            <li class="pagalation-item">
                                <a href="" class="paganation-item_link">2</a>
                            </li>
                            <li class="pagalation-item">
                                <a href="" class="paganation-item_link">3</a>
                            </li>
                            <li class="pagalation-item">
                                <a href="" class="paganation-item_link">4</a>
                            </li>
                            <li class="pagalation-item">
                                <a href="" class="paganation-item_link">5</a>
                            </li>
                            <li class="pagalation-item">
                                <a href="" class="paganation-item_link">...</a>
                            </li>
                            <li class="pagalation-item">
                                <a href="" class="paganation-item_link">14</a>
                            </li>
                            <li class="pagalation-item">
                                <a href="" class="paganation-item_link">
                                    <i class="paganation-icon fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
            </div>
        </div>
    </div>
</div>