<?php

// Mudar o padrão de localização
setlocale(LC_ALL, "pt_BR.utf-8", 'portuguese');

// Obtendo a data atual
$date = new DateTime();

// Formatando a data
echo $date->format('l F');

?>
