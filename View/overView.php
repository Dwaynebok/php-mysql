<?php
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>




<?php


foreach($students as $student): ?>
<tr class="table-row">
    <td><?php echo $student['first_name'] . "<br>"?></td>
    <td><?php echo $student['last_name'] . "<br>" ?></td>
    <td><?php echo $student['email'] . "<br>" ?></td>
    <td><a href="/?user= <?php echo $student['id'] ;?> ">link text</a></td>

    <?php endforeach;


?>



</body>
</html>

