<?php
//Snoopy class include
require_once('/var/www/Snoopy/Snoopy.class.php');

//COVID-19_all 
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

$snoopy->fetch('https://www.buk.daegu.kr/index.do');

preg_match_all('/<td>(.*?)<\/td>/is', $snoopy->results, $bukgu);
$bukgu[0][1]=preg_replace('/<(.*?)>|\((.*?)\)/',"",$bukgu[0][1]);
#echo $bukgu[0][5];
?>