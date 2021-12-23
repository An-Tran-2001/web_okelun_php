<div class="League_of_Legends">
    <div class="header_video">
        <video autoplay muted loop class="header_video_lol_0">
            <source src="video_game/hero-blurred-7572101a2ce5e003b66483b7fe5c5d36.mp4" type=" video/mp4">
        </video>
        <div class="header_video_main">
            <div class="border_video">
                <video autoplay muted loop class="header_video_lol_1">
                    <source src="video_game/hero-0632cbf2872c5cc0dffa93d2ae8a29e8.mp4" type=" video/mp4">
                </video>
                <div class="img_button_lol">
                    <img class="img_lol"
                        src="https://www.leagueoflegends.com/static/logo-800-47024e2aeaaa8651c172ba883264dd43.png"
                        alt="">
                    <div class="border_button_video">
                        <button class="lol_dowload_button">ダウンロード</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_GET['news_lol'])){
        $body_lol =$_GET['news_lol'];
    }else{
        $body_lol = '';
    }
    if($body_lol=='handbook'){
        include("main/lol/handbook.php");
    }
    else{
        include("main/lol/body_news_lol.php");
    }
    ?>
    <div class="bonus_footer">
        <div class="bonus_title">
            <div class="footer_bonus_title">
                <h1>
                    <span>さらに</span>
                    <span class="tilte_name_bonus">詳しく知ろう</span>
                </h1>
            </div>
            <ul class="img_name_bonus">
                <li class="img_name_bonus_grow">
                    <div class="img_bonus"
                        style="background-image: url(https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt2a8901053cf0a779/61aedde71dbfc323d33b1030/120921_TFTPairsDoubleUp_Banner.jpg?quality=90&width=920);">
                    </div>
                    <div class="name_bonus">ダブルアップ初の国際大会を開催：ヘクステック ハヴォック</div>
                </li>
                <li class="img_name_bonus_grow">
                    <div class="img_bonus"
                        style="background-image: url(https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt8893354da13c0083/61849d79953e1e6504008797/LEXP21_PORTAL_SPLASH_06_crop-copy.jpg?quality=90&width=1380);">
                    </div>
                    <div class="name_bonus">評議会アーカイブ紹介</div>
                </li>
            </ul>
        </div>
    </div>
    <?php
    include("pages/footer_lol.php");
    ?>
</div>
