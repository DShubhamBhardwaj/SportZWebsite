<?php

$username = filter_input(INPUT_GET,'username');
$password = filter_input(INPUT_GET,'pass');
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="sports";
    $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
    
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{ $sql="select username from user where username='$username' and password='$password'";
        $result=$conn->query($sql);
         if($result->num_rows>0){
            header("Location:verified.php?username=$username");
         }
         else{
             echo"password username doesnot match";
         }
}

?>
    