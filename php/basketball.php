<?php

$username = filter_input(INPUT_GET,'username');
$newusername=filter_input(INPUT_POST,'uname');
$host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="sports";
    $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
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

    <!-- Place your stylesheet here-->
    <style>
        .bg
        {
            background: url(img/basketballBG.jpg) no-repeat ;
            height: 100vh;
            width: 100%;
        }
        table{
            border-collapse: collapse;
            width: 30%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
        }  
        tr{
            background-color: green;
            color: white;
            
        }
        tr:nth-child(even){
            background-color: yellow;
        }
        tr:nth-child(odd){
            background-color: lightgreen;
        }
.d-block{
  opacity: 1;
  display: block;
  height: 50vh;
    width: 80vh;
  transition: .5s ease;
  backface-visibility: hidden;
}
        img{
            width: 80vh;
        }
        h1{
            color: azure;
        }

.carousel-inner:hover .d-block{
    opacity: 0.3;
}

.carousel-inner:hover .middle{
    opacity: 1;
}


.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.text {
  background-color: darkblue;
  color: white;
 font-family: sans-serif,Simplifica;
  font-size: 16px;
  padding: 16px 32px;
}
    </style>
</head>

<body class="bg">

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
</nav><center>
    <main role="main" class="container-fluid ">
        <br><br><br><br>
        <h1>TRENDING PLAYERS</h1>
         <div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-slide-to="0" class="active"></li>
    <li  data-slide-to="1"></li>
    <li  data-slide-to="2"></li>
    <li  data-slide-to="3"></li>
    <li  data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block " src="img/bb/1.jpeg" alt="Lebron James">
        <div class="middle">
            <a href="player.php?username=<?php echo $username ?>&gameID=1&teamID=11&name=Lebron"><div class="text">Lebron James</div></a>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block " src="img/bb/2.jpg" alt="Kevin Durant">
        <div class="middle">
            <a href="player.php?username=<?php echo $username ?>&gameID=1&teamID=11&name=Kevin"><div class="text">Kevin Durant</div></a>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block " src="img/bb/3.jpg" alt="Anthony Davis">
        <div class="middle">
            <a href="player.php?username=<?php echo $username ?>&gameID=1&teamID=11&name=Anthony"><div class="text">Anthony Davis</div></a>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block " src="img/bb/4.jpg" alt="Janmes Harden">
        <div class="middle">
            <a href="player.php?username=<?php echo $username ?>&gameID=1&teamID=11&name=James"><div class="text">James Harden</div></a>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block " src="img/bb/5.jpeg" alt="Stephen Curry">
        <div class="middle">
            <a href="player.php?username=<?php echo $username ?>&gameID=1&teamID=11&name=Stephen"><div class="text">Stephen Curry</div></a>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </main><!-- /.container -->
    <h1>Inetrnational Rankings :</h1>
    <table>
        <th>COUNTRY</th>
        <th>RANK</th>
    <?php

    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="sports";
    $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{ $sql="select Tname,Ranking from team where gameID='1'order by Ranking ";
        $result=$conn->query($sql);
         if($result->num_rows>0){
              while($row = mysqli_fetch_row($result))
              {
                    echo"<tr><td><a href=team.php?username=$username&gameID=1&name=$row[0]>$row[0]<a></td> <td> $row[1] </td></tr>";                }
         }
            
}
?>
        </table>
    <br><br><br>
</center>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>