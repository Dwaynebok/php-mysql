<?php


class StudentLoader extends DatabaseConnection
{
    private  $Students;


    /**
     * StudentLoader constructor.
     */
    public function __construct()
    {

        $handle = $this->Connection()->prepare("SELECT * FROM student");
        $handle->execute();
       $this->Students = $handle->fetchAll();


    }


    /**
     * @return array
     */
    public function getStudents(): array
    {
        return $this->Students;
    }
}


