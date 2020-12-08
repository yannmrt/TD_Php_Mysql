<?php
session_start();

// Informations de connexion
$usernameSite = "julien";
$mdpSite = "1234";


// On vérifie si POST de valider est présent
if(isset($_POST['valider'])) {
    // Si oui ont continue
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // On vérifie que les champs ne sont pas vide 
    if(!empty($username) AND !empty($password)) {
        if($username == $usernameSite) {
            if($password == $mdpSite) {
                $_SESSION['username'] = $username;
            } else {
                echo 'Le mot de passe ne correspond pas';
            }
        } else {
            echo 'Le nom d\'utilisateur de correspond pas';
        }
    } else { 
        echo 'Veuillez compléter tous les champs';
    }
}

// Si POST de logout est présent on detruit la session
if(isset($_POST['logout'])) {
    $_SESSION = array();
    session_destroy();
    unset($_SESSION);
}

// Si SESSION username existe alors l'utlisateur est connecter 
if(isset($_SESSION['username'])) {
    echo 'Bienvenue ' . $_SESSION['username'];
    echo '<form method="post"><input type="submit" name="logout" value="Déconnexion" />';

} else {

    ?>

        <!DOCTYPE html>
        <html>
        <head> 
        <title>Exercices Final</title>
        </head>
        <body>

        <form method="POST">
        <input type="text" name="username" placeholder="Nom d'utilisateur" />
        <input type="password" name="password" placeholder="Mot de passe" />
        <input type="submit" name="valider" />
        </form>


        </body>
        </html>

    <?php

}

include("menu.php");

// code source de la page 
highlight_file(__FILE__); ?>
<?php echo '<a href="../"><button>Retour en arrière</button></a>'; ?>
