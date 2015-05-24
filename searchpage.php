<?php session_start();?>

<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
  <link href="css/theme.css" rel="stylesheet">
  <link href="css/grid.css" rel="stylesheet">
  <link href="css/searchform.css" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="Index.php">Notebook Search</a>
        </div>
        <div class="navbar-collapse collapse">
          <?php
            if (isset($_SESSION['userID'])) {?>
               
               <form class="navbar-form navbar-right" role="form" action = "logout.php ">
                <?php echo $_SESSION['userID'];?>
            <button type="submit" class="btn btn-danger">Log Out</button>
          </form>

            <?php }
             else {?>
              <form class="navbar-form navbar-right" role="form">
            <a href="Register_form.php" button type="button" class="btn btn-info" >Register</a>
          </form>
          <form class="navbar-form navbar-right" role="form" action = "check_login.php" method = "post">
            <div class="form-group">
              <input type="text" placeholder="Username" class="form-control" name = "user">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name = "pass">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
            <?php }?>
          

        </div><!--/.navbar-collapse -->
      </div>
    </div>

  <div class="container">
  <div class="row">
    <form method="post" action="search.php" class="search-form">
    <div class="col-lg-12">
            <p>Search By name,Model</p>
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" name="notebookname" placeholder = "Your Search here">
              <span class="input-group-btn">
              <button class="btn btn-default" type="submit">
              Search
             </button>

             </span>
             </div><!-- /input-group -->
        </div>
         </form>
    </div>

    <a href="index.php" class="btn btn-lg btn-default" role="button">Back Home</a>
   </div>
  </body>
</html>