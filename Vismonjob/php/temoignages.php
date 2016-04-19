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

<body>
  <div id="wrap">
    <!-- HEADER -->
    <?php include("../page/header.php"); ?>
    <!--SECTION-->
    <section>
      <div class="row">
        <div class="col-xs-12">
          <div class="col-xs-4 col-xs-offset-4">
            <div id="temoi">
              <p><h3>TÉMOIGNAGES</h3></p>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="col-xs-4 col-xs-offset-4">
            <a href="temoin.php"><button type="button" class="btn btn-lg">Raconter</button></a>
          </div>
        </div>
        <?php
        session_start();
        $bdd = new PDO('mysql:host=localhost;dbname=viemonjob;charset=utf8', 'admin_viemonjob', 'viemonmdp');
        $utilisateur1 = $bdd->query('SELECT * FROM Temoignages WHERE Validation = 1');
        $utilisateur2 = $bdd->query('SELECT * FROM Temoignages WHERE Validation = 2');
        $role = $_SESSION[Rôle];
        $submit1 = $_POST['submit1'];
        $submit2 = $_POST['submit2'];
        
    
        if (isset($_SESSION[ID]))
          {
            if ($role == 1)
              {
                while ($donnees2 = $utilisateur2->fetch())
                  echo '
                    <form method="post" action="'.$_SERVER['PHP_SELF'].'">
                      <div class="col-xs-12 well" style="padding-top:25px">
                        <div class="col-xs-2 col-xs-offset-1">
                          <img src="'.$donnees2[Photo].'" alt="bureau_img" class="img-circle">
                        </div>
                        <div class="col-xs-4" style="word-wrap:break-word">
                          <p>
                            <h4><em><strong>'.$donnees2[Prenom].', '.$donnees2[Ville].'</h4></em></strong>
                            '.$donnees2[Temoignage].'
                            <h6><em>'.$donnees2[Tmp_job].' pendant '.$donnees2[Duree].'</h6></em>
                          </p>
                        </div>
                        <div class="col-xs-2 col-xs-offset-4">
                          <button type="submit" class="btn btn-lg" value="'.$donnees2[ID].'" name="submit1" >Accepter</button>
                        </div>
                        <div class="col-xs-2">
                          <button type="submit" class="btn btn-lg" value="'.$donnees2[ID].'" name="submit2" >Refuser</button>
                        </div>
                      </div>
                    </form>';
              }
              else
              {
                while ($donnees1 = $utilisateur1->fetch())
                {
                  echo '
                    <div class="col-xs-12" style="padding-top:25px">
                      <div class="col-xs-2 col-xs-offset-3">
                        <img src="'.$donnees1[Photo].'" alt="bureau_img" class="img-circle">
                      </div>
                      <div class="col-xs-4" style="word-wrap:break-word">
                        <p>
                          <h4><em><strong>'.$donnees1[Prenom].', '.$donnees1[Ville].'</h4></em></strong>
                          '.$donnees1[Temoignage].'
                          <h6><em>'.$donnees1[Tmp_job].' pendant '.$donnees1[Duree].'</h6></em>
                        </p>
                      </div>
                    </div>';
                }
              }
          }
          else
          {
            while ($donnees1 = $utilisateur1->fetch())
            {
              echo '
                    <div class="col-xs-12" style="padding-top:25px">
                      <div class="col-xs-2 col-xs-offset-3">
                        <img src="'.$donnees1[Photo].'" alt="bureau_img" class="img-circle">
                      </div>
                      <div class="col-xs-4" style="word-wrap:break-word">
                        <p>
                          <h4><em><strong>'.$donnees1[Prenom].', '.$donnees1[Ville].'</h4></em></strong>
                          '.$donnees1[Temoignage].'
                          <h6><em>'.$donnees1[Tmp_job].' pendant '.$donnees1[Duree].'</h6></em>
                        </p>
                      </div>
                    </div>';
          }
        }
          
        if (isset($submit1))
        {
          $bdd->query('UPDATE Temoignages SET Validation = 1 WHERE ID = '.$submit1);
          echo "<script>location.reload()</script>";
        }
        elseif (isset($submit2))
        {
          $bdd->query('DELETE FROM Temoignages WHERE ID = '.$submit2);
          echo "<script>location.reload()</script>";
        }
        ?>
        
      </div>
    </section>
    <!-- FOOTER -->
    <?php include("../page/footer.php"); ?>
    </body>
</html>