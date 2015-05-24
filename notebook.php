<?php session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $notebookID = $_GET['notebookID'];
    /*if (empty($notebookID)) {
        echo "Name is empty";
    } else {
        echo "Your name is $notebookID";
    }*/
}
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databaseproject";

try {
    $dh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $dh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM notebook,cpu,vga WHERE notebook.CPUID = cpu.CPUID AND notebook.VGAID = vga.VGAID AND notebookID = '".$notebookID."' ";
    $query = $dh -> query($sql);
    foreach ($query as $row) {
        $name = $row['NBname'];
        $screensize = $row['screensize'];
        $screen_resolution = $row['screen_resolution'];
        $main_memory = $row['main_memory'];
        $harddisk = $row['harddisk'];
        $Optical_disk = $row['Optical_disk'];
        $Battery = $row['Battery'];
        $Weiqht = $row['Weiqht'];
        $Rating = $row['Rating'];
        $OS = $row['OS'];
        $Warranty = $row['Warranty'];
        $Price = $row['Price'];
        $VGA = $row['VGAname'];
        $CPU = $row['CPUname'];
        $remark = $row['remark'];
        $picture = $row['picture'];
    }
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
  <link href="css/theme.css" rel="stylesheet">
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
          <a class="navbar-brand" href="Index.php">Speccial</a>
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
    <?php echo "<center> <img src='PicNoteBook/".$picture."' style='width:640xp;height:360px'> </center>"?>
      <div class="row">
        <center><h1><?php echo $name ?></h1></center>
        <div class="col-md-4">Model</div>
        <div class="col-md-8"><?php echo $name ?></div>
        <div class="col-md-4">CPU</div>
        <div class="col-md-8"><?php echo $CPU ?></div>
        <div class="col-md-4">VGA</div>
        <div class="col-md-8"><?php echo $VGA ?></div>
        <div class="col-md-4">Screen size</div>
        <div class="col-md-8"><?php echo $screensize. ' inch' ?></div>
        <div class="col-md-4">Screen resolution</div>
        <div class="col-md-8"><?php echo $screen_resolution ?></div>
        <div class="col-md-4">Main memory</div>
        <div class="col-md-8"><?php echo $main_memory. ' GB' ?></div>
        <div class="col-md-4">Harddisk</div>
        <div class="col-md-8"><?php echo $harddisk. ' GB' ?></div>
        <div class="col-md-4">Optical disk</div>
        <div class="col-md-8">
          <?php 
          if($Optical_disk == "y"){
            echo 'yes';
            }
            else {
              echo 'no';
            } 
          ?>
        </div>
        <div class="col-md-4">Battery</div>
        <div class="col-md-8"><?php echo $Battery. ' Wh'?></div>
        <div class="col-md-4">Weiqht</div>
        <div class="col-md-8"><?php echo $Weiqht. ' KG' ?></div>
        <div class="col-md-4">Rating</div>
        <div class="col-md-8"><?php echo $Rating ?></div>
        <div class="col-md-4">Operating System</div>
        <div class="col-md-8"><?php echo $OS ?></div>
        <div class="col-md-4">Warranty</div>
        <div class="col-md-8"><?php echo $Warranty. ' Years' ?></div>
        <div class="col-md-4">Price</div>
        <div class="col-md-8"><?php echo $Price. ' BAHT' ?></div>
        <div class="col-md-4">Remark</div>
        <div class="col-md-8"><?php echo $remark ?></div>
      </div>
  </div>
  <div class="container">
    <?php
    $sql = "SELECT * FROM notebook,user,comment WHERE notebook.notebookID = comment.notebookID AND user.username = comment.username AND notebook.notebookID = '".$notebookID."' ";
    $query = $dh -> query($sql);
    echo 'There are '.$query->rowCount().'Comments<br>';
    foreach($query as $row) {
        echo "<div class='panel panel-warning' style='margin-top:30px;'>";
          echo "<div class='panel-heading'>";
          echo "<h3 class='panel-title'><small>comment by</small>"."&nbsp&nbsp".$row['username']."";
          echo "</h3></div>";
          echo "<div class='panel-body'>".$row['comment']."</div>";
          echo "</div>";
/*        echo $row['username'].' '.$row['comment']."<br>";*/
    } 
    ?>
  <div class="container">
  <div class="row">
    <form method="post" action="addcomment.php" class="search-form" role = 'form'>
    <div class="col-lg-12">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" name="comment">
              <input type="hidden" name="notebookID" value="<?php echo $notebookID?>">
              <span class="input-group-btn">

              <!-- <button class="btn btn-default" type="submit"> Comment </button> -->

              
              <?php if(ISSET($_SESSION['userID'])) 
              echo "<button type='submit' class='btn btn-default' >Comment</button>";
                        else
              echo "<button type='button' disabled='disabled' class='btn btn-default' >Please Log In</button>";?>

             </span>
             </div><!-- /input-group -->
        </div>
         </form>
    </div>



    <a href="index.php" class="btn btn-lg btn-default" role="button">Back Home</a>


  </div>
  </body>
</html>