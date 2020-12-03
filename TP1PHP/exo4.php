<?php

// Valeurs de A, B et C
$A = '5x²';
$B = '1x';
$C = '7';

// On ecrit l'équation dans une variable
$equation = $B*$B-4*$A*$C;

echo 'L\'équation est: '.$B.'² - 4 x (' .$A.' x '.$C.') = 0';
echo '<div>Résultat de l\'équation: ' . $equation.'</div>';

// code source de la page 
highlight_file(__FILE__);
?>
<?php echo '<a href="../"><button>Retour en arrière</button></a>'; ?>
