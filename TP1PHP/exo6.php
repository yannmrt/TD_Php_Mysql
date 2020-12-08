<?php

// on vérifie si GET de text existe 
if(isset($_GET['text'])) {
    //Si oui on continue
    $text = htmlspecialchars($_GET['text']);

    if(!empty($text)) {
        echo '<p style="color:#78006c">'.$text.'</p>';
    } else {
        echo 'Veuillez entrer du texte avant de valider';
    }
}

include("menu.php");

?>
<!DOCTYPE html>
<html>
<head> 
   <title>Exercices 5</title>
</head>
<body>

<form method="GET">
   <input type="text" name="text" />
   <input type="submit" />
</form>


</body>
</html>

<?php 

// code source de la page 
highlight_file(__FILE__);

?>

<?php echo '<a href="../"><button>Retour en arrière</button></a>'; ?>
