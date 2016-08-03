<?php
namespace Poo\Manager;
use Poo\Model\ConnectDB;
use Poo\Model\User;

/**
 * Class UserManager
 */
class UserManager
{

    /**
     * finAll
     * 
     * @return array
     */
    static public function findAll()
    {
        try
        {
            $conn = ConnectDB::openConn();
            $stmt = $conn->prepare("SELECT * FROM users");
            if ($stmt->execute()) {
                return $stmt->fetchAll();      
            }
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }

    }
}