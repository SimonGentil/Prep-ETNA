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
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
    <div id="wrap">
    
    <!-- HEADER -->
    <?php include("page/indexheader.php"); ?>
    <!-- CONTENTS -->
    <!-- SLIDE -->
    <div class="container-fluid">
      <section class="main-slider">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active">
              <img src="../image/slide1.jpg" alt="">
              <div class="carousel-caption">
                FAITES DE VOTRE RÊVE UN MÉTIER
              </div>
            </div><!-- /Slide1 -->
             <!--Slide 2 -->
            <div class="item ">
              <img src="../image/slide2.jpg" alt="">
                <div class="carousel-caption">
                FAITES DE VOTRE RÊVE UN MÉTIER
                </div>
            </div><!-- /Slide2 -->

             <!--Slide 3 -->
              <div class="item ">
                <img src="../image/slide3.jpg" alt="">
                <div class="carousel-caption">
                  FAITES DE VOTRE RÊVE UN MÉTIER
                </div>
              </div><!-- /Slide3 -->

             <!--Slide 4 -->
              <div class="item ">
                <img src="../image/slide4.jpg" alt="">
                <div class="carousel-caption">
                  FAITES DE VOTRE RÊVE UN MÉTIER
                </div>
              </div><!-- /Slide4 -->
              
              <!--Slide 5 -->
              <div class="item ">
                <img src="../image/slide5.jpg" alt="">
                <div class="carousel-caption">
                  FAITES DE VOTRE RÊVE UN MÉTIER
                </div>
              </div><!-- /Slide5 -->
              
              <!--Slide 6 -->
              <div class="item ">
                <img src="../image/slide6.jpg" alt="">
                <div class="carousel-caption">
                  FAITES DE VOTRE RÊVE UN MÉTIER
                </div>
              </div><!-- /Slide6 -->

              <!--Slide 7 -->
              <div class="item ">
                <img src="../image/slide7.jpg" alt="">
                <div class="carousel-caption">
                  FAITES DE VOTRE RÊVE UN MÉTIER
                </div>
              </div><!-- /Slide7 -->
              
              <!--Slide 8 -->
              <div class="item ">
                <img src="../image/slide8.jpg" alt="">
                <div class="carousel-caption">
                  FAITES DE VOTRE RÊVE UN MÉTIER
                </div>
              </div><!-- /Slide8 -->
              
              <!--Slide 9 -->
              <div class="item ">
                <img src="../image/slide9.jpg" alt="">
                <div class="carousel-caption">
                  FAITES DE VOTRE RÊVE UN MÉTIER
                </div>
              </div><!-- /Slide9 -->
              
              <!--Slide 10 -->
              <div class="item ">
                <img src="../image/slide10.jpg" alt="">
                <div class="carousel-caption">
                  FAITES DE VOTRE RÊVE UN MÉTIER
                </div>
              </div><!-- /Slide10 -->
              
            </div><!-- /.carousel-inner -->

        </div><!-- /#myCarousel -->
      </section><!-- /.main-slider -->
    </div>
    
  <br>

    <section>
      <div class="row">
        
        <div class="col-xs-6"><!-- DECOUPAGE ECRAN MOITIER -->
          
          <div class="col-xs-12"><!-- IMAGE -->
            <img src="image/world.jpg" alt="world_img" class="img-circle">
            <div class="carousel-caption">
              EXPÉRIMENTEZ LE JOB DE VOS RÊVES
            </div>
          </div><!-- /IMAGE -->
          
          <div class="col-xs-12"><!-- TEXTE -->
            <div class="imgtext">
              <h3><em><strong>Vivez un nouveau job pendant une semaine!</strong></em></h3>
              Vous pensez vous reconvertir dans une nouvelle activité.<br>
              Vous cherchez un emploi ou une meilleure qualité de vie.<br>
              Vous voulez réaliser un rêve.<br>
              Vous souhaitez découvrir des passionnés.<br>
              Vous désirez expérimenter un autre métier pour le plaisir.<br>
            </div>
            <a href="php/inscriptionparti.php"><button type="button" class="btn btn-lg">Je m'inscris</button></a>
          </div><!-- /TEXTE -->
          
        </div><!-- /COL-XS-6 -->
        
        
        <div class="col-xs-6"><!-- DECOUPAGE ECRAN MOITIER -->
          
          <div class="col-xs-12"><!-- IMAGE -->
            <img src="image/passione.jpg" alt="passione_img" class="img-circle">
            <div class="carousel-caption">
              ACCUEILLEZ UN PASSIONNÉ
            </div>
          </div><!-- /IMAGE -->
        
          <div class="col-xs-12"><!-- TEXTE -->
            <div class="imgtext">
              <h3><em><strong>Transmettez votre métier!</strong></em></h3>
              Vous souhaitez partager votre passion avec quelqu'un de motivé.<br>
              Vous aimez transmettre votre savoir-faire.<br>
              Vous envisagez une embauche ou la reprise de votre activité.<br>
              Vous aidez à relancer l’emploi et à développer une vie de quartier.<br>
              Vous désirez appartenir à un réseau de professionnels reconnus.<br>
            </div>
            <a href="php/inscriptionpro.php"><button type="button" class="btn btn-lg">Je m'inscris</button></a>
          </div><!-- /TEXTE -->
          
        </div><!-- /COL-XS-6 -->
        
      </div>
    </section><!-- /section-->
  
  <br><!-- SAUT DE LIGNE -->
  
  <!--FOOTER-->
    <?php include("page/indexfooter.php"); ?>
  
  <!-- SCRIPT -->
    
    <script>/* SCRIPT SLIDE*/
      $(document).ready(function() {
        $('.carousel').carousel({
          interval: 3000
        })
      });
    </script><!-- /SCRIPT SLIDE -->
 <!--   <script>-->
	<!--	NProgress.configure({ showSpinner: false });  	-->
	<!--  	NProgress.start();-->
	<!--  	setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);-->

	<!--  	$("#b-0").click(function() { NProgress.start(); });-->
	<!--  	$("#b-40").click(function() { NProgress.set(0.4); });-->
	<!--  	$("#b-inc").click(function() { NProgress.inc(); });-->
	<!--  	$("#b-100").click(function() { NProgress.done(); });-->
	<!--</script>-->
</body>
</html>