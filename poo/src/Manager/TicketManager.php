<?php
namespace Poo\Manager;
use Poo\Model\ConnectDB;
use Poo\Model\Ticket;

/**
 * Class TicketManager
 */
class TicketManager
{

    /**
     * findAll tickets
     * 
     * @return array
     */
    public static function findAll()
    {
        $conn = ConnectDB::openConn();
        try
        {
            $stmt = $conn->prepare("SELECT * FROM tickets");
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
     * find one ticket by id
     * 
     * @return array
     */
    public static function findOneById($id)
    {
        try
        {
            $conn = ConnectDB::openConn();

            $stmt = $conn->prepare("SELECT * FROM tickets WHERE id = :id");
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
















