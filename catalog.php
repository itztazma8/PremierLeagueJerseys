<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    
    <link rel="icon" type="image/png" href="CSS/number-8.png">
    <link rel="stylesheet" href="CSS/catalog.css">
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
        <div id="b2">
            <p id="n1">Welcome</p>
            <div id="t1">Here you can manually search for jereys<br>Write the Club name or the Price</div>
            <br>
            <br>
        </div>
        
        <form method="post" class="lo">
            <input type="text" class="one" placeholder="search" name="inp">
            <button class="dm" name="b1">GO</button>
        </form>
        <br>
        <br>
        <?php
        $k="";
        if (isset($_POST['b1'])) {
            if (isset($_POST['inp'])) {
                $k=$_POST['inp'];
            }
        }
        include("Database/db_search.php");
        $sql="SELECT *FROM search;";
        $res=mysqli_query($conn,$sql);
        $k=strtoupper($k);
        while ($row=mysqli_fetch_assoc($res)) {
            $na=$row['Club'];
            $ph=$row['Price_H'];
            $pa=$row['Price_A'];
            $lin=$row['link'];
            
            if ($k==$na || $k==$ph || $k==$pa) {
                echo '<div id="b1">';
                echo '<br>';
                echo '<div class="el">';
                echo '<img src="CSS/Images/jersey.png" id=im>';
                echo '<br>';
                echo '<br>';
                echo 'Club: ';
                echo $na; 
                echo '<br>';
                echo '<br>';
                echo 'Price (Home): &#8364;';
                echo $ph; 
                echo '<br>';
                echo '<br>';
                echo 'Price (Away): &#8364;';
                echo $pa;
                echo '<br>';
                echo '<br>';
                echo '<a href='.$lin.' target="_blank" id="but">Go To Page</a>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
        <br>
    </main>
    <footer>
        <?php include("footer.html"); ?>
        
    </footer>

</body>
</html>
