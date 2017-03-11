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
    $files= "array, functions, info, file, curl";
    $menu_array= explode(",", $files);
    for($i=0; $i<count($menu_array);$i++){
        echo '<li><a href="'.$menu_array[$i].'.php">'.$menu_array[$i].'</a></li>';
    }
}

function counter(){
    $file_name='count.txt';
    if(!file_exists('count.txt')){
        $file=fopen($file_name,"w") or die("Ei saa faili avada");
        $count =1;
        fwrite($file,$count);
        fclose($file);
    }else{
        $file=fopen($file_name,"r+w") or die("Ei saa faili avada");
        $count =file_get_contents($file_name)+1;
        fwrite($file,$count);
        fclose($file);
    }
    echo "<br>Olete ".$count.".s külastaja";    

}

function getIp(){
    $ip = $_SERVER['REMOTE_ADDR'];
    $file_name ='visitor.txt';
    $time=date("d.m.Y H:i:s");
    $visitor =$ip." ".$time."\n";
    $file=fopen($file_name, 'a') or die("ei saanud avatud faili");
    fwrite($file, $visitor);
    fclose($file);
    echo "Külastaja aadress on ". $ip;
    
}


?>