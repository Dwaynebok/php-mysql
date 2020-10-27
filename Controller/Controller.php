<?php


class Controller
{
 public function render(){
     if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])){
         $name = $_POST['firstname'];
         $l_name = $_POST['lastname'];
         $email = $_POST['email'];
         //var_dump($email);
         $students = new Student_Insert($name, $l_name, $email);
         return $students;
     }
 }

}