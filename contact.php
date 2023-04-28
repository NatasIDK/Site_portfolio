<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen"/>
    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="css/csscontact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contact</title>
  </head>

  <body>
  <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper black ">
              <a href="contact.php" class="brand-logo right">Contact</a>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="home.php">HOME</a></li>
                 
            </ul>
            </div>
        </nav>
        </div>


<div id="formul"class="row">
  <div class="col offset-l3 s6">
        <div class="modal-content">
          <form id="contact-form" action="phpcfg/submit-form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <input type="submit" value="Envoyer">
            <a href="home.php" class="right" style="color: black;">Retour</a>
          </form>
          <div id="form-output"></div>                                         
        </div>
      </div>
    </div>
</div>
  

    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jqueryjsmin.js" ></script>
    <script src="js/materialize.min.js"></script>


  </body>
</html>