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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Sprotzz</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
 .bg
{
    background: url(img/footballBG2.jpg) no-repeat ;
    width: 100% ;
    height: 100vh;
    opacity: 80%;
}
.form-container{
    color: aliceblue;
    border: 1px solid #fff;
    padding: 0px 60px;  
    height: 800px;
    width: 600px;
    margin-top: 10vh;
    -webkit-box-shadow: 0px -3px 10px 9px rgba(20,20,20,1);
    -moz-box-shadow: 0px -3px 10px 9px rgba(20,20,20,1);
    box-shadow: 0px -3px 10px 9px rgba(20,20,20,1);
    text-align: left;
    opacity: 100%;

}

label{
    color:black;
    font-size: 25px;
    
}
        h1{
            color: blue;
            text-align: center;
            font-size: 40px
        }
        input.largerCheckbox { 
            width: 20px; 
            height: 20px; 
            background-color: blue;
        }
        
        .lab{
            padding-left: 10px;
            color: black;
            font-size: 20px;
            
        }
        .muted{
            color: aliceblue
        }
    </style>
</head>

<body class=bg>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php"><img src="logo.jpg" 
    style="height:40px: ;width:40px; border-radius: 100%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">LOGIN</a>
            </li>
        </ul>
    </div>
</nav>
    <main role="main" class="container">
        
        <form  action="signup.php" method="post" class=form-container >
            <h1>SignUp</h1>
  <div class="form-group">
      <div class="form-group">
      <label for="Firstname"><b>Firstname*</b></label>
      <input type="text" class="form-control" id="Firstname" placeholder="Firstname" name="fn" required>
    </div>
    <div class="form-group">
      <label for="Lastname"><b>Lastname*</b></label>
      <input type="text" class="form-control" id="Lastname" placeholder="Lastname" name="ln" required>
    </div>
    <label for="Email"><b>Email address</b></label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
    <small id="emailHelp" class="muted">We'll never share your email with anyone else.</small>
  <div class="form-group">
        <label for="username"><b>Username*</b></label>
        <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
    
      
  </div>
  <div class="form-group">
    <label for="password"><b>Password*</b></label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
  </div>
<div class="form-group">
<label for="preferences"><b>Preferences*:</b></label><br>
  <input type="checkbox" class="largerCheckbox" id="basketball" name="b">
  <label class="lab" for="basketball"><b>Basketball&nbsp</b></label>
    <input type="checkbox" class="largerCheckbox" id="cricket" name="c">
    <label class="lab" for="cricket"><b>Cricket</b></label><br>
    <input type="checkbox" class="largerCheckbox" id="football" name="f">
    <label class="lab" for="football"><b>Football&nbsp&nbsp</b></label>
    <input type="checkbox" class="largerCheckbox" id="kabbadi" name="k">
    <label class="lab" for="kabbadi"><b>Kabbadi&nbsp&nbsp</b></label>
    <input type="checkbox" class="largerCheckbox" id="hockey" name="h">
    <label class="lab" for="hockey"><b>Hockey&nbsp</b></label><br>

<small id="emailHelp" class="muted" >Note: you will get updates related to the preferences selected</small>
</div>
      <div>
      <button type="submit" class="btn btn-primary">SignUp</button> <p>Don't Have An Account ? <a href="login.php">LogIn</a></p></div>
            </div>
      </form>
    </main><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
