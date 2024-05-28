<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    
    <link rel="icon" type="image/png" href="CSS/number-8.png">
    <link rel="stylesheet" href="CSS/ra.css">
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
        <h1 id="a1">Got Questions?</h1>
        <form method="post" class="fm">
            We provide help through mail or in person
            <p id="a2">Do you wish to get help through mail?</p>
            <input type="radio" name="r" value="Y">Y
            <input type="radio" name="r" value="Y">N
            
            <p id="a2">Your Question?</p>
            <input type="text" name="q" id="q1">
            <br>
            <br>
            <button id="but" name="add">Submit</button>

        </form>
    </main>
    <footer>
        <?php include("footer.html"); ?>
    </footer>
</body>
</html>
<?php

include("Database/db_user.php");
if (isset($_POST['add'])) {
    $c;
    $q;
    if (isset($_POST['r']) || isset($_POST['q'])) {
        $c=$_POST['r'];
        $q=$_POST['q'];
    }
    $cc="INSERT INTO details (Det, co)
        VALUES ('$q','$c')";
    mysqli_query($conn,$cc);
    
    mysqli_close($conn);
}

?>