<?php

namespace Poo\Model;


/**
 * open connection to DB
 */
class ConnectDB
{
    private $dbOpen;
    private $servername = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $dbname = 'tuto_php';


    function __construct()
    {
print_r("mysql:host=" . $this->servername. ";dbname=". $this->dbname . ", " . $this->username . ", " . $this->password);
        try 
        {

            $conn = new PDO("mysql:host=" . $this->servername. ";dbname=". $this->dbname . ", " . $this->username . ", " . $this->password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            print_r($conn);
            $this->dbOpen = $conn;

        }

        catch(PDOException $e)
        {
            echo $e->getMessage();
        }    

    }

    public function getConn(){
        return $this->dbOpen;
    }

}
