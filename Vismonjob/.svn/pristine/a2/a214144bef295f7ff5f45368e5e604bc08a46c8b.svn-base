<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">-->
    <!--<script src="nprogress/js/nprogress.js"></script>-->
    <!--<link rel="stylesheet" href="nprogress/css/nprogress.css"/>-->
    <!--<link href="nprogress/css/navbar-fixed-top.css" rel="stylesheet">-->
    <title>VieMonJob</title>
    
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/message.css" rel="stylesheet">
</head>
<body>
    <?php include("../page/header.php"); ?>
    <?php
    session_start();
    if (isset($_SESSION[ID]))
    {
        $id = $_SESSION[ID];
        $bdd = new PDO('mysql:host=localhost;dbname=viemonjob;charset=utf8', 'admin_viemonjob', 'viemonmdp');
        $utilisateur = $bdd->query('SELECT * FROM Utilisateurs WHERE ID = "' . $id . '"');
        $message = $bdd->query('SELECT * FROM Messages WHERE ID_Destinataire = "' . $id . '"');
        $donnees = $utilisateur->fetch();
        $bdr = $message->fetch();
        echo '<div class="container">
                    <div class="rowe">
                        <div class="col-xs-12 col-xs-offset-0 toppad" >
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">MES MESSAGES</h3>
                                </div>
                                <div class="panel-body">
                                Expediteur:'.$bdr[ID_Expediteur].'Objet:'.$bdr[Objet].' Message:'.$bdr[Message].'
                                </div>
                                <div class="panel-footer">
                                    <a href="createmessage.php" data-original-title="Creer un message" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';    
    }
    ?>
    <?php include("../page/footer.php"); ?>