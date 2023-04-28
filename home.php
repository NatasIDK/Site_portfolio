<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen"/>
    <link rel="stylesheet" href="css/csshome.css">
    <!--Let browser know website is optimized for mobile-->
    <link rel="shortcut icon" href="imgs/icon_logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Présentation Ethan Petitjean</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  </head>

  <body>
  

  <?php 
        require_once "phpcfg/config.php";
        $sql = "SELECT * FROM home WHERE id=1";    
        $pre = $pdo->prepare($sql);
        $pre->bindParam("id",$_GET["id"]);
        $pre->execute();
        $home = $pre->fetch(PDO::FETCH_ASSOC);

  ?>  
    <!--START OF NAVBAR -->
    <div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper black ">
          <a href="contact.php" class="brand-logo right"><?php echo $home["navContact"]?></a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="home.php"><?php echo $home["navHome"]?></a></li>
              <!-- Dropdown Trigger -->
                <a id="btndrop"class='dropdown-trigger btn' href='#' data-target='dropdown1' ><?php echo $home["NavProjet"]?></a>
                    <!-- navbar game -->
                    <li><a href="game.php">Game</a></li>
                    <li><a href="CV.php"><?php echo $home["navCV"]?></a></li>
                    <li><a href="fichetech.php">fiche technique</a></li>
                <!-- Dropdown Structure -->
                <?php 
                
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

            <!--START OF PARALLAX -->

    <div class="parallax-container">
        <div class="parallax"><img src="<?php echo $home["imgparallax1"]?>" style="width: 100%;"></div>
      </div>
      <div class="row section white">
          <div class="col s6"style="background-color: green;">
                <p><?php echo $home["imgMOI"]?></p>
          </div>
        <div class="col s6">
          <h2 class="header"><?php echo $home["parah2"]?></h2>
          <p class="grey-text text-darken-3 lighten-3">
          <?php echo $home["paratext"]?>
          </p>
        </div>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="<?php echo $home["imgparallax2"]?>" style="width: 100%;"></div>
      </div>

            <!--END OF PARALLAX -->


    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jqueryjsmin.js" ></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/scripthome.js"></script>


  </body>
</html>