<?php
  require_once "config.php"; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $db = new PDO('mysql:host=localhost;dbname=portfolio', 'root', 'root');

    // Préparer la requête d'insertion
    $query = $db->prepare("INSERT INTO livre (name, email, message) VALUES (:name, :email, :message)");
    // Lier les valeurs du formulaire aux paramètres de la requête
    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    $query->bindParam(':message', $message);

    // Exécuter la requête
    $query->execute();
}
header('Location:../home.php')
  ?> 