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
        <div class="featcm">
            Dedicated to bringing the world the most underrated
            Scandinavian albums.
        </div>

<?php 
require "helper.php";

function checkDupes($nameDupes){
    $use = array($nameDupes[0]["name"], $nameDupes[1]["name"], $nameDupes[2]["name"], $nameDupes[3]["name"]);
    if (count($use) !== count(array_unique($use)))return true;
    return false;
}

$db=database();
$query=$db->query("SELECT name, displayName, price FROM albums");
$query = $query->fetchAll();
$_SESSION["product"] = $query;
$q = array($query[rand(0,11)], $query[rand(0,11)], $query[rand(0,11)], $query[rand(0,11)]);
while (checkDupes($q))
$q = array($query[rand(0,11)], $query[rand(0,11)], $query[rand(0,11)], $query[rand(0,11)]);

?>
<div class="featimg">
  <div class="each">
<a href = "cart.php?album=<?php echo $q[0]["name"];?>"><img src="css/albumArt/<?php echo $q[0]["name"];?>" alt = "featured album 1"></a>
<div class="under"><?php echo "$".$q[0]["price"]; ?></div>
</div>
  <div class="each"><a href = "cart.php?album=<?php echo $q[1]["name"];?>"><img src="css/albumArt/<?php echo $q[1]["name"];?>" alt = "featured album 2"></a><div class="under2"><?php echo "$".$q[1]["price"]; ?></div>
  </div>
  <div class="each"><a href = "cart.php?album=<?php echo $q[2]["name"];?>"><img src="css/albumArt/<?php echo $q[2]["name"];?>" alt = "featured album 3"></a><div class="under3"><?php echo "$".$q[2]["price"]; ?></div></div>
  <div class="each"><a href = "cart.php?album=<?php echo $q[3]["name"];?>"><img src="css/albumArt/<?php echo $q[3]["name"];?>" alt = "featured album 4"></a><div class="under4"><?php echo "$".$q[3]["price"]; ?></div></div>
</div>
    </body>
</html>
