<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databaseproject";

try {
    $dh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $dh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM notebook,cpu,vga WHERE notebook.CPUID = cpu.CPUID AND notebook.VGAID = vga.VGAID";
    $query = $dh -> query($sql);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
<html>

    <head>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/jumbotron.css" rel="stylesheet">
      <link href="css/grid.css" rel="stylesheet">
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

        </div><!--/.navbar-collapse -->
      </div>
    </div>



    <div class="container">
      <div class = "col-md-12">
      <div>

    <?php 
      echo 'There are '.$query->rowCount().'NoteBooks';
      echo "<br><hr style='width: 100%; color: black; height: 1px; background-color:black;'/>";
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $name = $row['NBname'];
        $NBID = $row['notebookID'];
        echo "<a href='notebook.php?notebookID=".$NBID."'> $name </a><br><hr style='width: 100%; color: black; height: 1px; background-color:black;'/>";

        }?>
        </div>
        </div>
      </div>   
     <div class="container">
        <a href="index.php" class="btn btn-lg btn-default" role="button">Back Home</a>
        <a href="search.html" class="btn btn-lg btn-default" role="button">Back tosearch</a>
     </div>

</body>
</html>