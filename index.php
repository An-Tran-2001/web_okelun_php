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
    <title>Game</title>
</head>
<body>
    <div class="wrapperr">
        <?php
        include("admincp/config/config.php");
        include("pages/login_submit.php");
        include("pages/header.php");
        if(isset($_GET['all-game'])){
            $allgame = $_GET['all-game'];
            switch ($allgame){
                case 'lol':
                    include("pages/main_lol.php");
                    include("pages/footer_lol.php");
                    break;
                case 'lienquan':
                    include("pages/main_lienquan.php");
                    include("pages/footer_lienquan.php");
                    break;
                case 'valorant':
                    include("pages/main_valorant.php");
                    include("pages/footer_valorant.php");
                    break;
                case 'csgo':
                    include("pages/main_naraka.php");
                    include("pages/footer_naraka.php");
                    break;
                default:
                    break;
            }
        }
        else{
            include("pages/main_lol.php");
            include("pages/footer_lol.php");
        }
        ?>
    </div>
</body>
</html>