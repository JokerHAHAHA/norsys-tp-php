<?php

namespace Poo\Model;


/**
 * 
 */
class ConnectDB
{
    /**
     * Open conn
     *  
     */
    public static function openConn()
    {
        try 
        {

            $conn = new \PDO("mysql:host=localhost;dbname=tuto_php", 'root', 'root');

            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $conn;

        }

        catch(PDOException $e)
        {
            echo $e->getMessage();
        }    

    }


    /**
     * Close conn
     *  
     */
    public static function closeConn($conn)
    {
        return $conn = null;
    }
}
