<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>

    <style>
        .card {
            margin-top: 20%;
            text-align: center;
        }


    </style>
</head>
</head>
<body>

<section class="container">
    <div class="card">
        <div class="card-header bg-six lighten-1 white-text"><?php echo $heading;?></div>
        <div class="card-body bg-eight">
            <h4 class="card-title"><?php echo $message; ?></h4>
            <p class="card-text">
                <?php echo $_SERVER['REQUEST_URI']; ?>
            </p>
        </div>
    </div>
</section>

</body>
</html>