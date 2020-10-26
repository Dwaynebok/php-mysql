<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "Connection.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-mysql</title>
</head>
<body>

<fieldset>
    <legend>Details</legend>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Id">ID:</label>
            <input type="text" name="id" id="Id" class="form-control" value="">
            <span class="error"></span>
            <br><br>
        </div>
        <div class="form-group col-md-6">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="firstname" class="form-control" value="">
            <span class="error"></span>
            <br><br>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="lastname" class="form-control" value=""
            <span class="error"></span>
            <br><br>
        </div>

    </div>

    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" class="form-control" value=""/>
            </div>
            <span class="error"></span>

            <br>
            <div></div>
        </div>

</fieldset>


</body>
</html>
