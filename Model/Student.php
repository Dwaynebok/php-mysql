<?php


class Student extends DatabaseConnection
{
    private string $firstname;
    private string $lastname;
    private string $email;

    /**
     * Student constructor.
     * @param string $firstname
     * @param string $lastname
     * @param string $email
     */
    public function __construct(string $firstname, string $lastname, string $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }


}