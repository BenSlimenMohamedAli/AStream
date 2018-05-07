<?php echo link_tag('css/themeone/admin.css');
?>
</head>

<body class="grey lighten-3">


<!--Main Navigation-->
<?php require_once 'navigation.php' ?>
<!--Main Navigation-->

<!--Main layout-->
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">


        <!-- Heading -->
        <?php require_once 'heading.php';?>
        <!-- Heading -->

        <!--Grid row-->
        <?php require_once 'g_video.php'?>
        <?php require_once 'g_utilisateurs.php'?>
        <?php require_once 'g_categories.php'?>
        <?php require_once 'g_genres.php'?>
        <!--Grid row-->
    </div>
</main>
<!--Main layout-->