<html>
<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "Okay";
    }
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
    $sql = "INSERT INTO user (username, password, email) VALUES (:name, :pass, :email)";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>

<?php
 $statement = $dh->prepare($sql);
    $statement->bindParam(':name' , $name);
    $statement->bindParam(':pass' , $pass);
    $statement->bindParam(':email' , $email);
    $statement->execute();
?>
<a href="index.php" class="btn btn-lg btn-default" role="button">Back Home</a>
</body>
</html>

