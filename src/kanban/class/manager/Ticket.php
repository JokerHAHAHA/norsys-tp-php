<?php

class TicketManager
{
    /**
     * Get all table
     * 
     * @return array
    */
    public function findAll()
    {

        try
        {
            include 'includes/connectDB.php';

            $stmt = $conn->prepare("SELECT * FROM tickets");
            if ($stmt->execute()) {
                $resp = $stmt->fetchAll();      
            }
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }

        $conn = null;

        return $resp;

    }
}