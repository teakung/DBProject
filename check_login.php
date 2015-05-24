<?php session_start() ; ?>
<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>check_login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet" >
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    </head>

    <body>

    <?php
        $servername = "localhost";
        $userdb = "root";
        $passdb = "";
        $dbname = "databaseproject";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['user'];
            $password = $_POST['pass'];
        }       
        if ($username == null)
            echo "user name is null";
        else{
            $dh = new PDO("mysql:host=$servername;dbname=$dbname", $userdb, $passdb);
            $dh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT password FROM user WHERE username = '$username' ";
            $query = $dh -> query($sql);
            foreach ($query as $row) {
                $pass = $row['password'];
            }
            if (@$pass == $password){
                $_SESSION['login'] = 1 ;
                $_SESSION['userID'] = $username;
                header("Location: index.php");
            }
            else{
                $_SESSION['login'] = 0 ;
        ?>
                your username or password Incorrect !! ..
                <?php
            }
        }
    ?>
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
            <a href="Register.html" button type="button" class="btn btn-info" >Register</a>
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
        <br>
        <a href="index.php" class="btn btn-lg btn-default" role="button">Back Home</a>
    </div>
    </body>
</html>