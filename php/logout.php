<?php

$username = filter_input(INPUT_GET,'username');
$password = filter_input(INPUT_GET,'pass');
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="sports";
    $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
    header("Location:index.php");
?>