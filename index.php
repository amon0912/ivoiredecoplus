<?php session_start(); ?>
<?php
$pages = scandir('pages/');
// var_dump($_SESSION);
if (!empty($_GET['p'])) {
    if ($_GET['p'] != '.' || $_GET['p'] != '..' || $_GET['p'] != 'inc') {
        if (in_array($_GET['p'] . '.php', $pages)) {
            $p = $_GET['p'];
        } else {
            $p = 'erreur';
        }
    } else {
        $p = 'erreur';
    }
} else {
    $p = 'accueil';
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="shortcut icon" href="assets/images/logo.jpg" type="image/x-icon">
    <title>Ivoire Déco Plus </title>
</head>

<body>
    <!-- menu de navigation -->
    <?php include('pages/inc/menu.php') ?>

    <?php include('pages/' . $p . '.php'); ?>

    <?php include("pages/inc/footer.php"); ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="assets/js/footer.js"></script>

    <?php
    if (!empty($p) && $p == 'accueil') {
        echo '<script src="assets/js/accueil.js"></script>';
    }
    ?>
</body>

</html>