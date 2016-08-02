<?php

namespace Poo\Model;


/**
 * 
 */
class ConnectDB
{
    private $dbOpen;


    public function __construct()
    {
        try 
        {

            $conn = new \PDO("mysql:host=localhost;dbname=tuto_php", 'root', 'root');

            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
            $this->dbOpen = $conn;

        }

        catch(PDOException $e)
        {
            echo $e->getMessage();
        }    

    }
    /**
     * Get conn
     * 
     * @return object
     *  
     */
    public function getConn()
    {
        return $this->dbOpen;
    }
    /**
     * Close conn
     *  
     */
    public function closeConn()
    {
        $this->dbOpen = null;
    }
}
