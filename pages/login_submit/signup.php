<?php
    if(isset($_POST['signup'])){
        $ten=$_POST["tendangky"];
        $ho=$_POST["hodangky"];
        $ngaysinh=$_POST["ngaysinh"];
        $email=$_POST["email"];
        $tentaikhoan=$_POST["tentaikhoan"];
        $matkhau_dky=md5($_POST["matkhau_dky"]);
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(ten,ho,ngaysinh,email,tentaikhoan,matkhau) 
        VALUES('".$ten."','".$ho."','".$ngaysinh."','".$email."','".$tentaikhoan."','".$matkhau_dky."')");
        if($sql_dangky){
            echo '<p style="position: absolute;
            top: 10%;">"サインアップの成功"</p>';
        }
    }
?>
<form action="" id="form-singup" autocomplete="off" method="POST">
    <div class="out-login">
        <i class="fas fa-window-close" 
        onclick="
        document.getElementById('form-singup').style.animation='mymove1 3s';
        document.getElementById('wrapper').style.display='none'"></i>
    </div>
    <h1 class="form-heading">登録</h1>
    <div class="form-group-singup">
        <input type="text" class="form-input-singup" name="tendangky" placeholder="ファーストネーム">
        <input type="text" class="form-input-singup" name="hodangky" placeholder="苗字">
        <input type="datetime-local" class="form-input-singup" name="ngaysinh" placeholder="生年月日">
    </div>
    <div class="form-group-singup">
        <div class="form-group-singup newsingup">
            <i class="fas fa-envelope-open-text"></i>
            <input type="email" class="form-input input-singup" name="email" placeholder="メール">
        </div>
        <div class="form-group-singup newsingup">
            <i class="far fa-user"></i>
            <input type="text" class="form-input input-singup" name="tentaikhoan" placeholder="ユーザー名">
        </div>
    </div>
    <div class="form-group-singup">
        <div class="form-group-singup newsingup">
            <i class="fas fa-key"></i>
            <input type="password" id="password" class="form-input input-singup" placeholder="新しいパスワード">
            <div id="eye">
                <i class="fas fa-eye"></i>
            </div>
        </div>
        <div class="form-group-singup newsingup">
            <i class="fas fa-key"></i>
            <input type="password" id="password" name="matkhau_dky" class="form-input input-singup" placeholder="パスワードを認証する">
            <div id="eye">
                <i class="fas fa-eye"></i>
            </div>
        </div>
    </div>
    <input type="submit" value="登録" name="signup" class="form-submit submit-singup"
        onclick="document.getElementById('wrapper').style.display='flex';
        document.getElementById('form-singup').style.display='block';
        document.getElementById('form-singup').style.animation='none';
        document.getElementById('form-login').style.display='none'">
    <div class="suppot" style="justify-content: center;">
        <a href="#" onclick="document.getElementById('form-forgot').style.display='block';
        document.getElementById('form-singup').style.display='none'" id="suppot1"
            style="margin-top:10px">パスワードを忘れた</a>
    </div>
    <p>----------------また----------------</p>
    <div class="suppot">
        <a href="https://twitter.com/login?lang=ja" class="twitter"><i
                class="fab fa-twitter"></i>Twitterでログイン</a>
        <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"
                style="padding-left: 120px;"></i>Facebookでログイン</a>
    </div>
</form>