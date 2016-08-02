<?php

/**
 * CLass User
 * 
 * create, get and set Users
 */
class User
{

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $firstname;
    /**
     * @var string
     */
    private $email;

    /**
     * Constructor
     * 
     * @param name
     * @param firstname
     * @param email
     */
    public function __construct($name, $firstname, $email)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
    }

    /**
     * Get name
     * 
     * @param name
     * @return string
     */

}