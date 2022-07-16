<?php

session_start();
include 'database.php';


function moveIntoMyDir(){
    $name_image = $_FILES["image"]["name"];
    $ruta_temporal = $_FILES["image"]["tmp_name"];
    //$ruta_a_subir = "./img/$name_image";
    $ruta_a_subir = "./$name_image";
    move_uploaded_file($ruta_temporal,$ruta_a_subir);
}

function formatPrice($price){
    $priceReset = "";

    for ($i = 0; $i < strlen($price) ; $i++) { 
       if($price[$i] !== "." ){
            $priceReset .= $price[$i];
       }
    }

    return $priceReset;
}

if(!empty($_FILES["image"]["name"]) && !empty($_POST["name"]) && !empty($_POST["price"])){
    moveIntoMyDir();

    $description = $_POST["name"];
    $price = $_POST["price"];
    $img_dir = "http://$_SERVER[HTTP_HOST]/".$_FILES["image"]["name"];

    $price = formatPrice($price);
    $price = intval($price);

    $query = "INSERT INTO producto(descripcion, price, dislikes, likes, loves, dir_img) VALUES('$description','$price',0,0,0,'$img_dir')";
    $stmt = mysqli_query($conn,$query);
    
    if(!$stmt){
        die("Querie failed");
    }

    $_SESSION['mnsg'] = 'Car added successfully';
    $_SESSION['mnsg_type'] = 'done';
}else{
    $_SESSION['mnsg'] = 'All fields are required';
    $_SESSION['mnsg_type'] = 'error';
}

header("Location: index.php");

?>