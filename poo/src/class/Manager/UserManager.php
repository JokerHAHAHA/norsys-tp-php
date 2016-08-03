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
     * findAll users
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

    /**
     * find one user by id
     * 
     * @return array
     */
    public static function findOneById($id)
    {
        try
        {
            $conn = ConnectDB::openConn();

            $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
            $stmt->bindParam(':id', $id);

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