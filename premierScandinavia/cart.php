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
        <div class="cart">
            <h1>Cart</h1>
        </div>
        <div class="cart2">

                <?php
                function displayCart($ar,$product){
                    $total=0;
                    print"<pre>";
                    for($i = 0;$i < count($ar); $i++){
                        for($c = 0;$c < count($product); $c++){
                            if ($ar[$i] == $product[$c]["name"]){
                                $total += $product[$c]["price"];
                                print_r($product[$c]["displayName"]);
                                echo "&nbsp-&nbsp";
                                print_r($product[$c]["price"]);
                                ?>
                                <a href = "cart.php?remove=<?php echo $product[$c]["name"];?>"><div class="red">x</div></a>
                                <?php
                                print "<br>";
                            }
                        }
                    }
                    if ($total == 0)
                        print "Your cart is empty";
                    else
                    print "Total: $total";
                    print"</pre>";
                }

                $product = $_SESSION["product"];
                if (!($_SESSION["cart"][0]))
                    $_SESSION["cart"][] = "none";

                if(isset($_SESSION["id"])){
                    echo '<script type="text/javascript">
                    if (window.performance){
                    console.info("something");
                    }
                     if (performance.navigation.type == 1) {
                        window.location.href = "cart.php?album=none";
                    } 
                    else{
                        console.info("do nothing");
                    }
                    </script>';
                    if(isset($_GET["album"])){
                        $album = $_GET["album"];
                        if ($album == "none")
                            displayCart($_SESSION["cart"],$product);
                        else{
                            $_SESSION["cart"][]=$album;
                            displayCart($_SESSION["cart"],$product);
                    }
                    }
                    if(isset($_GET["remove"])){
                        for($i = 0;$i < count($_SESSION["cart"]); $i++){
                            if($_SESSION["cart"][$i] == $_GET["remove"]){
                                array_splice($_SESSION["cart"],$i,1);
                                array_values($_SESSION["cart"]);
                                break;
                            }
                        }
                        echo '<script type="text/javascript">window.location.href="cart.php?album=none";</script>';
                    }
                }
                print_r($_SESSION["cart"]);
                //unset($_SESSION["cart"]); nuclear option for when things go south
            ?>
            </div>
    </body>
</html>
