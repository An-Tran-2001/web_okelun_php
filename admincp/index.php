<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="css/styleadmincp.css">
    <title>admincp</title>
</head>
<body>
    <?php
        if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
            unset($_SESSION['login']);
            header('location:../index.php');
        }
    ?>
    <h1 class="title_admin">WELL COME TO ADMINCP
        <div class="logout">
            <a href="index.php?dangxuat=1">Logout </a>
        </div>
    </h1>
    <div class="wrapper">
        <?php
            include("config/config.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
        ?>
    </div>
    <div class="footer_ad">
        <?php
            include("modules/footer.php");
        ?>
    </div>
</body>
</html>