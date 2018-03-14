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


<?php require "helper.php";
$db=database();
$query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'abbavou.png'");
$query = $query->fetch();?>
        <div class="featimg2">
        <div class="each2"><img src="css/albumArt/abbavou.png" alt = "featured album 1"></div>
        <?php
        $query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'akhanden.png'");
        $query = $query->fetch();?>
        <div class="each2"><img src="css/albumArt/akhanden.png" alt = "featured album 2"></div>
        <?php
        $query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'aobsign.png'");
        $query = $query->fetch();?>
        <div class="each2"><img src="css/albumArt/aobsign.png" alt = "featured album 3"></div>
        <?php
        $query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'hellagod.png'");
        $query = $query->fetch();?>
        <div class="each2"><img src="css/albumArt/hellagod.png" alt = "featured album 4"></div>
        <?php
        $query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'hellarock.png'");
        $query = $query->fetch();?>
        <div class="each2"><img src="css/albumArt/hellarock.png" alt = "featured album 1"></div>
        <?php
        $query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'hellavis.png'");
        $query = $query->fetch();?>
        <div class="each2"><img src="css/albumArt/hellavis.png" alt = "featured album 2"></div>
        <?php
        $query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'lk14becks.png'");
        $query = $query->fetch();?>
        <div class="each2"><img src="css/albumArt/lk14becks.png" alt = "featured album 3"></div>
        <?php
        $query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'lk14som.png'");
        $query = $query->fetch();?>
        <div class="each2"><img src="css/albumArt/lk14som.png" alt = "featured album 4"></div>
        <?php
        $query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'lk14storm.png'");
        $query = $query->fetch();?>
        <div class="each2"><img src="css/albumArt/lk14storm.png" alt = "featured album 1"></div>
        <?php
        $query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'tbngrapoc.png'");
        $query = $query->fetch();?>
        <div class="each2"><img src="css/albumArt/tbngrapoc.png" alt = "featured album 2"></div>
        <?php
        $query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'tbngrretox.png'");
        $query = $query->fetch();?>
        <div class="each2"><img src="css/albumArt/tbngrretox.png" alt = "featured album 3"></div>
        <?php
        $query=$db->query("SELECT name, displayName, price FROM albums WHERE name = 'tbngrscand.png'");
        $query = $query->fetch();?>
        <div class="each2"><img src="css/albumArt/tbngrscand.png" alt = "featured album 4"></div>
        </div>


    </body>
</html>
