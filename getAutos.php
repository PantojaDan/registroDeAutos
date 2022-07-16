<?php

include 'database.php';

$query = "SELECT * FROM producto";
$result = mysqli_query($conn, $query);

if(!$result){
    die("Querie failed!");
}

while($autos = mysqli_fetch_array($result)){
    echo "<pre>";
        echo "\n".$autos['descripcion'];
        echo "\n".$autos['price'];
        echo "\n".$autos['dislikes'];
        echo "\n".$autos['likes'];
        echo "\n".$autos['loves'];
        echo "\n".$autos['dir_img'];
    echo "</pre>";
    //$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //echo  $link;
}


?>