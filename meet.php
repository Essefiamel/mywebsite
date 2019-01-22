<?php
$html=<<<html
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body> 

html;
echo $html;
if (isset ($_GET['time'] )&& isset ($_GET['date'] ) && isset ($_GET['pays'] ) ){
    if (empty($_GET['time']) && empty($_GET['date']) && empty($_GET['date'])    ){

        header("location:meet.html");
    }
    elseif (isset ($_GET['time'] )&& isset ($_GET['date'] ) && isset ($_GET['pays'] )){
        
        if (is_nan($_GET['time'])==false && strlen($_GET['time'])==5 && $_GET['pays'] != -1){
            session_start();
            $_SESSION['time']=$_GET['time'];
            $_SESSION['date']=$_GET['date'];
            $_SESSION['pays']=$_GET['pays'];
            header("location:index.html");

        }
        else {
            header("location:meeting.php");//reduration vers la page principale
        }
    }





}
$x=<<<fin
</body>
</html>
fin;
echo $fin;
?>