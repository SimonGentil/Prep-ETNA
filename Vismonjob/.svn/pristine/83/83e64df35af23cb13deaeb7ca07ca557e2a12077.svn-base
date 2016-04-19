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
    <link href="../css/temoignage.css" rel="stylesheet">
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
    <section>
        <div class="row1">
            <div class="col-xs-12" style="padding-bottom:25px">
              <div class="col-xs-4 col-xs-offset-4">
                <div id="temoi">
                  <p><h3>TÉMOIGNAGES</h3></p>
                </div>
              </div>
            </div>
            
            <?php include("upload.php"); ?>
            <?php

        $submit = $_POST['submit'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $tmpjob = $_POST['tmpjob'];
        $duree = $_POST['duree'];
        $ville = $_POST['ville'];
        $temoin = $_POST['temoin'];

        $validation = 2;
        $upload = $_FILES['fichier']['name'];
        
        $bdd = new PDO('mysql:host=localhost;dbname=viemonjob;charset=utf8', 'admin_viemonjob', 'viemonmdp');
        $emails = $bdd->query('SELECT * FROM Utilisateurs WHERE Email = "' . $email . '"');
        $resultatemail = $emails->fetch();
        
        if(isset($submit))
            {
                if (empty($prenom))
                {
                    echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre prenom !</div>';
                }
                elseif (empty($duree))
                {
                    echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer la durée de votre stage !</div>';
                }
                elseif (empty($email))
                {
                    echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre email !</div>';
                }
                elseif (empty($tmpjob))
                {
                    echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre métier temporaire !</div>';
                }
                elseif (empty($temoin))
                {
                    echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre témoignage !</div>';
                }
                elseif (empty($resultatemail))
                {
                echo '<div class="alert alert-danger" style="text-align:center"><strong>Attention ! </strong>L\'adresse mail est inconnu, vous devez être inscrit !</div>';
                }
                elseif (empty($ville))
                {
                    echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre ville !</div>';
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
                    
                    if ($i == 1){
                    $photo = 'img_upload/'.$nomImage;
                    echo '<div class="alert alert-success" style="text-align:center"><strong>Vous avez bien temoigné !</strong> Votre message est en attente de validation !</div>';
                    
                    $requete= $bdd->prepare('INSERT INTO Temoignages(Prenom, Tmp_job, Duree, Ville, Photo, Temoignage, Validation, Date_demande) VALUES(:prenom, :tmpjob, :duree, :ville, :photo, :temoin, :valid, NOW())');
                    $requete->execute(array(
                        'prenom' => $prenom,
                            'tmpjob' => $tmpjob,
                                'duree' => $duree,
                                    'ville' => $ville,
                                        'photo' => $photo,
                                            'temoin' => $temoin,
                                                'valid' => $validation
                                          ));
                    }
            }
            ?>
        
            <form method="post" enctype="multipart/form-data" action="<?php echo ($_SERVER['PHP_SELF']); ?>" class="form_i">
                

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
                        <label for="Email"><span class="htext">Métier temporaire</span></label>
                        <input type="text" class="form-control" id="email" placeholder="Métier temporaire" name="tmpjob">
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="form-group">
                        <label for="Email"><span class="htext">Durée</span></label>
                        <input type='text' class="form-control" id="email" placeholder="Ex : une semaine" name="duree">
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
                        <label for="Email"><span class="htext">Ville</span></label>
                        <input type="text" class="form-control" id="email" placeholder="Ville" name="ville">
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
                  <label for="Nom"><span class="htext">Témoignage</span></label>
                  <textarea style="min-height:178px; resize:none" class="form-control" placeholder="Témoignage" name="temoin"></textarea>
                </div>
            </div>
            
            <div class="col-xs-12">
                <div class="col-xs-4 col-xs-offset-4" style="padding-top:10px; margin-bottom:40px">
                <input type="submit" value="Envoyer" class="btn btn-lg btn-block" name="submit"></input>
                </div>
            </div>
            
            </form>
        </div>
    </section>
    <!-- FOOTER -->
    <?php include("../page/footer.php"); ?>
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