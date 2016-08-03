<?php

use \Poo\Autoloader;
use \Poo\Model\ConnectDB;
use \Poo\Model\User;
use \Poo\Model\UserManager;

require '../src/class/Autoloader.php';
Autoloader::require();

// $conn = (new ConnectDB())->getConn();

// try
// {

//     $stmt = $conn->prepare("SELECT * FROM users");
//     if ($stmt->execute()) {
//         $resp = $stmt->fetchAll();      
//     }
// }
// catch(PDOException $e)
// {
//     echo "Error: " . $e->getMessage();
// }

// =============================================================
$conn = ConnectDB::openConn();

// try
// {

//     $stmt = $conn->prepare("SELECT * FROM users");
//     if ($stmt->execute()) {
//         $resp = $stmt->fetchAll();      
//     }
// }
// catch(PDOException $e)
// {
//     echo "Error: " . $e->getMessage();
// }

print_r(UserManager::findAll());






