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
        $donnees = $utilisateur->fetch();
        echo '<div class="container">
                    <div class="rowe">
                        <div class="col-xs-12 col-xs-offset-0 toppad" >
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">CREER UN MESSAGE</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Destinataire (exemple@exemple.ex)">
                                        <br>
                                        <input type="text" class="form-control" placeholder="Objet">
                                        <br>
                                        <textarea rows="15" type="text" class="form-control" placeholder="Message..." style="width: 100%; margin-left: 0%;"></textarea>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <a href="messages.php" data-original-title="Envoyer un message" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
    }
    ?>
    <?php include("../page/footer.php"); ?>