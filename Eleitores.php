<?php

$nasc=$_GET["i"];
$idade = 2019-$nasc;
$obrigado = ($idade>=18 and $idade <=65) ? "é obrigado":"não é obrigado";
echo "o ano de nascimento do eleitor é $nasc, portando, a sua idade é $idade </br>";
echo "com essa idade, o eleitor $obrigado a votar";
?>