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
    <link href="../css/inscriptionbtn.css" rel="stylesheet">
</head>

<body>
  <div id="wrap">
    <!-- HEADER -->
    <?php include("../page/header.php"); ?>
    <!--SECTION-->
    <div class="insc">

        <div class="col-xs-12">
            <span class="titretext"><h1> Inscription <br/> <small> Merci de renseigner vos informations </small></h1></span>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4" style="padding-top:30px; margin-bottom:43px">
            <a href="inscriptionparti.php"><input type="submit" value="Particulier" class="btn btn-lg btn-block" name="submit"></input></a>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-4 col-xs-offset-4" style="padding-top:30px; margin-bottom:43px">
            <a href="inscriptionpro.php"><input type="submit" value="Professionnel" class="btn btn-lg btn-block" name="submit"></input></a>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include("../page/footer.php"); ?>
    <!-- SCRIPT -->
    </body>
</html>