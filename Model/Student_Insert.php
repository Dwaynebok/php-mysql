<?php


class Student_Insert extends DatabaseConnection
{

    public function __construct($name, $l_name, $email)
    {
        $handle = $this->Connection()->prepare('INSERT INTO user (firstname, lastname, email) VALUES (:firstname, :lastname, :email)');
        $handle->bindValue(':firstname', $name);
        $handle->bindValue(':lastname', $l_name);
        $handle->bindValue(':email', $email);
        $handle->execute();


    }

}