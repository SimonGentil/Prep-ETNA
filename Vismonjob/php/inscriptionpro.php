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
    <?php
      if( !empty($message) ) 
      {
        echo '<p>',"\n";
        echo "\t\t<strong>", htmlspecialchars($message) ,"</strong>\n";
        echo "\t</p>\n\n";
      }
    ?>
    <!-- HEADER -->
    <?php include("../page/header.php"); ?>
    <!--SECTION-->
    <div class="insc">

        <div class="col-xs-12">
            <span class="titretext"><h1> Inscription Professionnel <br/> <small> Merci de renseigner vos informations </small></h1></span>
        </div>
        <?php include("upload.php"); ?>
        <?php

$submit = $_POST['submit'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$job = $_POST['job'];
$mdp = $_POST['mdp'];
$verifmdp = $_POST['verifmdp'];
$email = $_POST['email'];
$verifemail = $_POST['verifemail'];
$ville = $_POST['ville'];
$adresse = $_POST['adresse'];
$ptelephone = $_POST['ptelephone'];
$ftelephone = $_POST['ftelephone'];
$codepostal = $_POST['postal'];
$entdesc = $_POST['entdesc'];
$iban = $_POST['iban'];
$role = 3;
$upload = $_FILES['fichier']['name'];
                        
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
        elseif (empty($job))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre métier !</div>';
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
        elseif (empty($ptelephone))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre numéro de téléphone portable !</div>';
        }
        elseif (empty($ftelephone))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre numéro de téléphone fixe !</div>';
        }
        elseif (empty($codepostal))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre code postal !</div>';
        }
        elseif (empty($entdesc))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer la description de votre société !</div>';
        }
        elseif (empty($iban))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre IBAN !</div>';
        }
        elseif (empty($upload))
        {
            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre photo !</div>';
        }
                elseif (!empty($upload))
                {    
                    $i = 1;
                        // Recuperation de l'extension du fichier
                        $extension  = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
                        
                        // On verifie l'extension du fichier
                        if(in_array(strtolower($extension),$tabExt))
                        {
                          // On recupere les dimensions du fichier
                          $infosImg = getimagesize($_FILES['fichier']['tmp_name']);
                     
                          // On verifie le type de l'image
                          if($infosImg[2] >= 1 && $infosImg[2] <= 14)
                          {
                            // On verifie les dimensions et taille de l'image
                            if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['fichier']['tmp_name']) <= MAX_SIZE))
                            {
                              // Parcours du tableau d'erreurs
                              if(isset($_FILES['fichier']['error']) 
                                && UPLOAD_ERR_OK === $_FILES['fichier']['error'])
                              {
                                // On renomme le fichier
                                $nomImage = md5(uniqid()) .'.'. $extension;
                     
                                // Si c'est OK, on teste l'upload
                                if(move_uploaded_file($_FILES['fichier']['tmp_name'], TARGET.$nomImage))
                                {
                                  
                                }
                                else
                                {
                                  // Sinon on affiche une erreur systeme
                                  echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Problème lors de l\'upload !</div>';
                                  $i = 2;
                                }
                              }
                              else
                              {
                                echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Une erreur interne a empêché l\'uplaod de l\'image !</div>';
                                $i = 2;
                              }
                            }
                            else
                            {
                              // Sinon erreur sur les dimensions et taille de l'image
                              echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Erreur dans les dimensions de l\'image !</div>';
                              $i = 2;
                            }
                          }
                          else
                          {
                            // Sinon erreur sur le type de l'image
                            echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Le fichier à uploader n\'est pas une image !</div>';
                            $i = 2;
                          }
                        }
                        else
                        {
                          // Sinon on affiche une erreur pour l'extension
                          echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>L\'extension du fichier est incorrecte !</div>';
                          $i = 2;
                        }
                    }
                    
                    if ($i == 1)
                    {
                    $photo = 'img_upload/'.$nomImage;
                    
                    echo '<div class="alert alert-success" style="text-align:center"><strong>Vous etes inscrit ! </strong>Veuillez desormais valider votre mail !</div>';
                    
                    $requete= $bdd->prepare('INSERT INTO Utilisateurs(Nom, Prenom, Metier, Photo, Email, Mot_de_passe, Adresse, Code_postal, Ville, Telephone_Portable, Telephone_fix, Rôle, Descriptif_activite, IBAN, Date_inscription) VALUES(:nom, :prenom, :metier, :photo, :email, :mdp, :adresse, :code_postal, :ville, :ptelephone, :ftelephone, :role, :entdesc, :iban, NOW())');
                    $requete->execute(array(
                        'nom' => $nom,
                            'prenom' => $prenom,
                                'metier' => $job,
                                    'photo' => $photo,
                                        'email' => $email,
                                            'mdp' => $mdp,
                                                'adresse' => $adresse,
                                                    'code_postal' => $codepostal,
                                                        'ville' => $ville,
                                                            'ptelephone' => $ptelephone,
                                                                'ftelephone' => $ftelephone,
                                                                    'role' => $role,
                                                                        'entdesc' => $entdesc,
                                                                            'iban' => $iban
                                          ));
                    }
            }
?>
    <form method="post" enctype="multipart/form-data" action="<?php echo ($_SERVER['PHP_SELF']); ?>" class="form_i">
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
                    <label for="Email"><span class="htext">Métier</span></label>
                    <input type="mail" class="form-control" id="email" placeholder="Métier" name="job" pattern="[a-zA-Z ]{1,30}">
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
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <label for="Email"><span class="htext">Code postale</span></label>
                    <input type="text" class="form-control" id="postal" placeholder="Code postale" name="postal" pattern="[0-9]{5}">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-2 col-xs-offset-4">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-earphone"></span>
                        <input type="text" class="form-control" placeholder="Téléphone portable" aria-describedby="basic-addon1" name="ptelephone" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$">
                    </div>
                </div>
            <div class="col-xs-2 a">
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-earphone"></span>
                    <input type="text" class="form-control" placeholder="Teléphone fixe" aria-describedby="basic-addon1" name="ftelephone" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12" style="padding-top:15px">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                  <p>
                    <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Photo activité :</label>
                        <div class="well">
                            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
                            <input name="fichier" type="file" id="fichier_a_uploader" />
                        </div>
                  </p>
                </div>
            </div>
        </div>        
        
        <div class="col-xs-12">
              <div class="col-xs-4 col-xs-offset-4" style="padding-top:15px; padding-bottom:15px">
              <label for="Nom"><span class="htext">Descriptif activité</span></label>
              <textarea style="min-height:178px; resize:none" class="form-control" placeholder="Descriptif activité" name="entdesc"></textarea>
            </div>
        </div>
        
        
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="form-group">
                    <label for="Email"><span class="htext">IBAN</span></label>
                    <input type="text" class="form-control" id="iban" placeholder="IBAN" name="iban" pattern="^FR\d{12}[0-9A-Z]{11}\d{2}$">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4" style="padding-top:10px; margin-bottom:40px">
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
    </body>
</html>