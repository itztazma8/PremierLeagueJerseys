<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    
    <link rel="icon" type="image/png" href="CSS/number-8.png">
    <link rel="stylesheet" href="CSS/pt1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        Luigi's
    </header>
    <main>
        <div class="first">
                <div id="f1">
                    <h1 id="fff">Log In</h1>
                    <form method="post">
                        <label for="mail">E-mail</label>
                        <br>
                        <input type="mail" name="mail" class="b1">
                        <br>
                        <br>
                        <br>
                        <label for="pass">Password</label>
                        <br>
                        <input type="password" name="pass" class="b1">
                        <br>
                        <br>
                        <br>
                        <br>
                        <button id="one" name="log">Log In</button>
                        <br>
                        <br>
                        <br>
                    </form>
                
                    
                    
                </div>
                <div class="sec">
                    <h3 id="two">Keep yourself up to date with the latest deals and offers<br>Discounts, Promo codes, Giveaways<br>And many more</h3>
                    <br>
                    <h5 id="tt">So, what are you waiting for?<br>Subscribe to our newsletter</h5>
                    <form method="post">
                        <input type="email" id="b2" name="em1">
                        <br>
                        <br>
                        <br>
                        <button id="bu3"  name="si">SUBMIT</button>
                        <br>
                        <br>
                        <br>
                        <br>

                    </form>
                    
                </div>
            </form>
        </div>
    </main>
</body>
</html>
<?php
include("Database/db_user.php");

$sql="SELECT *FROM users;";
$s="SELECT *FROM subs";
$res=mysqli_query($conn,$sql);
$su=mysqli_query($conn,$s);
if (isset($_POST['mail']) || isset($_POST['pass'])) {
    $tm=$_POST["mail"];
    $to=$_POST["pass"];
}
if (isset($_POST["em1"])) {
    $tz=$_POST["em1"];
}
$n=0;
if (isset($_POST["si"])) {
    
    while ($row=mysqli_fetch_assoc($su)) {
        $co=$row['sub'];
        if ($co==$tz) {
            $n=1;
        }
    }
    if ($n==0) {
        $cc="INSERT INTO subs (sub)
        VALUES ('$tz')";
        mysqli_query($conn, $cc);
    }
}
if (isset($_POST["log"])) {
    while ($row=mysqli_fetch_assoc($res)) {
        $t1=$row['Mail'];
        $t2=$row['Password'];
        $fn=$row['First'];
        $ln=$row['Last'];
        if ($tm==$t1 && $to==$t2) {
            
            include("Database/db_kits.php");
            $sq='TRUNCATE TABLE kits;';
            mysqli_query($conn,$sq);
            
            header("Location: home.php");
            session_start();
            $_SESSION["user"]=$t1;
            $_SESSION['fn']=$fn;
            $_SESSION['ln']=$ln;
        }
    }
}
mysqli_close($conn);


?>