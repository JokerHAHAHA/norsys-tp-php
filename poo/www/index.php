<?php

use \Poo\Autoloader;
use \Poo\Model\ConnectDB;
use \Poo\Model\Person;
use \Poo\Model\Animal;


require '../src/class/Autoloader.php';
Autoloader::require();


$conn = (new ConnectDB())->getConn();








// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "tuto_php";

// try 
// {

//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }

// catch(PDOException $e)
// {
//     echo $e->getMessage();
// }


try
{

    $stmt = $conn->prepare("SELECT * FROM users");
    if ($stmt->execute()) {
        $resp = $stmt->fetchAll();      
    }
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}



print_r($resp);








