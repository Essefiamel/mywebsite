<?php


$last=$_GET['Lastname'];

$first = $_GET['Firstname'];
$user=$_GET['username'];
$pwd=$_GET['pass'];
try{
    $conn = new PDO("mysql:host=localhost;dbname=mywebsite;charset=utf8","root","");
    $sql = "INSERT INTO `utilisateurs`( `first_name`, `last_name`, `username`, `password`) VALUES ('$first','$last','$user','$pwd')";
    $reponse = $conn->query($sql);
    }
catch(Exception $e){
    echo "error : ".$e->getMessage();
}
header("location:index.html");
?>