<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel='shortcut icon' href='images/logohead2.png'>
    <title>Game</title>

</head>
<body>
    <div class="wrapperr">
        <?php
        include("admincp/config/config.php");
        include("pages/login_submit/login_submit.php");
        include("pages/header.php");
        if(isset($_GET['all-game'])){
            $allgame = $_GET['all-game'];
            switch ($allgame){
                case 'lol':
                    include("pages/main_lol.php");
                    break;
                case 'lienquan':
                    include("pages/main_lienquan.php");
                    break;
                case 'valorant':
                    include("pages/main_valorant.php");
                    break;
                case 'csgo':
                    include("pages/main_naraka.php");
                    break;
                default:
                    break;
            }
        }
        else{
            include("pages/main_lol.php");
        }
        ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>