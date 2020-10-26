<?php


class Student_Insert extends DatabaseConnection
{

    public function __construct($name, $lname, $email)
    {
        $handle = $this->Connection()->prepare('INSERT INTO student (first_name, last_name, email) VALUES (:firstname, :lastname, :email)');
        $handle->bindValue(':firstname', $name);
        $handle->bindValue(':lastname', $lname);
        $handle->bindValue(':email', $email);
        $handle->execute();


    }

}