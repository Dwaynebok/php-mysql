<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once "Model/DatabaseConnection.php";
require_once "Model/Student.php";
require_once "Model/StudentLoader.php";
require_once "Controller/Controller.php";
require_once "Model/Student_Insert.php";
require_once "View/insert.php";

$controller = new Controller();
$controller->render();
