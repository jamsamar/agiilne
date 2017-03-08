<?php
include "functions.php";
$var= "Minu muutujad";
$massiiv = array("nimi", 11, 12.3, $var);

print_r($massiiv);
echo "<br>";
var_dump($massiiv);

for($i=0; $i< count($massiiv); $i++){
    echo "<br>".$massiiv[$i];
}


?>