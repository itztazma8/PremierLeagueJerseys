
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    <link rel="icon" type="image/png" href="CSS/number-8.png">
    <link rel="stylesheet" href="CSS/si.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        Luigi's
    </header>
    <main>
        <div class="Box_1">
            <h1>Welcome!</h1>
            
            <form method="POST" >
                <div class="fn">
                    <label>First Name</label>
                    <br>
                    <input type="text" name="First_Name" class="First">
                </div>
                <div class="ln">
                    <label>Last Name</label>
                    <br>
                    <input type="text" name="Last_name" class="First">
                </div>
                
                <div class="pass">
                    <br>
                    <label>Password</label>
                    <br>
                    <input type="password" name="pass" class="First">
                    <br>
                    <br>
                    N:B: You must use any special character, number (0-9)*
                    
                </div>
                <div class="mail">
                    <br>
                    <label>E-mail Address</label>
                    <br>
                    <input type="email" name="mail" class="First">
                </div>
                <div class="home">
                    <br>
                    <label>Address</label>
                    <br>
                    <input type="text" name="city" class="First">
                </div>
                <div class="house">
                    <br>
                    <label>City</label>
                    <br>
                    <input type="text" name="house" class="First">
                    <br>
                    <br>
                </div>
                <div class="log" >
                    <button id="but1" name="sign">SIGN UP</button>
                    
                    <br>
                    <br>
                    Already have an account?
                    <button id="but2" name="log">LOG IN</button>
                    
                    <br>
                    <br>
                </div>
                
            </form>
        </div>
        <div class="Box_2">
            <br>
        </div>
    </main>
    
</body>
</html>
<?php
include("Database/db_user.php");
 
if (isset($_POST['First_Name']) || isset($_POST['Last_name']) || isset($_POST['mail']) || isset($_POST['house']) || isset($_POST['city']) || isset($_POST['pass'])) {
    $fn=($_POST["First_Name"]);
    $ln=($_POST["Last_name"]);
    $mail=($_POST["mail"]);
    $add=($_POST["city"]);
    $city=($_POST["house"]);
    $pass=$_POST["pass"];
    if (isset($_POST["sign"])) {
        if (!empty($fn) && !empty($ln) && !empty($mail) && !empty($add) && !empty($city) && !empty($pass))  {
            $c1=0;
            $c2=0;
            $le="!#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
            $n="0123456789";
            for ($i=0;$i<strlen($pass);$i++) {
                $k=$pass[$i];
                for ($j=0;$j<strlen($le);$j++) {
                    if ($k==$le[$j]) {
                        $c1=1;
                    }
                }
                for ($z=0;$z<strlen($n);$z++) {
                    if ($k==$n[$z]) {
                        $c2=1;
                    }
                }
            }
            if ($c1==1 && $c2==1) {
                $cc="INSERT INTO users (First, Last, Mail, Address, Cit, Password)
                VALUES ('$fn', '$ln', '$mail', '$add', '$city', '$pass')";
                mysqli_query($conn, $cc);
                mysqli_close($conn);
                header("Location: pt1.php");
            }
            else {
                header("Location: signup.php");
            }
        }
        else {
            header("Location: signup.php");
        }
    }
    else if (isset($_POST['log'])) {
        header("Location: pt1.php");
        
    }

}
?>