<?php session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Premier Scandinavia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <header><?php require "navbar.php";?></header>

<?php 
require "helper.php";
$db=database();
$query=$db->query("SELECT name, displayName, price FROM albums");
$query = $query->fetchAll();
if (!(isset($_SESSION["product"])))
    $_SESSION["product"] = $query;
?>
        <div class="featimg2">

        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[0]["name"];?>">
        <img src="css/albumArt/<?php echo $query[0]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder1"><?php echo "$".$query[0]["price"];?></div>
        </div>
        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[1]["name"];?>">
        <img src="css/albumArt/<?php echo $query[1]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder2"><?php echo "$".$query[1]["price"];?></div>
        </div>
        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[2]["name"];?>">
        <img src="css/albumArt/<?php echo $query[2]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder3"><?php echo "$".$query[2]["price"];?></div>
        </div>
        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[3]["name"];?>">
        <img src="css/albumArt/<?php echo $query[3]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder4"><?php echo "$".$query[3]["price"];?></div>
        </div>
        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[4]["name"];?>">
        <img src="css/albumArt/<?php echo $query[4]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder5"><?php echo "$".$query[4]["price"];?></div>
        </div>
        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[5]["name"];?>">
        <img src="css/albumArt/<?php echo $query[5]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder6"><?php echo "$".$query[5]["price"];?></div>
        </div>
        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[6]["name"];?>">
        <img src="css/albumArt/<?php echo $query[6]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder7"><?php echo "$".$query[6]["price"];?></div>
        </div>
        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[7]["name"];?>">
        <img src="css/albumArt/<?php echo $query[7]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder8"><?php echo "$".$query[7]["price"];?></div>
        </div>
        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[8]["name"];?>">
        <img src="css/albumArt/<?php echo $query[8]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder9"><?php echo "$".$query[8]["price"];?></div>
        </div>
        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[9]["name"];?>">
        <img src="css/albumArt/<?php echo $query[9]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder10"><?php echo "$".$query[9]["price"];?></div>
        </div>
        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[10]["name"];?>">
        <img src="css/albumArt/<?php echo $query[10]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder11"><?php echo "$".$query[10]["price"];?></div>
        </div>        
        <div class="each2">
        <a href = "cart.php?album=<?php echo $query[11]["name"];?>">
        <img src="css/albumArt/<?php echo $query[11]["name"];?>" alt = "featured album 1"></a>
        <div class="sunder12"><?php echo "$".$query[11]["price"];?></div>
        </div></div>


    </body>
</html>
