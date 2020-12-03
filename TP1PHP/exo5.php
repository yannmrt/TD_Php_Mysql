<?php

// On vérifie si POST de valider existe
if(isset($_POST['valider'])) {
    // Si oui ont quelques vérifications
    $text = htmlspecialchars($_POST['text']);

    if(!empty($text)) {
        echo '<p style="color:red">'.$text.'</p>';
    } else {
        echo 'Veuillez entrer un texte avant de valider';
    }
}

?>
<!DOCTYPE html>
<html>
<head> 
   <title>Exercices 5</title>
</head>
<body>

<form method="POST">
   <input type="text" name="text" />
   <input type="submit" name="valider" />
</form>


</body>
</html>

<?php echo '<a href="../"><button>Retour en arrière</button></a>'; ?>
