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
            $submit = $_POST['submit'];
            $metier = $_POST['metier'];
            $adresse = $_POST['adresse'];
            $ville = $_POST['ville'];
            $code_postal = $_POST['code_postal'];
            $mobile = $_POST['mobile'];
            $fix = $_POST['fix'];
            $description = $_POST['description'];
            $IBAN = $_POST['IBAN'];
            $mdp = $_POST['mdp'];
                    if (isset($submit))
                    {
                        
                        if (!empty($metier))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Metier = '$metier' WHERE ID = '$id'");
                        }
                        if (!empty($adresse))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Adresse = '$adresse' WHERE ID = '$id'");
                        }
                        if (!empty($ville))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Ville = '$ville' WHERE ID = '$id'");
                        }
                        if (!empty($code_postal))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Code_postal = '$code_postal' WHERE ID = '$id'");
                        }
                        if (!empty($mdp))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Mot_de_passe = '$mdp' WHERE ID = '$id'");
                        }
                        if (!empty($mobile))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Telephone_Portable = '$mobile' WHERE ID = '$id'");
                        }
                        if (!empty($fix))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Telephone_fix = '$fix' WHERE ID = '$id'");
                        }
                        if (!empty($description))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Descriptif_activite = '$description' WHERE ID = '$id'");
                        }
                        if (!empty($IBAN))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET IBAN = '$IBAN' WHERE ID = '$id'");
                        }
                        echo '<script>location.assign("moncompte.php")</script>';
                    }
                    else
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
                                            <form method="post" action="edit.php">
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
                                                            <td><input type="text" name="metier" pattern="[a-zA-Z ]{1,30}" placeholder="'.$donnees[metier].'"></input></td>
                                                        </tr>
                                                         <tr>
                                                            <td>Adresse:</td>
                                                            <td><input type="text" name="adresse" ></input></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ville:</td>
                                                            <td><input type="text" name="ville" pattern="[a-zA-Z ]{1,30}"></input></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Code postal:</td>
                                                            <td><input type="text" name="code_postal" pattern="[0-9]{5}"></input></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mail:</td>
                                                            <td><a href="mailto:'.$donnees[Email].'"><input type="mail" name="email" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})"></input></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mot de passe:</td>
                                                            <td><input type="password" name="mdp" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" placeholder="'.$donnees[Mot_de_passe].'"></input></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Numeros:</td>
                                                            <td><input type="text" name="mobile" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" placeholder="'.$donnees[Telephone_Portable].'"></input> (mobile)<br><input type="text" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name="fix"placeholder="'.$donnees[Telephone_fix].'"></input> (fix)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Description:</td>
                                                            <td><input type="text" name="description" placeholder="'.$donnees[Descriptif_activite].'"></input></td>
                                                        </tr>
                                                        <tr>
                                                            <td>IBAN:</td>
                                                            <td><input type="text" name="IBAN" pattern="^FR\d{12}[0-9A-Z]{11}\d{2}$" placeholder="'.$donnees[IBAN].'"></input></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                    <input type="submit" value = "Enregistrer" name="submit" data-original-title="Enregistrer les modifications" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"></input>
                                    
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
        }
        
        elseif ($role == 2)
        {
            $submit = $_POST['submit'];
            $situation = $_POST['situation'];
            $adresse = $_POST['adresse'];
            $ville = $_POST['ville'];
            $code_postal = $_POST['code_postal'];
            $mobile = $_POST['mobile'];
            $mdp = $_POST['mdp'];
                    if (isset($submit))
                    {
                        
                        if (!empty($situation))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Situation_professionnelle = '$situation' WHERE ID = '$id'");
                        }
                        if (!empty($adresse))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Adresse = '$adresse' WHERE ID = '$id'");
                        }
                        if (!empty($ville))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Ville = '$ville' WHERE ID = '$id'");
                        }
                        if (!empty($code_postal))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Code_postal = '$code_postal' WHERE ID = '$id'");
                        }
                        if (!empty($mdp))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Mot_de_passe = '$mdp' WHERE ID = '$id'");
                        }
                        if (!empty($mobile))
                        {
                            $bdd->exec("UPDATE Utilisateurs SET Telephone_Portable = '$mobile' WHERE ID = '$id'");
                        }
                        echo '<script>location.assign("moncompte.php")</script>';
                    }
                    else
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
                                            <form method="post" action="edit.php">
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
                                                            <td><input type="text" name="situation" placeholder="'.$donnees[Situation_professionnelle].'"></input></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Adresse:</td>
                                                            <td><input type="text" name="adresse" placeholder="'.$donnees[Adresse].'"></input></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ville:</td>
                                                            <td><input type="text" name="ville" placeholder="'.$donnees[Ville].'"></input></td>
                                                        </tr>
                                                         <tr>
                                                            <td>Code postal:</td>
                                                            <td><input type="text" name="code_postal" pattern="[0-9]{5}" placeholder="'.$donnees[Code_postal].'"></input></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mot de passe:</td>
                                                            <td><input pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" name="mdp" type="password"></input></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Numero(s):</td>
                                                            <td><input pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name="mobile" type="text" placeholder="'.$donnees[Telephone_Portable].'"></input> (mobile)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <input type="submit" value = "Enregistrer" name="submit" data-original-title="Enregistrer les modifications" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"></input>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
        }
    }
?>

<?php include("../page/footer.php"); ?>
<script type="text/javascript" src="../js/moncompte.js"></script>
</body>
</html>