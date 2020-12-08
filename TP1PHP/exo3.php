<?php

// On défini les valeurs du tableau
$tableau = array(
    array(
        'nom' => 'nom1',
        'prenom' => 'prenom1',
        'mdp' => 'mdp1' 
    ),
    array(
        'nom' => 'nom2',
        'prenom' => 'prenom2',
        'mdp' => 'mdp2' 
    ),
    array(
        'nom' => 'nom3',
        'prenom' => 'prenom3',
        'mdp' => 'mdp3' 
    )
);

// On fait une boucle pour afficher les valeurs dans un tableau
echo '<table border="1"><tr>';

foreach($tableau as $key => $value) {
    foreach($value as $valeur) {
        echo '<td>';
        echo $valeur;
        echo '</td>';
    }
}

echo '</table></tr>';

include("menu.php");


// code source de la page 
highlight_file(__FILE__);
?>
<?php echo '<a href="../"><button>Retour en arrière</button></a>'; ?>
