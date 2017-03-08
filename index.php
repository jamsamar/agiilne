<?php 

$date = "08.03.2017";
$number =5;
$float=5.2;
$float1=5.18;


echo "Täna on  08.03 2017, kolmas tund<br>";
echo "Esimene float on ".$float." jat teine float on ".$float1."<br>";
echo $float + $float1."<br>";

function aeg(){
    date_default_timezone_set("Europe/Tallinn");
    $time =date("H:i:s");
    echo $time."<br>";
    
    if($time>"16:00"){
        echo "Tund läbi";
    }else{
        echo "Tund kestab";
    }

}
aeg();



?>