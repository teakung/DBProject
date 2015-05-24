<?php session_start();?>
<html>
<!DOCTYPE html>
  <head>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/jumbotron.css" rel="stylesheet">
  <link href="css/grid.css" rel="stylesheet">

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

<form class="form-horizontal" action="Register_process.php" method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>

</body>
</html>