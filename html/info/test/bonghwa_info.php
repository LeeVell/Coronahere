<?php
//Snoopy class include
require_once('/var/www/Snoopy/Snoopy.class.php');

//COVID-19_all 
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";
$snoopy->referer ='https://www.bonghwa.go.kr/';

$snoopy->fetch('https://www.bonghwa.go.kr/');

preg_match('/<td>(.*?)<\/td>/is', $snoopy->results, $honghwa);

$hognhwa[1]=preg_replace('/<(.*?)>/',"",$hongwa[1]);
echo $hongwa[1];
?>