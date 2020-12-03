<?php 


$tableau = array('1', '2', '3', '4', '5');


// On fait une boucle pour afficher les données
echo '<table border="1"><tr>';

for($i=0;$i<=4;$i++) {
    echo '<td>' . $tableau[$i] . '</td>';

}

echo '</table></tr>';


// code source de la page 
highlight_file(__FILE__);
?>
<?php echo '<a href="../"><button>Retour en arrière</button></a>'; ?>
