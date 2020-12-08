<?php 

// On génére le nombre aléatoire
$NombreAleatoire = rand ( 0 , 100 );

// On vérifie si la variable NombreAleatoire existe
if(isset($NombreAleatoire)) {
    // On vérifie si le nombre est paire ou impaire
    if($NombreAleatoire%2 == 1) {
        echo '<div style="width: 600px;  padding-top:10px; padding-bottom:10px;border: 3px solid #A0A0A0; text-align: center;background: #841607;"> ' . $NombreAleatoire . ' est un nombre paire</div>';
    } else {
        echo '<div style="width: 600px;  padding-top:10px; padding-bottom:10px;border: 3px solid #A0A0A0; text-align: center;background: #4B5F81;"> ' . $NombreAleatoire . ' est un nombre impaire</div>';
    }
}

include("menu.php");

// code source de la page 
highlight_file(__FILE__);
?> 
<?php echo '<a href="../"><button>Retour en arrière</button></a>'; ?>
