<?php
$dbs="localhost";
$db_u="project";
$pass="Li8ningMcQueen";
$db_name="kits";
try {
    $conn=mysqli_connect($dbs,$db_u,$pass,$db_name);
    
}
catch(mysqli_sql_exception) {
    echo "Cant LULE";
}