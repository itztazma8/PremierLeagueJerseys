<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsenal</title>
    <link rel="icon" type="image/png" href="CSS/number-8.png">
    <link rel="stylesheet" href="CSS/CHE.css">
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
        <br>
        <div class="a1">
            <img src="CSS/Kits/ARS.jpg" class="im">
            <div id="a3">
                <h1 class="t1">23/24 Arsenal Home Kit</h1>
                <p class="det">The Arsenal 23/24 Home Jersey celebrates the team's unique anniversary with lightning bolts and gold details. Created for loyal club supporters, the jersey features sweat-wicking AEROREADY technology to keep you feeling dry, while a woven badge shows off your team pride.</p>
                <p class="det1">Size:</p>
                <form method="post" class="ff">
                    <input type="radio" id="s" name="shirt" value="S">
                    S
                    
                    <input type="radio" id="m" name="shirt" value="M">
                    M
                    
                    <input type="radio" id="l" name="shirt" value="L">
                    L
                    
                    <input type="radio" id="xl" name="shirt" value="XL">
                    XL
                    
                    <input type="radio" id="xxl" name="shirt" value="XXL">
                    XXL
                    <br>
                
                    <br>
                    
                    Select the number of kits
                    <br>
                    <br>
                    <select name="home" id="ss">
                        <option >1</option>
                        <option >2</option>
                        <option >3</option>
                        <option >4</option>
                        <option >5</option>
                    </select>
                    <br>
                    <h1 id="pr">&#8364; 90.00</h1>
                    
                    <button id="but" name="but1">Add To Cart</button>
                </form>
                
            </div>
            </div>
        </div>
        
        <div class="a1">
            <img src="CSS/Kits/ARAa.jpg" class="im">
            <div id="a3">
                <h1 class="t1">23/24 Arsenal Away Kit</h1>
                <p class="det">Arsenal's identity gets a modern update in the Arsenal 23/24 Away Shirt. Flowing over a bright yellow background, black meandering graphics suggest the continuous motion of supporters in N7 on match days.</p>
                <p class="det1">Size:</p>
                
                <form method="post" class="ff">
                    <input type="radio" id="s" name="shirt" value="S">
                    S
                    
                    <input type="radio" id="m" name="shirt" value="M">
                    M
                    
                    <input type="radio" id="l" name="shirt" value="L">
                    L
                    
                    <input type="radio" id="xl" name="shirt" value="XL">
                    XL
                    
                    <input type="radio" id="xxl" name="shirt" value="XXL">
                    XXL
                    <br>
                
                    <br>
                    
                    Select the number of kits
                    <br>
                    <br>
                    <select name="home" id="ss">
                        <option >1</option>
                        <option >2</option>
                        <option >3</option>
                        <option >4</option>
                        <option >5</option>
                    </select>
                    <br>
                    <h1 id="pr">&#8364; 80.00</h1>
                    
                    <button id="but" name="but2">Add To Cart</button>
                </form>
            </div>
            </div>
        </div>
    </main>
    
    <footer>
        <?php include("footer.html"); ?>
    </footer>
</body>
</html>
<?php
include("Database/db_kits.php");
$sql="SELECT *FROM kits;";
$res=mysqli_query($conn,$sql);

if (isset($_POST['shirt']) || isset($_POST['home'])) {
    $l1=$_POST["shirt"];
    $l2=$_POST["home"];
    $n=0;
    if (isset($_POST['but1'])) {
       
        while ($row=mysqli_fetch_assoc($res)) {
            $c=$row['name'];
            if ($c=='ARS_H') {
                
                $n=1;
                if ($l1=='S') {
                    $ff="UPDATE kits SET no=no+'$l2', S=S+'$l2' WHERE name='$c';";
                    mysqli_query($conn,$ff);
                }
                else if ($l1=='M') {
                    $ff="UPDATE kits SET no=no+'$l2', M=M+'$l2' WHERE name='$c';";
                    mysqli_query($conn,$ff);
                }
                else if ($l1=='L') {
                    $ff="UPDATE kits SET no=no+'$l2', L=L+'$l2' WHERE name='$c';";
                    mysqli_query($conn,$ff);

                }
                else if ($l1=='XL') {
                    $ff="UPDATE kits SET no=no+'$l2', XL=XL+'$l2' WHERE name='$c';";
                    mysqli_query($conn,$ff);

                }
                else {
                    $ff="UPDATE kits SET no=no+'$l2', XXL=XXL+'$l2' WHERE name='$c';";
                    mysqli_query($conn,$ff);

                }
            }
        }
        if ($n==0) {
            if ($l1=='S') {
                $cc="INSERT INTO kits (name, no, price, S, M, L, XL, XXL)
                VALUES ('ARS_H', '$l2', 90, '$l2',0,0,0,0)";
                mysqli_query($conn, $cc);
            }
            else if ($l1=='M') {
                
                $cc="INSERT INTO kits (name, no, price, S, M, L, XL, XXL)
                VALUES ('ARS_H', '$l2', 90, 0,'$l2',0,0,0)";
                mysqli_query($conn, $cc);
            }
            else if ($l1=='L') {
                
                $cc="INSERT INTO kits (name, no, price, S, M, L, XL, XXL)
                VALUES ('ARS_H', '$l2', 90, 0,0,'$l2',0,0)";
                mysqli_query($conn, $cc);
            }
            else if ($l1=='XL') {
                
                $cc="INSERT INTO kits (name, no, price, S, M, L, XL, XXL)
                VALUES ('ARS_H', '$l2', 90, 0,0,0,'$l2',0)";
                mysqli_query($conn, $cc);
            } 
            else {
                
                $cc="INSERT INTO kits (name, no, price, S, M, L, XL, XXL)
                VALUES ('ARS_H', '$l2', 90, 0,0,0,0,'$l2')";
                mysqli_query($conn, $cc);
            }
        }
    }
    else {        
        while ($row=mysqli_fetch_assoc($res)) {
        $c=$row['name'];
        if ($c=='ARS_A') {
            
            $n=1;
            if ($l1=='S') {
                $ff="UPDATE kits SET no=no+'$l2', S=S+'$l2' WHERE name='$c';";
                mysqli_query($conn,$ff);
            }
            else if ($l1=='M') {
                $ff="UPDATE kits SET no=no+'$l2', M=M+'$l2' WHERE name='$c';";
                mysqli_query($conn,$ff);
            }
            else if ($l1=='L') {
                $ff="UPDATE kits SET no=no+'$l2', L=L+'$l2' WHERE name='$c';";
                mysqli_query($conn,$ff);

            }
            else if ($l1=='XL') {
                $ff="UPDATE kits SET no=no+'$l2', XL=XL+'$l2' WHERE name='$c';";
                mysqli_query($conn,$ff);

            }
            else {
                $ff="UPDATE kits SET no=no+'$l2', XXL=XXL+'$l2' WHERE name='$c';";
                mysqli_query($conn,$ff);

            }
        }
    }
    if ($n==0) {
        if ($l1=='S') {
            $cc="INSERT INTO kits (name, no, price, S, M, L, XL, XXL)
            VALUES ('ARS_A', '$l2', 80, '$l2',0,0,0,0)";
            mysqli_query($conn, $cc);
        }
        else if ($l1=='M') {
            
            $cc="INSERT INTO kits (name, no, price, S, M, L, XL, XXL)
            VALUES ('ARS_A', '$l2', 80, 0,'$l2',0,0,0)";
            mysqli_query($conn, $cc);
        }
        else if ($l1=='L') {
            
            $cc="INSERT INTO kits (name, no, price, S, M, L, XL, XXL)
            VALUES ('ARS_A', '$l2', 80, 0,0,'$l2',0,0)";
            mysqli_query($conn, $cc);
        }
        else if ($l1=='XL') {
            
            $cc="INSERT INTO kits (name, no, price, S, M, L, XL, XXL)
            VALUES ('ARS_A', '$l2', 80, 0,0,0,'$l2',0)";
            mysqli_query($conn, $cc);
        } 
        else {
            
            $cc="INSERT INTO kits (name, no, price, S, M, L, XL, XXL)
            VALUES ('ARS_A', '$l2', 80, 0,0,0,0,'$l2')";
            mysqli_query($conn, $cc);
        }
    }

    }
}

mysqli_close($conn);
?>
