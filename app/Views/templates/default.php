<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>
    
    <!-- Normalize CSS -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
<?php if ($_SESSION['auth'] == 'admin'): ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="btn btn-info" href="index.php?p=admin.admins.all">Gestions des utilisateurs</a>  
        </div>
    </div>
</nav>
<?php endif ?>
<div class="container">
<header>
    <img src="../img/fond.svg" id="background-header">
    <a href="index.php?p=users.index"><img class="logo" src="img/logo.png"></a>
    <h1 class="text-center">Share Your Sounds</h1>
</header>

    <div class="starter-template" style="padding-top: 100px;">
        <?= $content; ?>
    </div>

</div><!-- /.container -->
    
    <script   src="https://code.jquery.com/jquery-3.2.1.min.js"
              integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
              crossorigin="anonymous"></script>
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>
