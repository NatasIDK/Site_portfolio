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
<div id="formul"class="row">
  <div class="col offset-l3 s6">
        <form action="/ma-page-de-traitement" method="post">
            <div class="col offset-l3" >
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div class="col offset-l3" >
                <label for="mail">e-mail&nbsp;:</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div class="col offset-l3" >
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
            <div class="col offset-l6">
            <button class="col waves-effect waves-light btn" >Submit</button>
            </div>
        </form>
    </div>
</div>
  

    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jqueryjsmin.js" ></script>
    <script src="js/materialize.min.js"></script>


  </body>
</html>