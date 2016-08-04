<?php
namespace Poo\Model;

/**
 * CLass User
 * 
 * create, get and set Users
 */
class Ticket
{

    /**
     * @var string
     */
    private $maker;


    /**
     * @var string
     */
    private $worker;


    /**
     * @var string
     */
    private $description;
    

    /**
     * Constructor
     * 
     * @param maker
     * @param woker
     * @param description
     */
    public function __construct($maker, $woker, $description)
    {
        $this->maker = $maker;
        $this->woker = $woker;
        $this->description = $description;
    }

    /**
     * Get maker
     * 
     * @param maker
     * @return string
     */
    public function getMaker()
    {
        return $this->maker;
    }
    /**
     * Get worker
     * 
     * @param worker
     * @return string
     */
    public function getWorker()
    {
        return $this->worker;
    }
    /**
     * Get description
     * 
     * @param description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

}