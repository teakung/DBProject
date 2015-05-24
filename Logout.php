<?php session_start();?>
<?php
session_unset($_SESSION['login'],$_SESSION['userID']);
header("Location: index.php");
?> 
