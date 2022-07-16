<?php
// PHP Data Objects(PDO) Sample Code:
try {
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