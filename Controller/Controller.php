<?php


class Controller
{
 public function render(){
     if(!empty($_POST['name']) && !empty($_POST['l_name']) && !empty($_POST['email'])){
         $name = $_POST['name'];
         $l_name = $_POST['l_name'];
         $email = $_POST['email'];
     }
 }

}