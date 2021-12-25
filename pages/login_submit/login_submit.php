<?php
    session_start();
    include('admincp/config/config.php');
    if(isset($_POST['login'])){
        $taikhoan=$_POST['username'];
        $matkhau=md5($_POST['password']);
        $matkhau_dky=md5($_POST['password']);
        $sql= "SELECT *FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1";
        $sql_dky= "SELECT *FROM tbl_dangky WHERE tentaikhoan = '".$taikhoan."' AND matkhau='".$matkhau_dky."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $row_dky= mysqli_query($mysqli,$sql_dky);
        $count=mysqli_num_rows($row);
        $count_dky=mysqli_num_rows($row_dky);
        if($count>0){
            $_SESSION['login']=$taikhoan;
            header('location:admincp/index.php');
        }elseif($count_dky>0){
            $_SESSION['login']=$taikhoan;
            header('location:pages/dowload/dowload_lol.php');
        }
        else{
            echo '<script>aleart("Tài khoản hoặc mật khẩu không đúng")</script>';
            header('location:index.php');
        }
    }
?>
<div id="wrapper">
    <form action="" id="form-login" autocomplete="off" method="POST">
        <div class="out-login">
            <i class="fas fa-window-close" onclick="document.getElementById('wrapper').style.display='none'"></i>
        </div>
        <h1 class="form-heading">ログインする</h1>
        <div class="form-group">
            <i class="far fa-user"></i>
            <input type="text" class="form-input" placeholder="ユーザー名" name="username">
        </div>
        <div class="form-group">
            <i class="fas fa-key"></i>
            <input type="password" id="password" class="form-input" placeholder="パスワード" name="password">
            <div id="eye">
                <i class="fas fa-eye"></i>
            </div>
        </div>
        <input type="submit" value="ログインする" class="form-submit" name='login'>
        <div class="suppot">
            <a href="#" onclick="document.getElementById('form-singup').style.display='block'">新規登録</a>
            <a href="#" onclick="document.getElementById('form-forgot').style.display='block';
            document.getElementById('form-login').style.display='none'" id="suppot1">パスワードを忘れた</a>
        </div>
        <p>----------------また----------------</p>
        <div class="suppot">
            <a href="https://twitter.com/login?lang=ja" class="twitter"><i
                    class="fab fa-twitter"></i>Twitterでログイン</a>
            <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i>Facebookでログイン</a>
        </div>
    </form>
   <?php
   include('signup.php')
   ?>
    <form action="" id="form-forgot">
        <h1 class="form-heading">パスワードを再設定する</h1>
        <div class="form-group">
            <i class="fas fa-mobile-alt"></i>
            <input type="text" class="form-input" placeholder="電話番号またはメールアドレスを入力してください">
        </div>
        <input type="submit" value="ログインする" class="form-submit">
        <div class="suppot">
            <a href="#" onclick="document.getElementById('form-forgot').style.display='none';
            document.getElementById('form-login').style.display='block'">ログインする</a>
            <a href="#" onclick="document.getElementById('form-singup').style.display='block';
            document.getElementById('form-forgot').style.display='none'" id="suppot1"
                style="padding-left: 200px;">新規登録</a>
        </div>
        <p>----------------また----------------</p>
        <div class="suppot">
            <a href="https://twitter.com/login?lang=ja" class="twitter"><i
                    class="fab fa-twitter"></i>Twitterでログイン</a>
            <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"
                    style="padding-left: 120px;"></i>Facebookでログイン</a>
        </div>
    </form>
</div>