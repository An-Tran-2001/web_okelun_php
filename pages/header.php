<div id="header">
    <nav class="container">
        <ul id="main-menu">
            <a href="" id="logo">
                <img src="images/logo.png" alt="">
            </a>
            <li><a href="http://localhost/web_okelun_php/index.php">ホームページ</a></li>
            <li><a href="#">エスポーツ</a>
                <ul class="sub-menu">
                    <li><a href="index.php?all-game=lol">リーグ・オブ・レジェンド</a></li>
                    <li><a href="#">モバイル</a>
                        <ul class="sub-menu">
                            <li><a href="index.php?all-game=lienquan">Menu 2.2.1</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?all-game=valorant">ヴぁぉらんつ</a>
                    <li><a href="index.php?all-game=naraka">ナラカ</a></li>
                </ul>
            </li>
            <li><a href="#">コンタクト</a></li>
        </ul>
        <div id="seach">
            <input id="seaching" type="text" placeholder="何を探していますか？">
            <i class="fas fa-search"></i>
        </div>
        <ul id="main-menu">
            <li><a href="#" onclick="document.getElementById('wrapper').style.display='flex';
            document.getElementById('form-login').style.display='block';
            document.getElementById('form-singup').style.display='none'">ログインする</a></li>
            <li><a href="#" onclick="document.getElementById('wrapper').style.display='flex';
            document.getElementById('form-singup').style.display='block';
            document.getElementById('form-singup').style.animation='none';
            document.getElementById('form-login').style.display='none'">登録</a></li>
        </ul>
    </nav>
</div>
