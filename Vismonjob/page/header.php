<nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">
                    <img src="../image/viemonjob2.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a id="accueil" href="../index.php">ACCUEIL</a>
                    </li>
                    <li>
                        <a href="../php/concept.php">CONCEPT</a>
                    </li>
                    <li>
                        <a href="../php/jobs.php">JOBS</a>
                    </li>
                    <li>
                        <a href="../php/professionnels.php">PROFESSIONNELS</a>
                    </li>
                    <li>
                        <a href="../php/charte.php">CHARTE</a>
                    </li>
                    <li>
                        <a href="../php/temoignages.php">TÉMOIGNAGES</a>
                    </li>
                    <li>
                        <a href="../php/actualites.php">ACTUALITÉS</a>
                    </li>
                    <li>
                        <a class="contact" href="../php/contact.php" onmouseover="displaytel()" onmouseout="undisplaytel()">CONTACT</a>
                    </li>
                    <li>
                        <p hidden id="tel" style="color: #B6E1E2;">TEL : 06 18 14 16 25</p>
                    </li>
                </ul>
                <?php
                session_start();  
                    if (isset ($_SESSION[email]))
                    {
                        $id = $_SESSION[ID];
                        $bdd = new PDO('mysql:host=localhost;dbname=viemonjob;charset=utf8', 'admin_viemonjob', 'viemonmdp');
                        $utilisateur = $bdd->query('SELECT * FROM Utilisateurs WHERE ID = "' . $id . '"');
                        $donnees = $utilisateur->fetch();
                    echo '<ul class="nav navbar-nav navbar-right">
                            <li role="presentation">
                                <a href="messages.php">MESSAGES <span class="badge">0</span></a>
                            </li>
                            <li>
                                <a class="signup" href="../php/moncompte.php">MON COMPTE: '.$donnees[Prenom].'</a>
                            </li>
                            <li>
                                <a type="button" href="deconnexion.php">SE DECONNECTER</a>
                            </li>
                        </ul>';
                    }
                    else
                    {
                    echo '<ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="signup" href="../php/inscription.php">INSCRIPTION</a>
                            </li>
                            <li>
                                <a class="signin" data-toggle="modal" data-target="#myModal" type="button">CONNEXION</a>
                            </li>
                        </ul>';
                    }
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Se connecter</h3>
            </div>
      
                <div class="modal-body">
                
                <?php
                $submit = $_POST[connexion];
                if(isset($submit))
                    {
                    session_start();
                    $email = $_POST[email];
                    $mdp = $_POST[mdp];
                    $bdd = new PDO('mysql:host=localhost;dbname=viemonjob;charset=utf8', 'admin_viemonjob', 'viemonmdp');
                    $utilisateur = $bdd->query('SELECT * FROM Utilisateurs WHERE Email = "' . $email . '"');
                    $donnees = $utilisateur->fetch();
                    if (empty($email))
                    {
                    echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre adresse email !</div>';
                    }
                    elseif (empty($mdp))
                    {
                    echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Vous devez entrer votre mot de passe !</div>';
                    }
                    elseif($donnees[Email] != $email)
                    {
                        echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Cette adresse email est inconnue !</div>';
                    }
                    elseif($donnees[Email] == $email && $donnees[Mot_de_passe] != $mdp)
                    {
                        echo '<div class="alert alert-warning" style="text-align:center"><strong>Attention ! </strong>Mauvaise combinaison adresse email / mot de passe !</div>';
                    }
                    elseif($donnees[Email] == $email && $donnees[Mot_de_passe] == $mdp)
                        {
                        $id = $donnees[ID];
                        $role = $donnees[Rôle];
                        $_SESSION[email] = $email;
                        $_SESSION[ID] = $id;
                        $_SESSION[Rôle] = $role;
                        header('Location: '.$_SERVER['PHP_SELF']);
                        }
                }
                ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <label for="Nom"><span class="htext">Adresse mail</span></label>
                            <input type="text" class="form-control" id="nom" placeholder="Ex : exemple@exemple.exemple" name="email">
         <br>
                            <label for="Password"><span class="htext">Mot de passe</span></label>
                            <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="mdp">
                <div class="right">
                <small>Mot de passe oublie?</small>
                </div>
            </div>
            
            <div class="modal-footer">
                <a href="inscription.php" ><button type="button" class="btn btn-lg">S'inscrire</button></a>
                 <input type="submit" class="btn btn-lg" name="connexion" value="Se connecter" onClick="window.opener.location.href='../index.php';window.close(); return false;"></button>
                 </form>
            </div>
        </div>
    </div>
</div>