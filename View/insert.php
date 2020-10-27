<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//session_start();

//function whatIsHappening()
//{
  //  echo '<h2>$_GET</h2>';
    //var_dump($_GET);
    //echo '<h2>$_POST</h2>';
    //var_dump($_POST);
    //echo '<h2>$_COOKIE</h2>';
    //var_dump($_COOKIE);
    //echo '<h2>$_SESSION</h2>';
    //var_dump($_SESSION);
//}

//whatIsHappening();


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>

<fieldset>
    <legend>Fill Me</legend>
    <form method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" class="form-control" value="">

            <br><br>
        </div>
        <div class="form-group col-md-6">
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" class="form-control" value="">

            <br><br>
        </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" class="form-control" value=""/>
                </div>


                <br>
                <div></div>
            </div>

    </div>

        <button type="submit" name="submit" >Click Me!</button>
    </form>

    <!--table-->

    <table>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Employee Id</td>
        </tr>




</body>
</html>

