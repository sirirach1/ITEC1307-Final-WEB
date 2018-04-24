<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bintu Online Bazar</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

      body{
        background: url('images/5515847-technology-wallpapers.png') no-repeat;
        background-size: cover;
      }
      </style>
      </head>
  <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
  <nav class="navbar navbar-default navbar-light" style="background-color: #000000;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Electronics <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="itemlist.php?category=CellPhone">Smart Phones</a></li>
            <li><a href="itemlist.php?category=Laptop">Laptops</a></li>
            <li><a href="index.php">Cameras </a></li>
            <li><a href="index.php">Televisions</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home & Furniture <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">Kitchen Essentials</a></li>
            <li><a href="index.php">Bath Essentials</a></li>
            <li><a href="index.php">Furniture</a></li>
            <li><a href="index.php">Dining & Serving</a></li>
            <li><a href="index.php">Cookware</a></li>
          </ul>
        </li>
        <li><a href="#">Book</a></li>
      </ul>

        <form method="post" action="searchitems.php" class="navbar-form navbar-left">
        <input size="50" type="text" name="tosearch" class="form-control" placeholder="Search">
        <button type="submit" name="submit" value="Search" class="btn btn-default">Submit</button>
        </form>
      
      <ul class="nav navbar-nav navbar-right">
      <?php
        if (session_status() == PHP_SESSION_NONE) {
        session_start();
        }
        echo "<li id=\"userinfo\"><a href=\"signin.php\">Login</a></li>
        <li><a href=\"validatesignup.php\">Signup</a></li></td></tr>";
      ?>
        <li><a class="navbar-brand" href="cart.php"><img style="max-width:25px;max-height:25px;" src="images/123.png" alt="Brand"></img>
        <li id="cartcountinfo"></li></a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>    
                </div>
            </div>
        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>