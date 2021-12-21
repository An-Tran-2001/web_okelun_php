<div class="clear"></div>
<div class="main">
    <?php
     if(isset($_GET['action']) && $_GET['query']){
        $tes = $_GET['action'];
        $query= $_GET['query'];
    }
    else{
        $tes = "";
        $query= "";
    }
    if($tes == 'quanlidanhmucgame' && $query == 'them'){
        include("modules/quanlydanhmuc_lol/them.php");
        include("modules/quanlydanhmuc_lol/lietke.php");
    }
    elseif($tes == 'quanlidanhmucgame' && $query == 'sua'){
        include("modules/quanlydanhmuc_lol/sua.php");
    }
    elseif($tes == 'quanlitingame' && $query == 'them'){
        include("modules/quanlytingame_lol/them.php");
        include("modules/quanlytingame_lol/lietke.php");
    }
    elseif($tes == 'quanlitingame' && $query == 'sua'){
        include("modules/quanlytingame_lol/sua.php");
    }
    else{
        include("modules/dashboard.php");
    }
    ?>
</div>
<p> main </p>