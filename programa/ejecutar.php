<?php

echo "Calcular la hipotenusa de triangulo rectangulo";
$cateto = 3;
$cateto2 = 4;
$hipotenusa = null;
$hipotenusa = sqrt(pow($cateto,2) + pow($cateto2,2));
echo '<br> Valor del primer cateto: ' . $cateto, '<br />';
echo 'Valor del segundo cateto: ' . $cateto2, '<br />';
echo 'Valor de la hipotenusa: ' . $hipotenusa, '<br />';

?>