<?php


// Cette fonction affiche un tableau et une fois le tableau rempli il vérifie le mot de passe entrer 
function formulaire() {
    ?> <html><form method="POST">
    <input type="password" name="password" />
    <input type="submit" name="valider" />
    </form></html>
    <?php

    if(isset($_POST['valider'])) {
        $password = htmlspecialchars($_POST['password']);
        if(!empty($password)) {
            if($password == "1234") {
                echo 'Vous avez le bon mot de passe. Voici le lien vers la page : google.fr';
            } else {
                echo 'Mauvais mot de passe';
            }
        } else {
            echo 'Veuillez entrer un mot de passe';
        }
    }
}


?>
<!doctype html>
<html lang="fr">
<head>
<title>Exo Final - TP2</title>
</head>
<body>

<?php include('menu.php'); ?>

<?php formulaire(); ?>


</body>
</html>

<?php 

// code source de la page 
highlight_file(__FILE__); 

?>
<?php echo '<a href="index.php"><button>Retour en arrière</button></a>'; ?>
