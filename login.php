<?php
try{
    $con = new PDO('mysql:host=127.0.0.1;dbname=mywebsite', 'root', '');
}catch(PDOException $e){
    die($e->getMessage());
}

$result = $con->query ("SELECT * FROM utilisateurs");

if (!$result) {
    die('<p>ERREUR Requête invalide </p>');
}
$result->setFetchMode(PDO::FETCH_ASSOC);


echo"<table class='table table-bordered'>";
while ($row=$result->fetch()){
    echo"<tr>";

    
    $user = $row ['username'] ;
    $pwd=$row['password'];
    if ($_GET['username']==$user && $_GET['pass']==$pwd){
        header("location:index.html");
    }
    else{
        header("location:log_in.php");
    }
}

echo "</table>";
$result->closeCursor();
$con=null ;
?>