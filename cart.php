<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    
    <link rel="icon" type="image/png" href="CSS/number-8.png">
    <link rel="stylesheet" href="CSS/carts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php include("nav.html"); ?>
    </header>
    <main>
        <br>
        <br>
        <h1 class="f1">Items Purchased</h1>
        <?php
        
        include("Database/db_kits.php");
        $sql="SELECT *FROM kits;";
        $res=mysqli_query($conn,$sql);
        $total=0;
        
        echo '<p class="one">User: '.$_SESSION["fn"].' '.$_SESSION['ln'].'</p>';
        
        echo '<h2 class="f1">Purchases</h2>';
        while ($row=mysqli_fetch_assoc($res)) {
            $na=$row['name'];
            $no=$row['no'];
            $pri=$row['price'];
            $total=$total+($no*$pri);
            $nao=substr($na,0,3);
            $si=substr($na,4,5);
            
            if ($nao=='CHE' && $si=='H') {
                echo '<p class="one"> Chelsea Home Kit</p>';
            }
            elseif ($nao=='CHE' && $si=='A') {
                echo '<p class="one"> Chelsea Away Kit</p>';
            }
            
            elseif ($nao=='LIV' && $si=='H') {
                echo '<p class="one"> Liverpool Home Kit</p>';
            }
            
            elseif ($nao=='LIV' && $si=='A') {
                echo '<p class="one"> Liverpool Away Kit</p>';
            }
            
            elseif ($nao=='ARS' && $si=='H') {
                echo '<p class="one"> Arsenal Home Kit</p>';
            }
            
            elseif ($nao=='ARS' && $si=='A') {
                echo '<p class="one"> Arsenal Away Kit</p>';
            }
            
            elseif ($nao=='WOL' && $si=='H') {
                echo '<p class="one"> Wolves Home Kit</p>';
            }
            
            elseif ($nao=='WOL' && $si=='A') {
                echo '<p class="one"> Wolves Away Kit</p>';
            }
            
            elseif ($nao=='TOT' && $si=='H') {
                echo '<p class="one"> Tottenham Home Kit</p>';
            }
            
            elseif ($nao=='TOT' && $si=='A') {
                echo '<p class="one"> Tottenham Away Kit</p>';
            }
            
            elseif ($nao=='CRY' && $si=='H') {
                echo '<p class="one"> Crystal Palace Home Kit</p>';
            }
            
            elseif ($nao=='CRY' && $si=='A') {
                echo '<p class="one"> Crystal Palace Away Kit</p>';
            }
            
            elseif ($nao=='NEW' && $si=='H') {
                echo '<p class="one"> Newcastle Home Kit</p>';
            }
            
            elseif ($nao=='NEW' && $si=='A') {
                echo '<p class="one"> Newcastle Away Kit</p>';
            }
            
            elseif ($nao=='NFC' && $si=='H') {
                echo '<p class="one"> Nottingham Forest Home Kit</p>';
            }
            
            elseif ($nao=='NFC' && $si=='A') {
                echo '<p class="one"> Nottingham Forest Away Kit</p>';
            }
            
            elseif ($nao=='AVL' && $si=='H') {
                echo '<p class="one"> Aston Villa Forest Kit</p>';
            }
            
            elseif ($nao=='AVL' && $si=='A') {
                echo '<p class="one"> Aston Villa Away Kit</p>';
            }
            
            elseif ($nao=='EVE' && $si=='H') {
                echo '<p class="one"> Everton Home Kit</p>';
            }
            
            elseif ($nao=='EVE' && $si=='A') {
                echo '<p class="one"> Everton Away Kit</p>';
            }
            
            elseif ($nao=='WHU' && $si=='H') {
                echo '<p class="one"> West Ham Home Kit</p>';
            }
            
            elseif ($nao=='WHU' && $si=='A') {
                echo '<p class="one"> West Ham Away Kit</p>';
            }
            
            elseif ($nao=='BOU' && $si=='H') {
                echo '<p class="one"> Bourmouth Home Kit</p>';
            }
            
            elseif ($nao=='BOU' && $si=='A') {
                echo '<p class="one"> Bourmouth Away Kit</p>';
            }
            
            elseif ($nao=='BRE' && $si=='H') {
                echo '<p class="one"> Brentford Home Kit</p>';
            }
            
            elseif ($nao=='BRE' && $si=='A') {
                echo '<p class="one"> Brentford Away Kit</p>';
            }
            
            elseif ($nao=='BHA' && $si=='H') {
                echo '<p class="one"> Brighton And Hove Albion Home Kit</p>';
            }
            
            elseif ($nao=='BHA' && $si=='A') {
                echo '<p class="one"> Brighton And Hove Albion Away Kit</p>';
            }
            
            elseif ($nao=='FUL' && $si=='H') {
                echo '<p class="one"> Fulham Home Kit</p>';
            }
            
            elseif ($nao=='BHA' && $si=='A') {
                echo '<p class="one"> Fulham Away Kit</p>';
            }
            
            elseif ($nao=='MNU' && $si=='H') {
                echo '<p class="one"> Manchester United Home Kit</p>';
            }
            
            elseif ($nao=='MNU' && $si=='A') {
                echo '<p class="one"> Manchester United Away Kit</p>';
            }
            
            elseif ($nao=='MCI' && $si=='H') {
                echo '<p class="one"> Manchester City Home Kit</p>';
            }
            
            elseif ($nao=='MCI' && $si=='A') {
                echo '<p class="one"> Manchester City Away Kit</p>';
            }
        }
        echo '<p class="one"> Total Price: &#8364;'.$total.'</p>';
        ?>
        <br>
        <br>

        <h1 class="f1">Payment Methods</h1>
        <div class="two">
            <div class="ico"><a href="https://www.paypal.com/"><img src="CSS/Images/pay.png" class="im"></a></div>
            <div class="ico"><img src="CSS/Images/money.png" class="im"></div>
        </div>
    </main>
    <footer>
        <?php include("footer.html"); ?>
    </footer>
</body>
</html>
