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
        img{
            height: 80vh;
            width: 100%;
        }
        .bg{
            background-color: black;
        }
        h3{
            color: black;
            font-size: 35px;
            border: 1px solid black;
            background-color: gray;
            opacity: 60%;
        }
        .btn1{
            align-content: center;
            height: 50px;
            width: 350x;
            background-color: red;
            font-size: 30px;
            border-radius: 20px;
        }
        
    </style>
    
</head>

<body class="bg">

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#"><img src="img/logo.jpg" 
    style="height:40px;width:40px; border-radius: 100%"></a>
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
            <li class="nav-item">
                <a class="nav-link" href="signup.php">SIGN UP</a>
            </li>
        </ul>
    </div>
</nav>
    <main role="main" class="container">
        <br><br><br><div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-slide-to="0" class="active"></li>
    <li  data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block " src="img/index/1.jpg" alt="Lebron James">
      <div class="carousel-caption">
        <h3>ALL TEAMS :<br>KNOW THE RANKINGS OF YOUR TEAMS!</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block " src="img/index/2.jpg" alt="Kevin Durant">
        <div class="carousel-caption">
        <h3>KNOW YOUR PLAYERS BETTER </h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block " src="img/index/3.jpg" alt="Anthony Davis">
        <div class="carousel-caption">
        <h3>CHECKOUT THE YOUR PLAYER'S STATS</h3>
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
        
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

        </div>
        </div>
        <center>
        <div class="btn">
        <button class="btn1" id=mybtn ><a href="login.php" style="color:white">Let's Get Started</a></button>
        </div>
        </center>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>