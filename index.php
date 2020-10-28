<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "Model/DatabaseConnection.php";
require "Model/Student.php";
require "Model/StudentLoader.php";
require "Model/Student_Insert.php";
require "Controller/overVIewController.php";
require "Controller/Controller.php";
require "Controller/profileController.php";


if (isset($_GET['page']) && $_GET['page'] == "display") {
    $overViewController = new overVIewController();
    $overViewController->displayStudents();
} elseif (isset($_GET['user'])){
    $controller = new profileController();
    $controller->render();
}else {
    $controller = new Controller();
    $controller->render();
}

