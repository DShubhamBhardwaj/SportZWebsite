<?php
$firstname = filter_input(INPUT_POST,'fn');
$lastname = filter_input(INPUT_POST,'ln');
$email = filter_input(INPUT_POST,'email');
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
$b=filter_input(INPUT_POST,'b');
$f=filter_input(INPUT_POST,'f');
$v=filter_input(INPUT_POST,'v');
$k=filter_input(INPUT_POST,'k');
$c=filter_input(INPUT_POST,'c');
$h=filter_input(INPUT_POST,'h');

if(!empty($username)&&!empty($password)&&!empty($lastname)&&!empty($firstname)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="sports";
    $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
    
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{   
        
        $sql="INSERT INTO user values(NULL,'$firstname','$lastname','$username','$password')";
        if($conn->query($sql)){
             header("Location:success.php?username=$username&pass=$password");
        }else{
            
            echo'<script>
            alert("username already exits")
            </script>
            '; 
        }
        if($b=='on'){
            $sql1="INSERT INTO preferences values('$username','basketball')";
            if($conn->query($sql1)){
            }
        }
        if($f=='on'){
            $sql1="INSERT INTO preferences values('$username','football')";
            $conn->query($sql1);
        }
        if($k=='on'){
            $sql1="INSERT INTO preferences values('$username','kabbadi')";
            $conn->query($sql1);
        }
        if($c=='on'){
            $sql1="INSERT INTO preferences values('$username','cricket')";
            $conn->query($sql1);
        }
        if($h=='on'){
            $sql1="INSERT INTO preferences values('$username','hockey')";
            $conn->query($sql1);
        }
        if($v=='on'){
            $sql1="INSERT INTO preferences values('$username','volleyball')";
            $conn->query($sql1);
        }
        
    }
    
    
}
?>