<?php
//Snoopy class include
require_once('/var/www/Snoopy/Snoopy.class.php');

//COVID-19_all 
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

$snoopy->fetch('http://www.pohang.go.kr/COVID-19.html');

preg_match_all('/<span>확진자#(.*?)<\/span>/is', $snoopy->results, $pohang);


$pohang[0][1]=preg_replace('/<span>확진자#|<(.*?)>/',"",$pohang[0][1]);

echo $pohang[0][1];
?>