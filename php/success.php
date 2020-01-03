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
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
    <style>
        img{
            
            padding-left: 30px;
            padding-right: 30px;
        }
        img:hover{
            height: 40vh;
            width: 40vh;
        }
        
        
    .img-container{
    color: aliceblue;
    border: 1px solid #fff;
    padding: 10px 10px;  
   height: 30vh;
    width: 30vh;
    margin-top: 5vh;
    -webkit-box-shadow: 0px -3px 10px 9px rgba(20,20,20,1);
    -moz-box-shadow: 0px -3px 10px 9px rgba(20,20,20,1);
    box-shadow: 0px -3px 10px 9px rgba(20,20,20,1);

}
        p{
            font-size: 32px;
            color: black;
            
        }
        .bg
{
    background: url(img/footballBG2.jpg) no-repeat ;
    width: 100% ;
    height: 100vh;
    opacity: 80%;
}
        
        table{
            border: solid 5px black;
            width: 30%;
            color: #588c7e;
            font-family: monospace;
            font-size: 40px;
            opacity: 0.6;
        } 
    th{
        font-size: 30px;
        background-color: #283593;
        color: aliceblue;
        border: solid 5px black;
        padding-left: 10px;
        padding-right: 10px;
    }
        tr{
            background-color: blue;
            color: black;
            text-align: center;
            font-size: 25px;
            border: solid 5px black;
            
        }
        tr:nth-child(even){
            background-color: skyblue;
        }
        tr:nth-child(odd){
            background-color: #e1f5fe;
        }
        h1{
            font-size: 30px;
        }
    </style>
</head>

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
    <main role="main" class="container">
        <br><br><br>
        <?php

$username = filter_input(INPUT_GET,'username');
$password = filter_input(INPUT_GET,'pass');

$host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="sports";
    $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
    echo"<p> $username's dashboard:</p>";
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{ $sql="select preference from preferences where username='$username'";
          echo"<h1>Preferences:</h1>";
        $result=$conn->query($sql);
         if($result->num_rows>0){
              while($row = mysqli_fetch_row($result))
              {     
                    echo"<a href=$row[0].php?username=$username><img src=img/$row[0].jpg class=img-container></a>";               
              }
             $sql1="SELECT MAX(ID),MAX(CDate) FROM log";
             $res1=$conn->query($sql1);
             $row2 = mysqli_fetch_row($res1);
             $sql2="select g.Gname as Game,t1.Tname as HOST,t2.Tname as OPPONENT,u.scoreT1 as Score_Of_team1,u.scoreT2 as Score_Of_team3 ,u.result ,u.MDate
                    from games g, team t1, team t2, upadate u
                    where g.gameID=u.gameID
                    and t1.teamID=u.team1 
                    and t2.teamID=u.team2";
             
            echo"<br><br><h1>LATEST UPDATES(last updated on $row2[1]):</h1>";

            echo'
             <table>
            <th>Game</th>
            <th>Host Team </th>
            <th>Opponent Team</th>
            <th>Host scored </th>
            <th>Opponent scored </th>
            <th>Result </th>
            <th>Match_Date</th>
            ';   
            
             $res=$conn->query($sql2);
                if($res->num_rows>0){
              while($row1 = mysqli_fetch_row($res))
              {     
                   echo"
                   <tr>
                        <td>$row1[0]</td>
                        <td>$row1[1]</td>
                        <td>$row1[2]</td>
                        <td>$row1[3]</td>
                        <td>$row1[4]</td>
                        <td>$row1[5]</td>
                        <td>$row1[6]</td>
                    </tr>
                   ";                
              }
             
         }
            else{
             echo"password username doesnot match";
         }
         
    }
}
?>
    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


