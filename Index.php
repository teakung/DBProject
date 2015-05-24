<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>NoteBook Search</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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


    <!-- Main jumbotron for a primary marketing message or call to action -->

    <section class="container-fluid" id="section1">
      <div class="v-center">
        <h1 class="text-center">Welcome!! Sir</h1>
        <h2 class="text-center lato animate slideInDown">Search <b>Laptop</b> what you want</h2>
        <p class="text-center">
          <br>
          <a href="searchpage.php" class="btn btn-danger btn-lg btn-huge lato" data-toggle="modal" data-target="#myModal">Go to Search</a>
          <a href="browse.php" class="btn btn-danger btn-lg btn-huge lato" data-toggle="modal" data-target="#myModal">Or Browse our collection</a>
        </p>
      </div>
    </section>

    <div class="container">
      <div class = "row">
        <div class = "col-md-4">
          <h1>Recommend!</h1>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail" >
            <img src="PicNoteBook/1.jpg" style="width:200xp;height:200px">
            <div class="caption">
              <h3>Lenovo Y5070</h3>
              <p><b>Entry price, high-end gaming.</b>
                <br>
                Though the notebook is marketed as an entry-level portable gaming machine, we believe even serious gamers should take a look at what the new Y50 has to offer.
              </p>
              <p><!--<a href="notebook.php" class="btn btn-warning" role="button" >Info</a>-->
                <form action="Notebook.php" method="get">
                  <button name="notebookID" type="submit" value="1" class="btn btn-warning">Info</button>
                </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="PicNoteBook/2.jpg" style="width:200xp;height:200px" >
            <div class="caption">
              <h3>Asus X550ZE-XX047D</h3>
              <p><b>Nevertheless, screen and battery</b>
                <br>
                Still a marked improvement over its predecessors. Its Ivy Bridge processor may be showing its age, but it can still compete with other budget laptops in raw performance
              </p>
              <p><form action="Notebook.php" method="get">
                  <button name="notebookID" type="submit" value="2" class="btn btn-warning">Info</button>
                </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="PicNoteBook/6.jpg" style="width:200xp;height:200px">
            <div class="caption">
              <h3>MSI GP60 2qf-892th </h3>
              <p><b>Semi-gamer.</b>
                <br>
                MSI once again equips a general purpose GP series unit with powerful hardware for a relatively cheap price. A mid-range graphics card from Nvidia and a Core i5 dual-core CPU from Intel are installed.
              </p>
              <p><form action="Notebook.php" method="get">
                  <button name="notebookID" type="submit" value="6" class="btn btn-warning">Info</button>
                </form></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="PicNoteBook/9.jpg" style="width:200xp;height:200px">
            <div class="caption">
              <h3>Dell Inspiron N3542</h3>
              <p><b>Mundane office and Home usage.</b>
                <br>
                 It has reasonably well build quality combined with above average configuration. Its touch-screen display is beautifully integrated and works well in all sorts of applications.
               </p>
              <p><form action="Notebook.php" method="get">
                  <button name="notebookID" type="submit" value="9" class="btn btn-warning">Info</button>
                </form></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="PicNoteBook/13.jpg" style="width:200xp;height:200px">
            <div class="caption">
              <h3>Apple Macbook Pro Retina 13</h3>
              <p><b>May the Force be with you.</b>
                <br>
                An innovative new Force Touch trackpad is probably the most interesting new feature of the early 2015 MacBook Pro Retina 13 – otherwise, there are more evolutionary than revolutionary changes.
              </p>
              <p><form action="Notebook.php" method="get">
                  <button name="notebookID" type="submit" value="13" class="btn btn-warning">Info</button>
                </form></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="PicNoteBook/18.jpg" style="width:200xp;height:200px">
            <div class="caption">
              <h3>Hp Pavilion 15</h3>
              <p><b>Affordable all-rounder.</b>
                <br>
                Its all-round Pavilion 15 laptop. The buyer gets a Full HD screen alongside a GeForce 840M GPU, and a Core i5 processor. Can you really go wrong with this device at this price?
              </p>
              <p><form action="Notebook.php" method="get">
                  <button name="notebookID" type="submit" value="18" class="btn btn-warning">Info</button>
                </form></p>
            </div>
          </div>
        </div>
      </div>



      <hr>

      <footer>
        <p>&copy; TT 2015</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
