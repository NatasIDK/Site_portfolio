<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen"/>
    <link rel="stylesheet" href="css/csscv.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>CV Ethan Petitjean</title>
  </head>

  <body>
  
    <!--START OF NAVBAR -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper black ">
              <a href="contact.php" class="brand-logo right">Contact</a>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="home.php">HOME</a></li>
                  <!-- Dropdown Trigger -->
                    <a id="btndrop"class='dropdown-trigger btn' href='#' data-target='dropdown1'>Project</a>
                    <!-- navbar game -->
                    <li><a href="game.php">Game</a></li>
                    <li><a href="CV.php">CV</a></li>
    
                    <!-- Dropdown Structure -->
                      <?php 
                  require_once "phpcfg/config.php";
                  $sql = "SELECT * FROM projet";    
                  $pre = $pdo->prepare($sql);
                  $pre->execute();
                  $projets = $pre->fetchAll(PDO::FETCH_ASSOC);

                  foreach($projets as $projet){
                  ?>
                  <ul id='dropdown1' class='dropdown-content ul_dropdrop'>
                      <li><a class="ul_dropdrop" href="projet.php?id=1">Com perso</a></li>
                      <li><a class="ul_dropdrop" href="projet.php?id=2">Algo Python</a></li>
                      <li><a class="ul_dropdrop" href="projet.php?id=3">Html/CSS</a></li>
                      <li><a class="ul_dropdrop" href="projet.php?id=4">Web JS</a></li>
                      <li><a class="ul_dropdrop" href="projet.php?id=5">Sql/php</a></li>
                      <li><a class="ul_dropdrop" href="projet.php?id=6"><?php echo $projet["nomeforhome"]?></a></li>
                  </ul>
            </ul>
          </div>
          <?php }?>
        </nav>
        </div>

            <!--END OF NAVBAR -->
            <div class="row">
                <div class="col offset-s2 s4">
                <embed src="pdf/CV_EthanPETITJEAN.pdf" width="800" height="500" type="application/pdf"/>
                </div>
            </div>
            <div class="row">
                <div class="col offset-s5 s3">   
            <button class="col waves-effect waves-light btn s9" download="pdf/CV_EthanPETITJEAN.pdf">Download</button>
            </div>
        </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jqueryjsmin.js" ></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/scriptcv.js"></script>


  </body>
</html>