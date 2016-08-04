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

        ConnectDB::closeConn($conn);

    }

    /**
     * Create one user
     * 
     */
    public static function create($datas)
    {

        try
        {   
            $conn = ConnectDB::openConn();

            $stmt = $conn->prepare("INSERT INTO users (name, first_name, email) 
                VALUES (:name, :first_name, :email)");
            $stmt->bindParam(':name', $datas['name']);
            $stmt->bindParam(':first_name', $datas['firstname']);
            $stmt->bindParam(':email', $datas['emai']);

            $stmt->execute();

        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }

        ConnectDB::closeConn($conn);

        return true;
    }

    /**
     * Check varibales
     * 
     * @return array
     */
    public static function validateDatas($name, $firstname, $email)
    {

        // Remove all illegal characters from email
        $name = filter_var($name, FILTER_SANITIZE_STRING);

        $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            return array('name' => $name, 'firstname' => $firstname, 'email' => $email);
        } else {
            return array('name' => $name, 'firstname' => $firstname, 'email' => false);
        }

    }

}
















