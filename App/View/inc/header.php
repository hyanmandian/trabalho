<?php require "../bootstrap.php"; ?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <!-- Meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trabalho Grau A</title>

        <!--[if lt IE 9]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
        <![endif]-->

        <link href="../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../public/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Trabalho Grau A</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="<?php echo!isset($_GET["type"]) ? "active" : "" ?>"><a href="index.php">Listagem de participantes</a></li>
                        <li class="dropdown <?php echo isset($_GET["type"]) ? "active" : "" ?>"">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estatísticas<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Intenção de voto por</li>
                                <li class="<?php echo Helpers::isCurrent(1); ?>"><a href="statistics.php?type=1">Idade</a></li>
                                <li class="<?php echo Helpers::isCurrent(2); ?>"><a href="statistics.php?type=2">Nivel de escolaridade</a></li>
                                <li class="<?php echo Helpers::isCurrent(3); ?>"><a href="statistics.php?type=3">Renda</a></li>
                                <li class="<?php echo Helpers::isCurrent(4); ?>"><a href="statistics.php?type=4">Sexo</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">