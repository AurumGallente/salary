<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Salary</title>
    </head>
    <body>
        <ul>            
        <?php foreach($users as $user){ ?>
            <li><?= $user['name'] ?> <?= $user['lastname'] ?> - <?= $user['position'] ?></li>
        <?php } ?>            
        </ul>
    </body>
</html> 