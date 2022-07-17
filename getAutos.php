<?php

include 'database.php';

$query = "SELECT * FROM producto";
$result = mysqli_query($conn, $query);

if(!$result){
    die("Querie failed!");
}

$autos = [];

while($row = mysqli_fetch_array($result)){
    $auto = [
        "id" => $row['id'],
        "description" => $row['descripcion'],
        "price" => $row['price'],
        "dislikes" => $row['likes'],
        "likes" => $row['loves'],
        "loves" => $row['loves'],
        "dir_img" => $row['dir_img']
    ];
    array_push($autos, $auto); 
}

echo  json_encode($autos);

?>