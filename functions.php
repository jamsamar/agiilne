<?php

function back_home(){
    echo '<li><a href="index.php">Tagasi</a></li>';
}


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

?>