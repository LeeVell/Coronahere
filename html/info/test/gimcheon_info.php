<?php
//Snoopy class include
require_once('/var/www/Snoopy/Snoopy.class.php');

//COVID-19_all 
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

$snoopy->fetch('https://gc.go.kr/main.do');

preg_match('/<strong class="red">(.*?)<br\/>/is', $snoopy->results, $gimcheon);

$gimcheon[1]=preg_replace('/<(.*?)>/',"",$gimcheon[1]);

echo $gimcheon[1];

?>