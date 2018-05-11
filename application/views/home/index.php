<?php echo link_tag('css/jquery.funnyText.css');
echo link_tag('css/themeone/home.css');
?>

<title>Accueil</title>
</head>
<body>

<!-- @ nav : Begin -->
<?php
require_once 'nav.php'; ?>
<!-- @ nav : End -->

<!-- @ categories : Begin -->
<?php require_once 'rep.php'; ?>
<?php require_once 'categories.php'; ?>
<!-- @ categories : End -->