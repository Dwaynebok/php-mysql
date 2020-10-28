<?php


class overVIewController
{

    public function displayStudents()
    {

        $getStudent = new StudentLoader();
        $students = $getStudent->getStudents();


        require "View/overView.php";
    }
}