<?php

use core\Session;

Session::init();
$logged = Session::get('logged')['name'];
$message = Session::get('message');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title[0]; ?></title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="<?php echo URL ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link href="<?php echo URL ?>/assets/css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="style.css">

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Тестовое Traffic Terminal</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li <?php echo ($title[1] == 0) ? 'class="active"' : '' ?>><a href="<?php echo URL ?>/">Главная</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (!$logged):
                    ?>
                    <li <?php echo ($title[1] == 6) ? 'class="active"' : '' ?>><a
                                href="<?php echo URL ?>/site/login"><span class="glyphicon glyphicon-log-in"></span>
                            Войти</a></li>
                <?php else : ?>

                    <li <?php echo ($title[1] == 4) ? 'class="active"' : '' ?>><a href="<?php echo URL ?>user/show">Личный
                            кабинет</a></li>
                    <li><a href="<?php echo URL; ?>/site/logout"><span class="glyphicon glyphicon-log-out"></span> Выйти</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php

