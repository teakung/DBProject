<?php session_start();?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $comment = $_POST['comment'];
        $notebookID = $_POST['notebookID'];
        if (empty($comment)) {
            echo "Name is empty";
        } else {
            echo "Your comment is $comment";
        }
    }
    echo "Your user is ".$_SESSION['userID'];
    echo "Your Notebook is $notebookID";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "databaseproject";

    try {
        $dh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $dh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO comment (notebookID, username, comment) VALUES (:notebookID, :username, :comment)";
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }

     $statement = $dh->prepare($sql);
        $statement->bindParam(':notebookID' , $notebookID);
        $statement->bindParam(':username' , $_SESSION['userID']);
        $statement->bindParam(':comment' , $comment);
        $statement->execute();
        header("Location: notebook.php?notebookID=$notebookID");
    ?>
