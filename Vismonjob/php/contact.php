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
    <link href="../css/contact.css" rel="stylesheet">
</head>

<body>
  <div id="wrap">
    <!-- HEADER -->
    <?php include("../page/header.php"); ?>
    <!--SECTION-->
    <section>
      <?php include("scriptcontact.php"); ?>
      <form action="<?php echo ($_SERVER['PHP_SELF']); ?>">
      <div class="row">
          <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4">
              <div id="contact">
                <p><h3>CONTACT</h3></p>
              </div>
            </div>
          </div>
            <div class="col-xs-12">
              <div style="padding-top:12px">
                <p><h4>N'hésitez pas à nous contacter pour de plus amples détails.</h4></p>
              </div>
            </div>
        <div class="col-xs-6">
            <div class="col-xs-12" style="padding-top:25px">
                <div class="col-xs-6 col-xs-offset-6">
                    <div class="form-group">
                        <label for="nom"><span class="htext">Nom</span></label>
                        <input style="text-align:center" type="text" class="form-control" id="nom" name="nom">
                    </div>
                </div>
            </div>
        
            <div class="col-xs-12">
                <div class="col-xs-6 col-xs-offset-6">
                    <div class="form-group">
                        <span class="htext"><label for="email"><span class="htext">Email</span></label>
                        <input style="text-align:center" type="text" class="form-control" id="prenom" placeholder="exemple@exemple.exemple" name="email">
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6 col-xs-offset-6">
                    <div class="form-group">
                        <label for="objet"><span class="htext">Sujet</span></label>
                        <input style="text-align:center" type="text" class="form-control" id="sujet" name="objet">
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-6">
              <div class="col-xs-6" style="padding-top:25px">
              <label for="message"><span class="htext">Message</span></label>
              <textarea style="min-height:178px; resize:none" class="form-control" name="message"></textarea>
            </div>
        </div>
      
        
        <div class="col-xs-12">
            <div class="col-xs-2 col-xs-offset-5">
            <input type="submit" value="Envoyer" class="btn btn-lg btn-block" name="submit"></input>
            </div>
        </div>
        
        </form>
        <div class="col-xs-6" style="padding-top:21px">
          <p><h4>LOCALISATION</h4></p>
            <div class="col-xs-offset-3">
              <div style="width:450px;max-width:100%;overflow:hidden;height:350px;color:red;"><div id="embedded-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=77+RUE+DE+BELLEVUE+92100+BOULOGNE-BILLANCOURT&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-html" rel="nofollow" href="https://www.interactwive.com" id="make-map-data">twitter sweepstakes</a><style>#embedded-map-canvas .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.interactwive.com/google-maps-authorization.js?id=1c861e67-1dfb-0195-f4d1-baa1a243446c&c=google-map-html&u=1449684006" defer="defer" async="async"></script>
            </div>
        </div>
        
        <div class="col-xs-6" style="padding:25px">
          <p><h4>ADRESSE</h4></p>
          <h5><p>77 RUE DE BELLEVUE<br>
          92100 BOULOGNE-BILLANCOURT<br>
          info@viemonjob.net<br>
          Tel: 06 18 14 16 25</p></h5>
        </div>
      
    </section>
    <!-- FOOTER -->
    <?php include("../page/footer.php"); ?>

    </body>
</html>