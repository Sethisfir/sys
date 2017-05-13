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

<body id="pageLogin">

    <div class="text-center">
        <img src="img/logo.png" id="logo"> 
    </div>
    <div class="container">

        <div class="starter-template">
            <?= $content; ?>
        </div>

    </div><!-- /.container -->

</body>
</html>