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
    <link href="../css/moncompte.css" rel="stylesheet">
</head>
<body>
    <?php include("../page/header.php"); ?>
    <?php
    session_start();
    $role = $_SESSION[Rôle];
    
    if (isset($_SESSION[ID]))
    {
        $id = $_SESSION[ID];
        $bdd = new PDO('mysql:host=localhost;dbname=viemonjob;charset=utf8', 'admin_viemonjob', 'viemonmdp');
        $utilisateur = $bdd->query('SELECT * FROM Utilisateurs WHERE ID = "' . $id . '"');
        $donnees = $utilisateur->fetch();
        if ($role == 3)
        {
            echo '<div class="container">
                    <div class="rowe">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">MON PROFIL</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="rowe">
                                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="'.$donnees[Photo].'" class="img-circle img-responsive"> </div>
                                            <div class=" col-md-9 col-lg-9 "> 
                                                <table class="table table-user-information">
                                                    <tbody>
                                                        <tr>
                                                            <td>Nom:</td>
                                                            <td>'.$donnees[Nom].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prenom:</td>
                                                            <td>'.$donnees[Prenom].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Metier:</td>
                                                            <td>'.$donnees[Metier].'</td>
                                                        </tr>
                                                         <tr>
                                                            <td>Adresse:</td>
                                                            <td>'.$donnees[Adresse].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ville:</td>
                                                            <td>'.$donnees[Ville].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Code postal:</td>
                                                            <td>'.$donnees[Code_postal].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mail:</td>
                                                            <td><a href="mailto:'.$donnees[Email].'">'.$donnees[Email].'</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Numeros:</td>
                                                            <td>0'.$donnees[Telephone_Portable].' (mobile)<br>0'.$donnees[Telephone_fix].' (fix)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Description:</td>
                                                            <td>'.$donnees[Descriptif_activite].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>RIB:</td>
                                                            <td>'.$donnees[IBAN].'</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <a href="edit.php" data-original-title="Modifier mon profil" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        }
        elseif ($role == 2)
        {
            echo '<div class="container">
                    <div class="rowe">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">MON PROFIL</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="rowe">
                                        <div class="col-md-3 col-lg-3 " align="center"></div>
                                            <div class=" col-xs-12 col-xs-12 "> 
                                                <table class="table table-user-information">
                                                    <tbody>
                                                        <tr>
                                                            <td>Nom:</td>
                                                            <td>'.$donnees[Nom].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prenom:</td>
                                                            <td>'.$donnees[Prenom].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date de naissance:</td>
                                                            <td>'.$donnees[Date_de_naissance].'</td>
                                                        </tr>
                                                         <tr>
                                                            <td>Situation professionnelle:</td>
                                                            <td>'.$donnees[Situation_professionnelle].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Adresse:</td>
                                                            <td>'.$donnees[Adresse].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ville:</td>
                                                            <td>'.$donnees[Ville].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mail:</td>
                                                            <td><a href="mailto:'.$donnees[Email].'">'.$donnees[Email].'</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Numero(s):</td>
                                                            <td>0'.$donnees[Telephone_Portable].' (mobile)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <a href="edit.php" data-original-title="Modifier mon profil" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        }
    }
?>
<?php include("../page/footer.php"); ?>
<script type="text/javascript" src="../js/moncompte.js"></script>
</body>
</html>