<?php
$nombre = "James Bond";
$agente = '007';
$titulo = "Agente al servicio de su 'magestad'";
//print $nombre;
//print $agente;
//print $titulo;

$str = <<<EOD
Mi nombre es: $nombre <br>
mi número de agente es: $agente <br>
mi lema es: $titulo
EOD;

print $str;

?>