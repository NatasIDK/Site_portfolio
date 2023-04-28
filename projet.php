<!DOCTYPE html>
<html lang="fr">
<?php 
        require_once "phpcfg/config.php";
        $sql = "SELECT * FROM projet WHERE id=:id";    
        $pre = $pdo->prepare($sql);
        $pre->bindParam("id",$_GET["id"]);
        $pre->execute();
        $projet = $pre->fetch(PDO::FETCH_ASSOC);

        ?>
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen"/>
    <link rel="stylesheet" href="css/cssprojet.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Communication Perso</title>
  </head>

  <body>
  
    <!--START OF NAVBAR -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper black ">
              <a href="contact.php" class="brand-logo right">Contact</a>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="home.php"><?php echo $projet["navhome"]?></a></li>
                  <!-- Dropdown Trigger -->
                    <a id="btndrop"class='black dropdown-trigger btn' href='#' data-target='dropdown1' >Project</a>
                        <!-- navbar game -->
                        <li><a href="game.php"><?php echo $projet["navgame"]?></a></li>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content ul_dropdrop'>
                        
                        <li><a class="ul_dropdrop" href="projet.php?id=1"> Com Personel</a></li>
                        <li><a class="ul_dropdrop" href="projet.php?id=2">Algo Python</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a class="ul_dropdrop" href="projet.php?id=3">Html/CSS</a></li>
                        <li><a class="ul_dropdrop" href="projet.php?id=4">Web JS</a></li>
                        <li><a class="ul_dropdrop" href="projet.php?id=5">sql/php</a></li>
                        <li><a class="ul_dropdrop" href="#!">Html/CSS</a></li>
                    </ul>
                <li><a href="CV.php"><?php echo $projet["navcv"]?></a></li>
              </ul>
            </div>
          </nav>
        </div>

            <!--END OF NAVBAR -->

        <div class="row">
            <div class="col l6 offset-l3">
            <div id="presentation" class="section scrollspy"> 
                <h1><?php echo $projet["h1titre"]?></h1>
                <P>
                <?php echo $projet["paragh1"]?>
                
                </P>
            </div>

            <div id="contained" class="section scrollspy">
                <h2> <?php echo $projet["h2titre"]?></h2>
                <p><?php echo $projet["paragh2"]?>
                </p>
                <div class="carouselturn margincarou">
                    <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="<?php echo $projet["carouimg1"]?>" alt="First panel of the diaporama"></a>
                    <a class="carousel-item" href="#two!"><img src="<?php echo $projet["carouimg2"]?>" alt="seconde panel of the diaporama"></a>
                    <a class="carousel-item" href="#three!"><img src="<?php echo $projet["carouimg3"]?>" alt="third panel of the diaporama"></a>
                    <a class="carousel-item" href="#four!"><img src="<?php echo $projet["carouimg4"]?>" alt="fourth panel of the diaporama"></a>
                    <a class="carousel-item" href="#five!"><img src="<?php echo $projet["carouimg5"]?>" alt="Fifth panel of the diaporama"></a>
                    <a class="carousel-item" href="#five!"><img src="<?php echo $projet["carouimg6"]?>" alt="Sixth panel of the diaporama"></a>
                    </div>
                </div>
            </div>
            
            <div>
            <h3><?php echo $projet["h3titre"]?></h3>
            <div id="skills" class="section scrollspy">
                <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">🗣</i><?php echo $projet["competence1t"]?></div>
                    <div class="test collapsible-body"><span><?php echo $projet["competencepara1"]?>
                    </span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">👨‍🎓</i><?php echo $projet["competence2t"]?></div>
                    <div class="test collapsible-body"><span><?php echo $projet["competencepara2"]?>
                    </span></div>
                </li>
                    <li>
                    <div class="collapsible-header"><i class="material-icons">❔</i><?php echo $projet["competence3t"]?></div>
                    <div class="test collapsible-body"><span><?php echo $projet["competencepara3"]?>
                    </span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">💬</i><?php echo $projet["competence4t"]?></div>
                    <div class="test collapsible-body"><span><?php echo $projet["competencepara4"]?>
                    </span></div>
                </li>
                </ul>
            </div>
            </div>

            
            <div id="return" class="section scrollspy">
                <h3><?php echo $projet["h4retour"]?></h3>
                <p>
                <?php echo $projet["paragretour"]?>
            
                </p>
                
                </div>         
            </div>
        </div>
    </div>
          
            </html>
    <script src="js/jqueryjsmin.js" ></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/scriptprojet.js"></script>


  </body>
</html>