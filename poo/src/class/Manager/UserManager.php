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
    public static function findAll()
    {
        $conn = ConnectDB::openConn();
        print_r($conn);
        try
        {
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