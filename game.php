<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/cssgame.css">
    <title>Game</title>
    <!-- for Brython -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/brython@3.8.9/brython.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/brython@3.8.9/brython_stdlib.js">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 
</head>

  <body onload="brython()">
  
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


        <h1 class="text-center">Snake Game </h1>
        <canvas id="game-board" width="400" height="400"></canvas>
        <br>
        <h3 id="score" class="text-center">Score: 0</h3>
        <br>
        <h6 id="high-score" class="text-center">High Score: 0</h6>
        <br>
        <div class="text-center">
        <button id="instructions-btn" class="btn btn-info">Instructions</button>
        </div>


        <script type="text/python">

        from browser import document, html, window
        import random

        score = 0
        high_score = 0

        px = py = 10
        gs = tc = 20
        ax = ay = 15
        xv = yv = 0
        trail = []
        tail = 5

        pre_pause = [0,0]
        paused = False

        def game():
            global px, py, tc, gs, ax, ay, trail, tail, score
            px += xv
            py += yv
            if px < 0:
                px = tc-1
            if px > tc-1:
                px = 0
            if py < 0:
                py = tc-1
            if py > tc-1:
                py = 0
            ctx.fillStyle = "black"
            ctx.fillRect(0, 0, canvas.width, canvas.height)
            ctx.fillStyle = "lime"
            for i in range(len(trail)):
                ctx.fillRect(trail[i][0]*gs, trail[i][1]*gs, gs-2, gs-2)
                if trail[i][0] == px and trail[i][1] == py:
                    score = score if paused else 0
                    tail = tail if paused else 5
            trail.insert(0, [px, py])
            while len(trail) > tail:
                trail.pop()

            if ax == px and ay == py:
                tail += 1
                ax = int(random.random()*tc)
                ay = int(random.random()*tc)
                score += 1
            update_score(score)
            ctx.fillStyle = "red"
            ctx.fillRect(ax*gs, ay*gs, gs-2, gs-2)

        def update_score(new_score):
            global high_score
            document["score"].innerHTML = "Score: " + str(new_score)
            if new_score > high_score:
                document["high-score"].innerHTML = "High Score: " + str(new_score)
                high_score = new_score

        def key_push(evt):
            global xv, yv, pre_pause, paused
            key = evt.keyCode
            if key == 37 and not paused:
                xv = -1
                yv = 0
            elif key == 38 and not paused:
                xv = 0
                yv = -1
            elif key == 39 and not paused:
                xv = 1
                yv = 0
            elif key == 40 and not paused:
                xv = 0
                yv = 1
            elif key == 32:
                temp = [xv, yv]
                xv = pre_pause[0]
                yv = pre_pause[1]
                pre_pause = [*temp]
                paused = not paused

        def show_instructions(evt):
            window.alert("Use the arrow keys to move and press spacebar to pause the game.")

        canvas = document["game-board"]
        ctx = canvas.getContext("2d")
        document.addEventListener("keydown", key_push)
        game_loop = window.setInterval(game, 1000/10)
        instructions_btn = document["instructions-btn"]
        instructions_btn.addEventListener("click", show_instructions)


        </script>

            

    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jqueryjsmin.js" ></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/scriptcv.js"></script>


  </body>
</html>