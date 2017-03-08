<script type="text/javascript">

//JS realtime clock, otsib asukoha divi järgi ja näitab kellaaega
window.onload = function(){
    (function(){
        var date = new Date();
        var time = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();
        document.getElementsByTagName('div')[0].innerHTML="JS aeg"+time;
        window.setTimeout(arguments.callee, 1000);
    })();
};
</script>


<?php 

include "functions.php";//kui kätte ei saa jätkataske täitmist; require peatataske, oncerequire esimesel laadimisel nõutakse

//näited muutujatest
$date = "08.03.2017";
$number =5;
$float=5.2;
$float1=5.18;

back_home();

echo "Täna on  $date, kolmas tund<br>";

//näide liidestamisest
echo "Esimene float on ".$float." jat teine float on ".$float1."<br>";
echo $float + $float1."<br>";

//


echo '<div></div>';
aeg();



?>