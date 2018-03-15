<link rel="stylesheet" type="text/css" href="css/navbar_styles.css">
<div class="nav">
	<div class="inner">
	<ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="saleall.php">Browse</a>
        </li>
        <li>
            <a href="tickets.php">Tickets</a>

        </li>
        <li>
            <a href="about.php">About</a>
        </li>
        <li>
            <a>
                <?php 
                if(isset($_SESSION["id"])){ 
                    echo $_SESSION["users"];
                    echo '<a href="cart.php?album=none">\'s Cart</a>';
                }
                elseif(!(isset($_SESSION["id"]))) 
                    echo '<a href="login.php">Login</a>';
            ?>
        </a>
            <ul>
                <li><a>
                <?php 
                if(isset($_SESSION["id"])){ 
                    echo '<a href="Logout.php">Logout</a>';
                }
                elseif(!(isset($_SESSION["id"]))) 
                    echo '<a href="newAccount.php">Create Account</a>';
            ?>
            </a></li>
            </ul>

        </li>
	</ul>
</div>
<br style="clear:both">
