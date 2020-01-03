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

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<style>
     img{
        height: 150px;
        width: 150px;
    }    
    }
    table{
            border: solid 1px black;
            width: 30%;
            color: #588c7e;
            font-family: monospace;
            font-size: 40px;
        } 
    th{
        font-size: 30px;
        background-color: #283593;
        color: aliceblue;
    }
        tr{
            background-color: blue;
            color: black;
            text-align: center;
            font-size: 25px; 
            
        }
        tr:nth-child(even){
            background-color: skyblue;
        }
        tr:nth-child(odd){
            background-color: #e1f5fe;
        }
    .bg
        {   background-color: black;

        }
    h1{
            color: azure;
        }

</style>

<body class=bg>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="success.php?username=<?php echo $username ?>" ><img src="img/logo.jpg" 
    style="height: 40px;width:40px; border-radius: 100%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="success.php?username=<?php echo $username ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="editprofile.php?username=<?php echo $username ?>">Edit Profile</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GAMES</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="basketball.php?username=<?php echo $username ?>">BASKETBALL</a>
                    <a class="dropdown-item" href="cricket.php?username=<?php echo $username ?>">CRICKET</a>
                    <a class="dropdown-item" href="football.php?username=<?php echo $username ?>">FOOTBALL</a>
                    <a class="dropdown-item" href="kabbadi.php?username=<?php echo $username ?>">KABADDI</a>
                    <a class="dropdown-item" href="hockey.php?username=<?php echo $username ?>">HOCKEY</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="search.php?<?php echo $username ?>">
            <input class="form-control mr-sm-2" type="text" placeholder="Search For Player" aria-label="Search id=id1" name="search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
    <center>
    <main role="main" class="container">
        <br><br><br><br>

        
        <?php
        $name = filter_input(INPUT_POST,'search');
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="sports";
        $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{ 
             $sql= "CALL search('$name')";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) >0){
             while($row = $result->fetch_assoc()){
                 echo"<table><tr><td>NAME:</td><td>".$row['Pname']."</td></tr>";
                   echo'<tr><td>PHOTO:</td>
                  <td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/></td></tr> 
                    '; 
                    echo"<tr><td>AGE:</td><td>".$row['age']."</td></tr><tr><td>ROLE:</td><td>".$row['position']."</td></tr><tr><td>ODI RANKING:</td><td>".$row['PRanking']."</td></tr><tr><td>MATCH PLAYED:</td><td>".$row['MPlayed']."</td></tr><tr><td>STATISTICS:</td><td>".$row['description']."</td></tr><table>";
             }   
            }
            }
        ?>
    </main><!-- /.container -->
        </center>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>