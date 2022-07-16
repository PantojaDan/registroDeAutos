<?php


try{    
    $conn = mysqli_connect(
        'us-cdbr-east-06.cleardb.net',
        'b0c4bf59192726',
        'fc2c1d60',
        'heroku_6a5a35973d3451e'        
    );
}catch(Exception $e){
    echo "No Connected Database".$e->getMessage();
}


/*$query = "
CREATE TABLE Producto(
	id int NOT NULL AUTO_INCREMENT,
	descripcion varchar(35) NOT NULL,
	price int NOT NULL,
	dislikes int NOT NULL,
	likes int NOT NULL,
	loves int NOT NULL,
	dir_img varchar(500) NOT NULL,
    PRIMARY KEY (id)
);
";


$result = mysqli_query($conn,$query);

if($result){
    echo "Querie was done";
}
*/
// PHP Data Objects(PDO) Sample Code:



/*try {
    $conn = new PDO("sqlsrv:server = tcp:agenciasvelte.database.windows.net,1433; Database = autos", "Adminitrador", "13dpr0056c.");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Adminitrador", "pwd" => "13dpr0056c.", "Database" => "autos", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:agenciasvelte.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
*/



/*
$query = "SELECT TOP (1000) * FROM [dbo].[Producto]";
$stmt = sqlsrv_query($conn,$query);

if($stmt){
    while($autos = sqlsrv_fetch_array($stmt)){
        echo "<pre>";
            echo "\n" . $autos["descripcion"];
            echo "\n" . $autos["price"];
        echo "</pre>";
    }
}*/

?>