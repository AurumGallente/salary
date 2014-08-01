<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Salary</title>
    </head>
    <body>
        <ul>            
        <?php foreach($users as $user){ ?>
            <li id="<?= $user['id'] ?>"> <?= $user['name'] ?> <?= $user['lastname'] ?> - <?= $user['position'] ?></li>
        <?php } ?>            
        </ul>
        
        
        <div class="pearson">
            <p id="name"> </p>
            <p id="lastname"> </p>
            <p id="position"> </p>
        </div>
    </body>
</html> 