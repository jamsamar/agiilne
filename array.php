<?php
include "functions.php";

back_home();

$var= "Minu muutujad";
$massiiv = array("nimi", 11, 12.3, $var);

//print_r($massiiv);
echo "<br>";
//var_dump($massiiv);

for($i=0; $i< count($massiiv); $i++){
    echo "<br>".$massiiv[$i];
}

foreach($massiiv as $element){
    echo "<br>".$element;
}

echo "<br>";
$assoc_array = array("esimene"=>"Brent", "teine"=>"Juhan", "kolmas"=>"Maarja", "neljas"=>"Markus");

foreach($assoc_array as $key => $name){
    echo $name." on nimekirjas ".$key."<br>";
}

$mata ="matemaatika";
$esta = "Eesti keel";
$keka ="kehaline kasvatus";

$hinneteleht = array("Mari"=>array($mata=>4, $esta=>3, $keka=>4), 
                     "Jüri"=>array($mata=>5, $esta=>5, $keka=>4), 
                     "Juhan"=>array($mata=>4, $esta=>4, $keka=>2) );
$hinded_id= array_keys($hinneteleht);
print_r( $hinded_id);
$hinded_nr= count($hinded_id);
echo "<br>";
for($i=0; $i<$hinded_nr; $i++){
    echo'<strong>'.$hinded_id[$i].'</strong><br>';
    foreach($hinneteleht[$hinded_id[$i]] as $aine =>$hinne ){
        echo $aine." : ".$hinne."<BR>";
    }
}

$str="Meil on praegu 5 tund";
print_r(explode(" ",$str)); 
$str2= array("meil", "on", "5", "tund");
echo implode(" ",$str2);



?>