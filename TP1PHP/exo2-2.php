<?php 

// Exo 2.2 
$tableau = array(
    'nom' => 'nom1',
    'prenom' => 'prenom1',
    'mdp' => 'mdp1'
);


// On créer la boucle pour généré le tableau et afficher les données
echo '<table border="1"><tr>';

for($i=1;$i<=1;$i++) {
    echo '<tr>';
    for($j=1;$j<=1;$j++) {
        echo '<td>';
        echo $tableau['nom'];
        echo '</td>';
    }
    for($j=1;$j<=1;$j++) {
        echo '<td>';
        echo $tableau['prenom'];
        echo '</td>';
    }
    for($j=1;$j<=1;$j++) {
        echo '<td>';
        echo $tableau['mdp'];
        echo '</td>';
    }
    echo '</tr>';
}

echo '</table></tr>';

include("menu.php");


// code source de la page 
highlight_file(__FILE__);
?>
<?php echo '<a href="../"><button>Retour en arrière</button></a>'; ?>
