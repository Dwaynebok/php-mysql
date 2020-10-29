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

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }



//edit student
public function editStudents(PDO $data)
{
    $handle = $data->prepare('UPDATE class SET firstname = :firstname, lastname = :lastname , WHERE email = :email');
    $handle->bindValue('firstname', $this->getFirstname());
    $handle->bindValue('lastname', $this->getLastname());
    $handle->bindValue('email', $this->getEmail());

    $handle->execute();
}

//delete student
public function deleteStudent(PDO $data)
{
    $handle = $data->prepare('DELETE FROM class WHERE id = :id');
    $handle->bindValue('id', $this->getId());
    $handle->execute();
}





}