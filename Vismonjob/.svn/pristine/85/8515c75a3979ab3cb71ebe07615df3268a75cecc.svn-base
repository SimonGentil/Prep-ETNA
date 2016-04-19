<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>VieMonJob</title>
    
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/inscription.css" rel="stylesheet">
</head>

<body onResize="AdapterDivAResolution()" onLoad="AdapterDivAResolution()">
  <div id="wrap">
    <!-- HEADER -->
    <?php include("../page/header.php"); ?>
    <!--SECTION-->
    <div class="insc">

        <div class="col-xs-12">
            <span class="titretext"><h1> Inscription Particulier <br/> <small> Merci de renseigner vos informations </small></h1></span>
        </div>
        <?php


$submit = $_POST['submit'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$ddn = $_POST['ddn'];
$situation = $_POST['situation'];
$mdp = $_POST['mdp'];
$verifmdp = $_POST['verifmdp'];
$email = $_POST['email'];
$verifemail = $_POST['verifemail'];
$ville = $_POST['ville'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$codepostal = $_POST['codepostal'];
$rôle = 2;
                        
$bdd = new PDO('mysql:host=localhost;dbname=viemonjob;charset=utf8', 'admin_viemonjob', 'viemonmdp');
$emails = $bdd->query('SELECT * FROM Utilisateurs WHERE Email = "' . $email . '"');
$resultatemail = $emails->fetch();
                        
if(isset($submit))
    {
        if (empty($nom))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre nom !</div>';
        }
        elseif (empty($prenom))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre prenom !</div>';
        }
        elseif (empty($mdp))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer un mot de passe !</div>';
        }
        elseif (empty($verifmdp) )
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez confirmer votre mot de passe !</div>';
        }
        elseif ($mdp != $verifmdp && !empty($mdp) && !empty($verifmdp))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Les deux mots de passe ne sont pas identiques !</div>';
        }
        elseif (empty($email))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer une adresse email !</div>';
        }
        elseif (empty($verifemail))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez confirmer votre adresse email !</div>';
        }
        elseif ($email != $verifemail)
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Les deux adresses email ne sont pas identiques !</div>';
        }
        elseif (!empty($resultatemail) && !empty($email) && !empty($verifemail))
        {
        echo '<div class="alert alert-danger" style="text-align:center"><strong>Attention ! </strong>L\'adresse email est deja utilisée !</div>';
        }
        elseif (empty($adresse))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre adresse !</div>';
        }
        elseif (empty($ville))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre ville !</div>';
        }
        elseif (empty($telephone))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre numéro de téléphone !</div>';
        }
        elseif (empty($codepostal))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre code postal !</div>';
        }
        else
        {
            echo '<div class="alert alert-success" style="text-align:center"><strong>Vous etes inscrit ! </strong>Veuillez desormais valider votre mail !</div>';
            
            $requete= $bdd->prepare('INSERT INTO Utilisateurs(Nom, Prenom, Date_de_naissance, Situation_professionnelle, Email, Mot_de_passe, Adresse, Code_postal, Ville, Telephone_Portable, Rôle, Date_inscription) VALUES(:nom, :prenom, :ddn, :situation, :email, :mdp, :adresse, :code_postal, :ville, :telephone, :role, NOW())');
            $requete->execute(array(
                'nom' => $nom,
                    'prenom' => $prenom,
                        'ddn' => $ddn,
                            'situation' => $situation,
                                'email' => $email,
                                    'mdp' => $mdp,
                                        'adresse' => $adresse,
                                            'code_postal' => $codepostal,
                                                'ville' => $ville,
                                                    'telephone' => $telephone,
                                                        'role' => $rôle
                                  ));
        }
}
?>
        <form method="post" action="<?php echo ($_SERVER['PHP_SELF']); ?>" class="form_i">
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <label for="Nom"><span class="htext">Nom</span></label>
                    <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" pattern="[a-zA-Z ]{1,30}">
                </div>
            </div>
        </div>
    
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <span class="htext"><label for="Prenom"><span class="htext">Prénom</span></label>
                    <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom" pattern="[a-zA-Z ]{1,30}">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <span class="htext"><label for="Date de naissance"><span class="htext">Date de naissance</span></label>
                    <input type="date" class="form-control" id="datedenaissance" placeholder="JJ-MM-AAAA" name="ddn" >
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <span class="htext"><label for="Prenom"><span class="htext">Situation professionnelle</span></label>
                    <input type="text" class="form-control" id="situation" placeholder="Situation professionnelle" name="situation">
                </div>
            </div>
        </div>
    
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <label for="Email"><span class="htext">Adresse Email</span></label>
                    <input type="mail" class="form-control" id="email" placeholder="Ex : exemple@exemple.exemple" name="email" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <label for="Email"><span class="htext">Vérification adresse email</span></label>
                    <input type="mail" class="form-control" id="email" placeholder="Vérification adresse email" name="verifemail" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <label for="Password"><span class="htext">Mot de passe</span></label>
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe (une majscule, une minuscule, un chiffre)" name="mdp" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
                </div>
            </div>
        </div>
    
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <label for="Vpassword"><span class="htext">Vérification mot de passe</span></label>
                    <input type="password" class="form-control" id="vpassword" placeholder="Vérification mot de passe" name="verifmdp" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <label for="Email"><span class="htext">Ville</span></label>
                    <input type="text" class="form-control" id="email" placeholder="Ville" name="ville">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <label for="Email"><span class="htext">Adresse</span></label>
                    <input type="text" class="form-control" id="email" placeholder="Adresse" name="adresse">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-2 col-xs-offset-4">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-earphone"></span>
                        <input type="text" class="form-control" placeholder="Téléphone" aria-describedby="basic-addon1" name="telephone" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$">
                    </div>
                </div>
            <div class="col-xs-2 a">
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-globe"></span>
                    <input type="text" class="form-control" placeholder="Code Postal" aria-describedby="basic-addon1" name="codepostal" pattern="[0-9]{5}">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4" style="padding-top:30px; margin-bottom:43px">
            <input type="submit" value="S'inscrire" class="btn btn-lg btn-block" name="submit"></input>
            </div>
        </div>
    </form>
</div>
    <!-- FOOTER -->
    <?php include("../page/footer.php"); ?>
    <!-- SCRIPT -->
    <script>
        function AdapterDivAResolution() {
            var x_res = document.body.clientWidth;
            if(x_res < 1201)
                {
                    $('.col-xs-4.col-xs-offset-4').removeClass("col-xs-4").removeClass("col-xs-offset-4").addClass("col-xs-12");
                    $('.col-xs-2.col-xs-offset-4').removeClass("col-xs-2").removeClass("col-xs-offset-4").addClass("col-xs-6");
                    $('.col-xs-2.a').removeClass("col-xs-2").addClass("col-xs-6");
                }
                        if(x_res > 1201)
                {
                    $('div[class="col-xs-12"] div[class="col-xs-12"]').removeClass("col-xs-12").addClass("col-xs-offset-4").addClass("col-xs-4");
                    $('div[class="col-xs-12"] div[class="col-xs-6"]').removeClass("col-xs-6").addClass("col-xs-2").addClass("col-xs-offset-4");
                    $('div[class="col-xs-12"] div[class="a col-xs-6"]').removeClass("col-xs-6").addClass("col-xs-2");
                }
        }
    </script>
</div>

    </body>
</html>