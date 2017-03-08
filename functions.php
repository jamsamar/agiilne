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

function menu(){
    $files= "array, functions, info";
    $menu_array= explode(",", $files);
    for($i=0; $i<count($menu_array);$i++){
        echo '<li><a href="'.$menu_array[$i].'.php">'.$menu_array[$i].'</a></li>';
    }
}

?>