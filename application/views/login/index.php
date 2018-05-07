 <meta charset="UTF-8">
    <title>Login</title>
 <?php  echo link_tag('css/themeone/login.css'); ?>


</head>

<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-eight fixed-top">

    <a href="http://localhost/AStream/" class="navbar-brand tx-eight"><img width="30px" height="30px" src="<?php echo base_url('img/logo.png'); ?>" /></a>
</nav>
<!--/.Navbar-->

<section class="container">
    <?php
    require_once 'login.php';
    require_once 'signup.php';
    ?>
</section>

