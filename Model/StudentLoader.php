<?php


class StudentLoader extends DatabaseConnection
{
    private array $Students = [];

    /**
     * StudentLoader constructor.
     * @param array $Students
     */
    public function __construct(array $Students)
    {

        $handle = $this->Connection()->prepare("INSERT * FROM student");
        $handle->execute();
        foreach ($handle->fetchAll() as $student) {
            $this->student[$student['id']] = new $student ($student['firstname'], $student['lastname'], $student['email'] );
        }
    }


    /**
     * @return array
     */
    public function getStudents(): array
    {
        return $this->Students;
    }




}