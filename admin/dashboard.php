<?php

    require('inc/essentials.php');
    adminLogin();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/link.php'); ?>
</head>
<body class="bg-light">
    
    <?php require('inc/header.php')?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h2>Welcome to the Admin Panel Dashboard!</h2>
                <p>This is your control center for managing various aspects of your application.</p>
                <p>Feel free to customize this dashboard to suit your needs.</p>
            </div>
        </div>
    </div>

    <?php require('inc/script.php'); ?>

</body>
</html>